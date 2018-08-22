<?php 
class Vegetable extends Product{
    private $_productorName;
    private $_expiresAt;

    public function __construct($name, $price, $productorName, $expiresAt){
        parent::__construct($name, $price);
        $this->setProductorName($productorName);
        $this->setExpiresAt($expiresAt);
    }

    public function getProductorName(){
        return $this->_productorName;
    }

    public function getExpiresAt(){
        return $this->_expiresAt;
    }

    public function setProductorName($productorName){
        $productorName = (string)$productorName;
        $this->_productorName = $productorName;
    }

    public function setExpiresAt($expiresAt){
        $this->_expiresAt = date( "d-m-Y", strtotime($expiresAt));
    }

    // Checks if today's date is passed the expiration date
    public function isFresh(){
        return time() < strtotime($this->getExpiresAt());
    }
}
?>