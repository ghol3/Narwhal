<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 *
 * @date 28.06.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\Component\Product
 */

namespace 
    Blacklist\Component\Product;
    
use
    Nette\Database\Context,
    Nette\Object as NObject;

/**
 * This class is component factory for
 * category components.
 * 
 * @author Томас Петр <www.beepvix.com>
 */
class ProductComponentFactory extends NObject
{
    /**
     * Instance of any presenter for redirecting and
     * flash message.
     * 
     * @var type 
     */
    private $presenter = NULL;
    
    private $database;
    
    /**
     * Constructor of this class, set database connection 
     * like private and load the presenter + default init.
     * 
     * @param \Nette\Database\Context $db
     * @param type $presenter
     */
    public function __construct(Context $db, $presenter)
    {
        $this->presenter = $presenter;
        $this->database = $db;
    }
    
    /**
     * 
     * @return \Blacklist\Component\Product\NewProductForm
     */
    public function getNewProductForm()
    {
        $ctgs = new \Blacklist\Factory\CategoryFactory($this->database);
        $form = new NewProductForm($ctgs->getAll());
        $form->onSuccess[] = $this->newProductFormSubmitted;
        return $form;
    }
    
    /**
     * 
     * @param type $id
     * @return \Blacklist\Component\Product\EditProductForm
     */
    public function getEditProductForm($id)
    {
        $ctgs = new \Blacklist\Factory\CategoryFactory($this->database);
        $factory = new \Blacklist\Factory\ProductFactory($this->database);
        $form = new EditProductForm($ctgs->getAll(), $factory->getById($id));
        $form->onSuccess[] = $this->editProductFormSubmitted;
        return $form;
    }
    
    /**
     * 
     * @param \Blacklist\Component\Product\NewProductForm $form
     */
    public function newProductFormSubmitted(NewProductForm $form)
    {
        $data = $form->getValues();
        $object = new \Blacklist\Object\ProductObject(NULL, NULL, NULL);
        $object->make($data);
        $object->setDatabase($this->database);
        
        $imageFactory = new \Blacklist\Object\ImageFactory($object->image);
        $imageFactory->upload('images/produkty/');
        
        $object->image = ($imageFactory->path . $imageFactory->name);
        
        $object->create();
        $this->saveLog(STR_538 . ' '. $object->name);
        $this->presenter->flashMessage(STR_519 . ' <a target="_blank" href="/produkt/' . $object->link . '">"' . $object->name . '"</a> ' . STR_451, 'success');
        $this->presenter->redirect('Product:default');
    }
    
    /**
     * 
     * @param \Blacklist\Component\Product\EditProductForm $form
     */
    public function editProductFormSubmitted(EditProductForm $form)
    {
        $data = $form->getValues();
        $object = new \Blacklist\Object\ProductObject(NULL, NULL, NULL);
        $object->make($data);
        $object->setDatabase($this->database);
        
        if($object->image->getName() != NULL)
        {
            $imageFactory = new \Blacklist\Object\ImageFactory($object->image);
            $imageFactory->upload('images/produkty/');
            $object->image = ($imageFactory->path . $imageFactory->name);
        }

        $object->update();
        
        $this->saveLog(STR_539 . ' ' . $object->name);
        $this->presenter->flashMessage(STR_519 . ' <a target="_blank" href="/produkt/' . $object->link . '">"' . $object->name . '"</a> ' . STR_523, 'success');
        $this->presenter->redirect('this');
    }
    
    
    
    /**
     * This method cleans up the class.
     */
    public function __destruct()
    {
    }
    
    private function saveLog($action)
    {
        $object = new \Blacklist\Object\LogObject();
        $object->setDatabase($this->database);
        $object->user = $this->presenter->getUser()->id;
        $usef = new \Blacklist\Factory\UserFactory($this->database);
        $info = $usef->getById($object->user)->getUserInfo();
        $object->action = STR_92 . ' ' . $info->username . ' ' . $info->surname . ' ' . $action;
        $object->create();
    }
}