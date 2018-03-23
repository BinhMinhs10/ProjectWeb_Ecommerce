<?php

class Admin {

    private $userName;
    private $name;
    private $password;
    private $adminId;
    
    function __construct($adminId,$userName,$password,$name) {
        $this->userName = $userName;
        $this->name = $name;
        $this->password = $password;
        $this->adminId = $adminId;
    }

    function getUserName() {
        return $this->userName;
    }

    function getName() {
        return $this->name;
    }

    function getPassword() {
        return $this->password;
    }

    function getAdminId() {
        return $this->adminId;
    }

    function setUserName($userName) {
        $this->userName = $userName;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setAdminId($adminId) {
        $this->adminId = $adminId;
    }

}

?>