<?php 
class Cloth extends Product{
    private $_brand;

    public function __construct($name, $price, $brand){
        parent::__construct($name, $price);
        $this->setBrand($brand);
    }

    public function getBrand(){
        return $this->_brand;
    }

    public function setBrand($brand){
        $this->_brand = $brand;
    }

    public function try(){

    }
}
?>