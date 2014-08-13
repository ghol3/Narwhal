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
    Nette\Application\UI\Form;
    
/**
 * This class is just Blacklist component 
 * with form for editing any product.
 * 
 * @author Томас Петр <www.beepvix.com>
 */
class EditProductForm extends Form
{
    /**
     *
     * @var type 
     */
    private $categories;
    
    /**
     * 
     * @param type $categories
     * @param \Blacklist\Object\ProductObject $product
     */
    public function __construct($categories, \Blacklist\Object\ProductObject $product)
    {
        parent::__construct();
        $this->categories = $categories;
        $this->init($product);
    }
    
    /**
     * 
     * @param \Blacklist\Object\ProductObject $product
     */
    private function init(\Blacklist\Object\ProductObject $product)
    {
        $this->addText('name', 'Název:')
            ->setRequired(STR_623)
            ->addRule(Form::MIN_LENGTH, STR_624, 5)
            ->addRule(Form::MAX_LENGTH, STR_625, 50)
            ->setDefaultValue($product->name);
        
        $this->addHidden('id')
                ->setDefaultValue($product->id);
        
        $this->addText('link', 'Adresa:')
            ->setRequired(STR_613)
            ->addRule(Form::MIN_LENGTH, STR_604, 5)
            ->addRule(Form::MAX_LENGTH, STR_605, 100)
            ->setDefaultValue($product->link);
        
        $this->addText('pricedph', 'Cena s dph')
                ->setRequired(STR_626)
                ->setDefaultValue($product->pricedph)
                ->setType('number');
        
        $this->addTextArea('description', 'Krátký popisek:')
                ->setDefaultValue($product->description);
        
        $this->addTextArea('content', 'Stránka:')
                ->setDefaultValue($product->content);
        
        $this->addText('score', 'Hodnocení:')
                ->setDefaultValue($product->score)
                ->setType('number');
        
        $this->addText('warranty', 'Záruka:')
                ->setDefaultValue($product->warranty);
        
        $this->addSelect('category', 'Kategorie', $this->getCategoriesAsArray())
                ->setDefaultValue($product->category);
        
        $this->addText('code', 'Kód:')
                ->setDefaultValue($product->code);
        
        $this->addCheckbox('visibility', $product->visibility)
                ->setDefaultValue($product->visibility);
        
        $this->addText('stock', 'Na skladě:')
                ->setDefaultValue($product->stock);
        
        $this->addUpload('image', 'Obrázek')
            ->setDefaultValue($product->image)
            ->addCondition(Form::FILLED)
            ->addRule(Form::IMAGE, STR_607); 
        
        $this->addSubmit('send', 'Přidat produkt');
        $this->addTextArea('detail', '')->setDefaultValue($product->detail);
        $this->addTextArea('params', '')->setDefaultValue($product->params);
        $this->addText('tbasic', '')->setDefaultValue($product->tbasic);
        $this->addText('tparams', '')->setDefaultValue($product->tparams);
        $this->addText('tdetails', '')->setDefaultValue($product->tdetails);
        $this->addText('company', 'Značka:')
                ->setDefaultValue($product->company);
    }
    
    /**
     * 
     * @return type
     */
    private function getCategoriesAsArray()
    {
        $ctgs = array();
        foreach($this->categories as $category){
            $ctgs[$category->id] = $category->name;
        }
        return $ctgs;
    }
}