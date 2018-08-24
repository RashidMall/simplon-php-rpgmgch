<?php
class Client extends User{
    private $_billAmount;
    private $_cart;

    public function __construct($email){
        parent::__construct($email);
        $this->setCart();
    }

    public function setBillAmount($amount){
        $amount = (double)$amount;
        $this->_billAmount = $amount;
    }

    public function setCart(){
        $this->_cart = array();
    }

    public function getBillAmount(){
        return $this->_billAmount;
    }

    public function getCart(){
        return $this->_cart;
    }

    public function buy(Product $product){
        $this->addProductToCart($product);
        $this->_billAmount += $product->getPrice();
    }

    public function addProductToCart(Product $product){
        array_push($this->_cart, $product);
    }
}
?>