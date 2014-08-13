<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 *
 * @date 30.06.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\FrontModule\Presenters
 */

namespace 
    Blacklist\FrontModule\Presenters;

use
    Nette,
    Nette\Database\Context;

/**
 * @author Томас Петр
 */
class ProductPresenter extends BasePresenter
{
    private $db;
    
    /**
     * 
     * @param \Nette\Database\Context $db
     */
    public function __construct(Context $db)    
    {
        $this->db = $db;
        parent::__construct($db);
    }
    
    /**
     * 
     * @param type $link
     */
    public function renderShow($link)
    {  
        $articleF = new \Blacklist\Factory\ArticleFactory($this->db);
        $this->template->articles = $articleF->getAll(3);
        $this->defaultInit($this->db, $this->template);
        $categoryF = new \Blacklist\Factory\CategoryFactory($this->db);
        $this->template->categories = $categoryF->getAll();
        $this->template->rarticles = $articleF->getAll();
        $productF = new \Blacklist\Factory\ProductFactory($this->db);
        $this->template->product = $productF->getByUrl($link);
        
        if($this->template->product->name == NULL){
            $this->redirect('Error:default');
            return;
        }
        
        $myadditionals = array();
        foreach($this->template->product->getAdditionals() as $myadd){
            $myadditionals[$myadd->extra] = $myadd->getExtraObject();
        }
        sort($myadditionals);

        $this->template->myadds = $myadditionals;
        $mytypes = array();
        foreach($this->template->product->getTypes() as $type){
            $mytypes[$type->code] = $type;
        }
        $this->template->mytypes = $mytypes;
        $menuF = new \Blacklist\Factory\MenuFactory($this->db);
        $productURL = $menuF->getByUrl($this->template->product->getCategoryObject()->link);
        if($productURL->getParent() == 0){
            $this->template->activePage = $link;
        }else{
            $this->template->activePage = $productURL->getParentObject()->link;
        }
    }
    
    /**
     * 
     * @return \Nette\Application\UI\Form
     */
    protected function createComponentAddToCartForm()
    {
        $form = new Nette\Application\UI\Form;
        $productF = new \Blacklist\Factory\ProductFactory($this->db);
        $product = $productF->getByUrl($this->getParameter('link'));
        $form->addCheckboxList('additionals', '', $this->getAdditionalsAsArray($product));
        $form->addRadioList('types', '', $this->getTypesAsArray($product));
        $form->addHidden('product', $product->id);
        $form->addText('stack', 'počet')
            ->addRule(Nette\Application\UI\Form::RANGE, "Nesmiete objednať záporný alebo nulový počet kusov!", array(1, null))
            ->setDefaultValue(1);
        $form->addSubmit('send', 'odeslat');
        $form->onSuccess[] = $this->addToCartFormSubmitted;
        return $form;
    }
    
    /**
     * 
     * @param \Blacklist\Object\ProductObject $product
     * @return type
     */
    private function getTypesAsArray(\Blacklist\Object\ProductObject $product)
    {
        $versions = array();
        foreach($product->getTypes() as $type){
            $versions[$type->code] = $type->name;
        }
        return $versions;
    }
    
    /**
     * 
     * @param \Blacklist\Object\ProductObject $product
     * @return type
     */
    private function getAdditionalsAsArray(\Blacklist\Object\ProductObject $product)
    {
        $additionals = array();
        foreach($product->getAdditionals() as $add){
            $additionals[$add->extra] = $add->getExtraObject()->name;
        }
        sort($additionals);
        return $additionals;
    }
    
    /**
     * 
     * @param Nette\Application\UI\Form $form
     */
    public function addToCartFormSubmitted(\Nette\Application\UI\Form $form)
    {
        $session = $this->getSession('cart');
        $data = $form->getValues();
        $productF = new \Blacklist\Factory\ProductFactory($this->db);
        $p = $productF->getById($data->product);
        // pokud jsou zaškrtnutý doporučený doplňky tak se přidaj
        foreach($data->additionals as $additional){
            $product = $productF->getById($additional);
                $session->cart->add(
                        $product,
                        $product->code,
                        1,
                        $product->name,
                        $product->getPrice(),
                        $product->pricedph
                );
            
        }
        
        if($data->types != ''){
            $typefactory = new \Blacklist\Factory\ProductTypeFactory($this->db);
            $mytype = $typefactory->getByCode($data->types);
            $session->cart->add(
                    $p,
                    $data->types,
                    $data->stack,
                    $mytype->name,
                    $mytype->getPriceWithoutDph(),
                    $mytype->pricedph
            );
        }else{
            $session->cart->add(
                   $p,
                   $p->code,
                   $data->stack,
                   $p->name,
                   $p->getPrice(),
                   $p->pricedph
            );
        }
        
        $this->redirect('Homepage:cart');
    }

}