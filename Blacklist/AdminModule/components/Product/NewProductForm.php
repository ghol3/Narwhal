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
class NewProductForm extends Form
{
    /**
     *
     * @var type 
     */
    private $categories;
    
    /**
     * 
     * @param type $categories
     */
    public function __construct($categories)
    {
        parent::__construct();
        $this->categories = $categories;
        $this->init();
    }
    
    /**
     * 
     */
    private function init()
    {
        $this->addText('name', 'Název:')
            ->setRequired(STR_623)
            ->addRule(Form::MIN_LENGTH, STR_624, 5)
            ->addRule(Form::MAX_LENGTH, STR_625, 50);
        
        $this->addText('link', 'Adresa:')
            ->setRequired(STR_613)
            ->addRule(Form::MIN_LENGTH, STR_604, 5)
            ->addRule(Form::MAX_LENGTH, STR_605, 100);
        
        $this->addText('pricedph', 'Cena s dph')
                ->setRequired(STR_626)
                ->setType('number');
        
        $this->addTextArea('description', 'Krátký popisek:');
        $this->addTextArea('content', 'Stránka:');
        
        $this->addText('score', 'Hodnocení:')
                ->setType('number');
        
        $this->addText('warranty', 'Záruka:');
        $this->addCheckbox('visibility', 'Zobrazovat');
        $this->addSelect('category', 'Kategorie', $this->getCategoriesAsArray());
        $this->addText('code', 'Kód:');
        $this->addText('stock', 'Na skladě:');
        $this->addUpload('image', 'Obrázek')
            ->addCondition(Form::FILLED)
            ->addRule(Form::IMAGE, STR_607); 
        $this->addSubmit('send', 'Přidat produkt');
        $this->addTextArea('detail', '');
        $this->addTextArea('params', '');
        $this->addText('tbasic', '');
        $this->addText('tparams', '');
        $this->addText('tdetails', '');
        $this->addText('company', 'Značka:');
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