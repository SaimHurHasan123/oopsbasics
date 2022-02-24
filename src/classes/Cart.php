<?php
namespace App;
/**
 * cart class
 * This class implements cart functionality
 */
class Cart
{
    private  $cart;

    public function __construct()
    {
        $this->cart= array();
    }
/**
 * addToCart
 *This function accepts product type and add that to cart
 * @param Product $product
 * @return void
 */
    public function addToCart(Product $product)
    {
        if(! $this->isProductExistsInCart($product)){

            $product->quantity=1;
             array_push($this->cart,$product);

        }

        
    }/**
     * isProductExistsInCart
     *
     * @param Product $product
     * @return boolean
     */
    private function isProductExistsInCart(Product $product)
    {
    foreach($this->cart as $key=>$p)
    {
          if($p->id == $product->id){
             $this->cart[$key]->quantity+=1;
             return true;
          }
    }
        return false;
    }

    /**
     * getCart
     *
     * @return void
     */
    public function getCart()
    {
     return $this->cart;
    }
}