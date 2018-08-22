<?php 
class Product{
    private $_id;
    private $_name;
    private $_price;
    private static $_count;

    public function __construct($name, $price){
        self::$_count++;
        $this->setId(self::$_count);
        $this->setName($name);
        $this->setPrice($price);
    }

    public function getId(){
        return $this->_id;
    }

    public function getName(){
        return $this->_name;
    }

    public function getPrice(){
        return $this->_price;
    }

    public function setId($id){
        $this->_id = $id;
    }

    public function setName($name){
        $this->_name = $name;
    }

    public function setPrice($price){
        $price = (int)$price;
        $this->_price = $price;
    }
}
?>