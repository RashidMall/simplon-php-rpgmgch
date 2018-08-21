<?php 
class User{
    private $_id;
    private $_email;
    private $_createdAt;
    private static $_count;

    public function __construct($email){
        self::$_count++;
        $this->setId(self::$_count);
        $this->setEmail($email);
        $this->setCreatedAt();
    }

    public function setId($id){
        $id = (string)$id;
        $this->_id = $id;
    }

    public function setEmail($email){
        $email = (string)$email;
        $this->_email = $email;
    }

    public function setCreatedAt(){
        $this->_createdAt = date( "d-m-Y");
    }

    public function getId(){
        return $this->_id;
    }

    public function getEmail(){
        return $this->_email;
    }

    public function getCeatedAt(){
        return $this->_createdAt;
    }
}
?>