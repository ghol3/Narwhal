<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 *
 * @date 28.06.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\AdminModule\Presenters
 */

namespace 
    Blacklist\AdminModule\Presenters;

use
    Nette,
    Nette\Database\Context;

/**
 * @author Томас Петр
 */
class ProductPresenter extends BasePresenter
{    
    private $database;
    private $factory;
    private $id;
    
    /**
     * This is the constructor of this class just set the
     * database context from Nette to my parent.
     * 
     * @param Nette\Database\Context $db
     */
    public function __construct(Context $db)
    {
        parent::__construct();
        $this->database = $db;
        $this->factory = new \Blacklist\Factory\ProductFactory($db);
    }
    
    public function handleChangeType()
    {
        $data = $_POST;
        $factory = new \Blacklist\Factory\ProductTypeFactory($this->database);
        $mytype = $factory->getById($data['typeid']);
        $mytype->code = $data['code'];
        $mytype->name = $data['name'];
        $mytype->pricedph = $data['price'];
        $mytype->setDatabase($this->database);
        $mytype->update();
        
        $this->flashMessage(STR_524 . ' "' . $mytype->name . '" ' . STR_523, 'success');
        $this->redirect('Product:edit', $mytype->product);
    }
    
    public function handleChangeMyTab()
    {
        $data = $_POST;
        $factory = new \Blacklist\Factory\ProductTabFactory($this->database);
        $je = $factory->getById($data['tabid']);
        $je->content = $data['content'];
        $je->update();
        $this->redirect('Product:edit', $this->getParameter('id'));
    }
    
    /**
     * 
     */
    public function handleChangeTab()
    {
        $data = $_POST;
        $factory = new \Blacklist\Factory\ProductTabFactory($this->database);
        $mytab = $factory->getById($data['tabid']);
        $mytab->name = $data['name'];
        $mytab->update();
        
        $this->flashMessage(STR_522 . ' "' . $mytab->name . '" '.STR_523, 'success');
        $this->redirect('Product:edit', $mytab->product);
    }
    
    /**
     * 
     */
    public function renderChangeAll()
    {
        $visibility = (isset($_POST['visibility']) ? $_POST['visibility'] : array());
        $priority   = (isset($_POST['priority']) ? $_POST['priority'] : array());
        $this->factory->changeAll($visibility, $priority);
        $this->flashMessage(STR_521, 'success');
        $this->saveLog(STR_520, $this->database);
        $this->redirect('Product:default');
    }
    
    /**
     *
     *
     */
    public function startup()
    {
        parent::startup();
        $this->template->user = $this->getUser();
    }
    
    /**
     * This method just render the default page in 
     * my homepage...
     */
    public function renderDefault()
    {
        $this->template->products = $this->factory->getAll();
        $categories = array();
        foreach($this->template->products as $product){
            if(!isset($categories[$product->category])){
                $categories[$product->category] = $product->getCategoryObject()->name;
            }
        }
        $this->template->categories = $categories;
    }
    
    /**
     * 
     * @param type $id
     */
    public function renderEdit($id)
    {
        $this->template->product = $this->factory->getById($id);
        $settings = new \Blacklist\Model\Settings\SettingsAction($this->database);
        $this->template->settings = $settings->getBasicSettings();
    }
    
    /**
     * 
     */
    public function renderAdd()
    {
	$settings = new \Blacklist\Model\Settings\SettingsAction($this->database);
        $this->template->settings = $settings->getBasicSettings();
    }
    
    /**
     * 
     * @return type
     */
    protected function createComponentAddForm()
    {
        $comp = new \Blacklist\Component\Product\ProductComponentFactory($this->database, $this);
        return $comp->getNewProductForm();
    }
    
    /**
     * 
     * @return type
     */
    protected function createComponentEditForm()
    {
        $comp = new \Blacklist\Component\Product\ProductComponentFactory($this->database, $this);
        return $comp->getEditProductForm($this->getParameter('id'));
    }
    
    /**
     * 
     * @param type $id
     */
    public function handleDelete($id)
    {
        $product = $this->factory->getById($id);
        $product->setDatabase($this->database);
        $product->remove();
        $this->flashMessage(STR_519 . ' "' . $product->name . '" ' . STR_435, 'success');
        $this->saveLog(STR_518 . ' ' . $product->name, $this->database);
        $this->redirect('Product:default');
    }
    
    /**
     * 
     * @param type $imageId
     * @param type $productId
     */
    public function handleRemoveImage($imageId, $productId)
    {
        $factory = new \Blacklist\Factory\ProductFactory($this->database);
        $productO = $factory->getById($productId);
        $productO->setDatabase($this->database);
        $productO->removeImage($imageId);
        $this->saveLog(STR_517. ' ' . $productO->name, $this->database);
        if($this->isAjax()){
            $this->redrawControl('images');
        }
    }
    
    /**
     * 
     * @return \Nette\Application\UI\Form
     */
    protected function createComponentAddImage()
    {
        $form = new Nette\Application\UI\Form;
       
        $form->addUpload('picture', 'Obrázek', true)
            ->addCondition(\Nette\Application\UI\Form::FILLED); // 500 kB
      
        $form->addSubmit('send', 'Odeslat');
        $form->addHidden('product', $this->getParameter('id'));
        $form->onSuccess[] = $this->addImageFormSubmitted;
        return $form;
    }
    
    /**
     * 
     * @param Nette\Application\UI\Form $form
     */
    public function addImageFormSubmitted(Nette\Application\UI\Form $form)
    {
        $data = $form->getValues();
        $fctory = new \Blacklist\Factory\ProductFactory($this->database);
        $product = $fctory->getById($data->product);
        $product->setDatabase($this->database);
        
        foreach($data->picture as $pic)
        {
            if($pic->getname() != NULL)
            {
                $imageFactory = new \Blacklist\Object\ImageFactory($pic);
                $imageFactory->upload('produkty/');
                $imgO = new \Blacklist\Object\ProductImageObject();
                $imgO->image = $imageFactory->path . $imageFactory->name;
                $imgO->product = $product->id;
                $imgO->setDatabase($this->database);
                $imgO->create();
            }
        }
        $this->saveLog(STR_516 . ' '. $product->name, $this->database);
        $product->update();
    }
    
    /**
     * 
     * @param type $myId
     */
    public function handleRemoveType($myId)
    {
        $factory = new \Blacklist\Factory\ProductTypeFactory($this->database);
        $type = $factory->getById($myId);
        $type->remove();
        $this->saveLog(STR_515 . ' ' . $type->name, $this->database);
        if($this->isAjax()){
            $this->redrawControl('types');
        }
    }
    
    /**
     * 
     * @return \Nette\Application\UI\Form
     */
    protected function createComponentAddType()
    {
        $form = new Nette\Application\UI\Form;
        $form->addText('name', 'Název');
        $form->addText('pricedph', 'Cena:');
        $form->addText('code', 'Kód');
        $form->addCheckbox('visibility', 1);
        $form->addSubmit('send', 'Odeslat');
        $form->addHidden('product', $this->getParameter('id'));
        $form->onSuccess[] = $this->addTypeSubmitted;
        return $form;
    }
    
    /**
     * 
     * @return \Nette\Application\UI\Form
     */
    protected function createComponentAddTab()
    {
        $form = new Nette\Application\UI\Form;
        $form->addText('name', 'Název');
        $form->addHidden('product', $this->getParameter('id'));
        $form->addSubmit('send');
        $form->onSuccess[] = $this->addTabSubmitted;
        return $form;
    }
    
    /**
     * 
     * @param type $id
     */
    public function handleRemoveTab($myid)
    {
        $f = new \Blacklist\Factory\ProductTabFactory($this->database);
        $o = $f->getById($myid);
        $o->remove();
        
        $this->redirect('Product:edit', $o->product);
    }
    
    /**
     * 
     * @param Nette\Application\UI\Form $form
     */
    public function addTabSubmitted(Nette\Application\UI\Form $form)
    {
        $o = new \Blacklist\Object\ProductTabObject('\Blacklist\Object\ProductTabObject');
        $o->name = $form->getValues()->name;
        $o->product = $form->getValues()->product;
        $o->setDatabase($this->database);
        $o->create();
        
        $this->redirect('Product:edit', $o->product);
    }
    
    /**
     * 
     * @param Nette\Application\UI\Form $form
     */
    public function addTypeSubmitted(Nette\Application\UI\Form $form)
    {
        $data = $form->getValues();
        $type = new \Blacklist\Object\ProductTypeObject(NULL, NULL, NULL);
        $type->make($data);
        $type->setDatabase($this->database);
        $type->create();
        $this->saveLog(STR_514 . ' ' . $type->name, $this->database);
        if($this->isAjax()){
            $this->redrawControl('types');
        }
    }
    
    /**
     * 
     * @return \Nette\Application\UI\Form
     */
    protected function createComponentAddAdditional()
    {
        $form = new Nette\Application\UI\Form;
        $settings = new \Blacklist\Model\Settings\SettingsAction($this->database);
        $factory = new \Blacklist\Factory\ProductFactory($this->database);
        $data = array('0', '---');
        foreach($factory->getAll(NULL, array('category' => $settings->getEshopSettings()->default_additionals)) as $fctry){
            $data[$fctry->id] = $fctry->name;
        }
        $form->addSelect('extra', 'Doplněk', $data);
        $form->addHidden('product', $factory->getById($this->getParameter('id'))->id);
        $form->addSubmit('send', 'Odeslat');
        $form->onSuccess[] = $this->addAddtionalSubmitted;
        return $form;
    }
    
    /**
     * 
     * @param Nette\Application\UI\Form $form
     */
    public function addAddtionalSubmitted(Nette\Application\UI\Form $form)
    {
        $data = $form->getValues();
        $p = new \Blacklist\Object\ProductAdditionalObject($data->product, $data->extra);
        $p->setDatabase($this->database);
        $p->create();
        $this->saveLog(STR_512 . ' (' . $p->getExtraObject()->name .') '.STR_513. ' ' . $p->getProductObject()->name, $this->database);
        if($this->isAjax()){
            $this->redrawControl('additionals');
        }
    }
    
    /**
     * 
     * @param type $myId
     */
    public function handleRemoveAdditional($myId)
    {
        $factory = new \Blacklist\Factory\ProductAdditionalFactory($this->database);
        $add = $factory->getById($myId);
        $add->remove();
        $this->saveLog(STR_510 . ' (' . $add->getExtraObject()->name . ') '.STR_511 . ' ' . $add->getProductObject()->name, $this->database);
        if($this->isAjax()){
            $this->redrawControl('additionals');
        }
    }
}