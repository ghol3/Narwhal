<?php

namespace
    Blacklist\Object;

class Cart
{
    /** @var type \Blacklist\Object\CartProductObject */
    private $products = array();
    
    /** @var type integer */
    private $delivery = 0;
    
    /**
     * @param \Blacklist\Object\ProductObject $product
     * @param type $code string
     * @param type $price double
     * @param type $pricedph double
     * @param type $count int
     */
    public function addFromProduct(ProductObject $product, $code = NULL, 
            $price = NULL, $pricedph = NULL, $count = NULL)
    {
        $prod = new CartProductObject();
        $prod->make($product, $count, $code, $price, $pricedph);
        if(!isset($this->products[$product->id])){
            $this->products[$product->id] = $prod;
        }else{
            $this->products[$product->id]->count = ($this->products[$product->id]->count + $count);
        }
    }
    
    public function add(ProductObject $p, $code, $count, $name, $price, $pricedph)
    {
        $prod = new CartProductObject();
        $prod->code  = $code;
        $prod->count = $count;
        $prod->image = $p->image;
        $prod->link  = $p->link;
        $prod->name  = $name;
        $prod->price = $price;
        $prod->pricedph = $pricedph;
        $prod->product  = $p->id;
        $prod->score    = $p->score;
        
        if(!isset($this->products[$name])){
            $this->products[$name] = $prod;
        }else{
            $this->products[$name]->count = ($this->products[$name]->count + $count);
        }
    }
    
    /**
     * @param type $productID integer
     * @param type $finally boolean
     */
    public function remove($productID, $finally = FALSE)
    {
        if(isset($this->products[$productID]))
        {
            if($finally || $this->products[$productID]->count <= 1){
                unset($this->products[$productID]);
            }else{
                --$this->products[$productID]->count;
            }
        }
    }
    
    /**
     * 
     * @param type $DPH
     * @return type
     */
    public function getTotalPrice($DPH = FALSE)
    {
        return ($DPH) ? $this->getTotalPriceDPH() : $this->getTotalPriceWDPH();
    }
    
    /**
     * 
     * @return type double
     */
    private function getTotalPriceDPH()
    {
        $price = 0;
        foreach($this->products as $product){
            $price += $product->pricedph * $product->count;
        }
        return $price;
    }
    
    /**
     * 
     * @return type int
     */
    public function getDeliveryPrice()
    {
        return $this->delivery;
    }
    /**
     * 
     * @return type
     */
    private function getTotalPriceWDPH()
    {
        $price = 0;
        foreach($this->products as $product){
            $price += $product->price * $product->count;
        }
        return $price;
    }
    
    /**
     * 
     */
    public function removeAll()
    {
        unset($this->products);
        $this->products = array();
    }
    
    /**
     * 
     * @return type
     */
    public function getProducts()
    {
        return $this->products;
    }
    
    /**
     * 
     * @param type $productID
     * @param type $count
     */
    public function change($productID, $count)
    {
        if(isset($this->products[$productID]))
        {
            $this->products[$productID]->count = $count;
            if($count == 0){
                $this->remove($productID, true);
            }
        }
    }
}
