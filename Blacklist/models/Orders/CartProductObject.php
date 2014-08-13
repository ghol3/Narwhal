<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace
    Blacklist\Object;

class CartProductObject
{
    public
        /** @var type integer */
        $product      = NULL,
        /** @var type string */
        $name         = NULL,
        /** @var type string */
        $link         = NULL,
        /** @var type string */
        $code         = NULL,
        /** @var type double */
        $price        = NULL,
        /** @var type double */
        $pricedph     = NULL,
        /** @var type integer */ 
        $count        = NULL,
        /** @var type integer */
        $score        = NULL,
        /** @var type string */
        $image        = NULL;
    
    private $database;
    
    /**
     * 
     * @param \Blacklist\Object\ProductObject $product
     */
    public function make(ProductObject $product, $count = NULL, $code = NULL,
            $price = NULL, $pricedph = NULL)
    {
        $this->score = (int) $product->score;
        $this->product = (int) $product->id;
        $this->name = (string) $product->name;
        $this->link = (string) $product->link;
        $this->image = $product->image;
        $this->code = ($code == NULL) ? (string) $product->code : (string) $code;
        $this->price = ($price == NULL) ? (double) $product->getPrice() : (double) $price;
        $this->pricedph = ($pricedph == NULL) ? (double) $product->pricedph : (double) $pricedph;
        $this->count = ($count == NULL) ? 1 : $count;
    }
}