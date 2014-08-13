<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 *
 * @date 09.07.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\AdminModule\Presenters
 */

namespace 
    Blacklist\AdminModule\Presenters;

use Blacklist\Factory\ProductFactory;
use
    Nette,
    Nette\Database\Context;

/**
 * @author Томас Петр
 */
class WarehousePresenter extends BasePresenter
{
    
    private $database = NULL;
    private $werehouse = 'sklad';
    private $selected = 1;
    private $timearray = array(
        '0'     => 'nehlídat',
        '14'    => '14 dnů',
        '31'     => '1 měsíc',
        '62'     => '2 měsíce',
        '93'     => '3 měsíce',
        '124'     => '4 měsíce',
        '155'     => '5 měsíců',
        '186'     => '6 měsíců'
    );
    
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
     * 
     */
    public function renderDefault()
    {
        $warehouseF = new \Blacklist\Factory\WarehouseFactory($this->database);
        if($this->werehouse != 'all')
        {
            $warehouses = $warehouseF->getTree($this->werehouse);
            //$warehouses = $warehouseF->getByType($this->werehouse);
            $this->template->warehouses = $warehouses;
        }
        else if($this->werehouse == 'all')
        {
            $warehouses = $warehouseF->getAllAndFuse();
            $this->template->warehouses = $warehouses;
        }

        //$this->template->categories = $this->getCategories($warehouses);
        $this->template->types = $this->database->table('prefix_warehouse');
        $this->template->selected = $this->selected;
        $this->template->type = $this->werehouse;
        $this->template->timearray = $this->timearray;
    }
    
    /**
     * 
     */
    public function renderLog($pid = NULL)
    {
        if($pid !== NULL)
        {
            $this->handleFilterLogByProduct($pid);
        }
        $logF = new \Blacklist\Factory\WarehouseLogFactory($this->database);
        if(!isset($this->template->logs)){
            $this->template->logs = $logF->getAllByWarehouse($this->werehouse);
        }
        $this->template->selected = $this->selected;
        $factory = new \Blacklist\Factory\WarehouseFactory($this->database);
        $userf = new \Blacklist\Factory\UserFactory($this->database);
        $this->template->codes = $factory->getAll();
        $this->template->users = $userf->getAll();
        $this->template->type = $this->werehouse;
        $lastDate = $this->database->table(\Blacklist\Model\String\TableString::WAREHOUSE_LOG)
                ->limit(1)->order('date DESC')->fetch();
        $lastYear = date("Y");
        if(isset($lastDate->date)){
            $datetime = new \Nette\DateTime($lastDate->date, NULL);
            $lastYear = $datetime->format('Y');
        }
        $this->template->lastYear = (date('Y') - $lastYear);
    }
    
    /**
     * 
     * @param type $code
     */
    public function handleFilterLogByCode($code)
    {
        $logF = new \Blacklist\Factory\WarehouseLogFactory($this->database);
        $this->template->logs = $logF->getAllByWarehouse(NULL, 
                array(
                    "warehouse" => $this->werehouse,
                    'code'  => $code
                )
        );
        if($this->isAjax()){
            $this->redrawControl();
        }
    }
    
    /**
     * 
     * @param type $user
     */
    public function handleFilterLogByUser($user)
    {
        $logF = new \Blacklist\Factory\WarehouseLogFactory($this->database);
        $this->template->logs = $logF->getAllByWarehouse(NULL, array('warehouse' => $this->werehouse, 'user' => $user));
    }
    
    /**
     * 
     * @param type $note
     */
    public function handleFilterLogByNote($note)
    {
        $logF = new \Blacklist\Factory\WarehouseLogFactory($this->database);
        $this->template->logs = $logF->getAllByWarehouse(NULL, array('warehouse' => $this->werehouse, 'lcase(note) LIKE ?' => strtolower($note)));
    }
    
    /**
     * 
     * @param type $code
     */
    public function handleFilterLogByProduct($pid)
    {
        $logF = new \Blacklist\Factory\WarehouseLogFactory($this->database);
        $this->template->logs = $logF->getAllByWarehouse(NULL, array('product' => $pid));
    }

    /**
     *
     * @param type $products
     * @return type
     */
    private function getCategories($products)
    {
        $categories = array();
        foreach($products as $product)
        {
            if(!in_array($product->getProductObject()->category, $categories)){
                $categories[$product->getProductObject()->category] = array(
                    $product->getProductObject()->getCategoryObject()->name,
                    $product->getProductObject()->getCategoryObject()->link
                );
            }
        }
        return $categories;
    }
    
    /**
     * 
     * @param type $state
     * @param type $index
     */
    public function handleChangeState($state, $index)
    {
        $this->werehouse = $state;
        $this->selected = $index;
        
        if($this->isAjax()){
            $this->redrawControl('products');
        }
    }
    
    /**
     * 
     * @param type $index
     */
    public function handleChangeMaxState($index)
    {
        $this->selected = $index;
        
        if($this->isAjax()){
            $this->redrawControl('products');
        }
    }
    
    /**
     * 
     * @param type $recordId
     */
    public function handleRemoveRecord($recordId, $stat, $ch)
    {
        $this->werehouse = $stat;
        $this->selected = $ch;
        $factory = new \Blacklist\Factory\WarehouseLogFactory($this->database);
        $record = $factory->getById($recordId);
        $record->setDatabase($this->database);
        $record->remove();
        
        if($this->isAjax()){
            $this->redrawControl('products');
        }
    }
    
    /**
     * 
     */
    public function handleChange($warehouse, $sel)
    {
        $this->selected = $sel;
        $warehouseF = new \Blacklist\Factory\WarehouseFactory($this->database);
        $userf = new \Blacklist\Factory\UserFactory($this->database);
        $productF = new \Blacklist\Factory\ProductFactory($this->database);
        $myUser = $userf->getById($this->getUser()->id);
        $data = $_POST;
        
        $warehouses = $data['warehouse'];
        $products = $data['product'];
        $this->werehouse = $warehouse;
        // projizdim inputy s poctama kusu
        foreach($data['ks'] as $key => $value)
        {
            if($value != '') // pokud je vyplneno jedu dal
            {
                // jestli objekt uz existuje na skladu (nebudu pridavat ale upravovat)
                if($warehouseF->exist($key, $data['move'])) 
                {
                    // najdu si objekt a pridam mu hodnoty
                    $object = $warehouseF->get($key, $data['move']);
                    $object->note = $data['note'];
                    $object->stack = ($object->stack + $value);

                    $object->update();
                    // uloztim do logu
                    $this->savemyLog(
                        $productF->getById($products[$key])->code, 
                        $data['note'], 
                        $value, 
                        $this->getUser()->id,
                        $products[$key]
                    );
                    // pokud se jedna o jinej sklad nez tam kde jsem tak 
                    // musim odecist ty stary hodnoty
                    // najdu a upravim
                    if($data['type'] !== $data['move'])
                    {
                        $myo = $warehouseF->getById($warehouses[$key]);
                        $myo->stack = ($myo->stack - $value);
                        $myo->update();
                        // uloztim do logu
                        $this->savemyLog(
                                $productF->getById($products[$key])->code, 
                                $data['note'], 
                                ($value * (-1)), 
                                $this->getUser()->id,
                                $products[$key]
                        );
                    }
                }
                else
                {
                    // produkt jeste neexistuje -> je presunutej do nejakyho
                    // jinyho skladu nez "sklad" tzn musim objekt pridavat
                    // nelze editovat protoze jeste neexistuje
                    // najdu a upravim
                    $object = new \Blacklist\Object\WarehouseObject;
                    $object->note = $data['note'];
                    $object->product = $products[$key];
                    $object->stack = $value;
                    $object->type = $data['move'];
                    $object->user = $myUser->getUserInfo()->username;
                    $object->setDatabase($this->database);
                    $object->create(); 
                    $this->savemyLog(
                                $productF->getById($products[$key])->code, 
                                $data['note'], 
                                $value, 
                                $this->getUser()->id,
                                $products[$key]
                        );
                    // je jasny ze se presouva do jineho takze musim odecist
                    // starou hodnotu -> najdu a upravim
                    $myo = $warehouseF->getById($warehouses[$key]);
                    $myo->stack = ($myo->stack - $value);
                    $myo->update();
                    
                    $this->savemyLog(
                                $productF->getById($products[$key])->code, 
                                $data['note'], 
                                ($value * (-1)), 
                                $this->getUser()->id,
                                $products[$key]
                        );
                }
            }
        }
        
        $this->flashMessage(STR_504, 'success');
        if($this->isAjax()){
            $this->redrawControl();
        }
        
    }
    
    /**
     * 
     * @param type $code
     * @param type $note
     * @param type $stack
     * @param type $user
     */
    private function savemyLog($code, $note, $stack, $user, $pkey)
    {
        $object = new \Blacklist\Object\WarehouseLog;
        $object->code = (string) $code;
        $object->note = (string) $note;
        $object->stack = (int) $stack;
        $object->user = (int) $user;
        $object->warehouse = $this->werehouse;
        $object->product = $pkey;
        $object->setDatabase($this->database);
        $object->create();
    }
    
    /**
     * 
     * @param type $warehouse
     * @param type $select
     */
    public function handleChangeTime($warehouse, $selected, $type, $select)
    {
        $this->selected = $selected;
        $this->werehouse = $type;
        $whf = new \Blacklist\Factory\WarehouseFactory($this->database);
        $mywh = $whf->getById($warehouse);
        $mywh->time = $select;
        $mywh->update();
        
    }
}