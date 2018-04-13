<?php

class User {

    private $userId;
    private $user_name;
    private $password;
    private $email;
    private $phone_number;
    private $address;

    function __construct($userId, $user_name, $password, $email, $phone_number, $address) {
        $this->userId = $userId;
        $this->user_name = $user_name;
        $this->password = $password;
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->address = $address;
    }
    function getUserId() {
        return $this->userId;
    }

    function getUser_name() {
        return $this->user_name;
    }

    function getPassword() {
        return $this->password;
    }

    function getEmail() {
        return $this->email;
    }

    function getPhone_number() {
        return $this->phone_number;
    }

    function getAddress() {
        return $this->address;
    }

    function setUserId($userId) {
        $this->userId = $userId;
    }

    function setUser_name($user_name) {
        $this->user_name = $user_name;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPhone_number($phone_number) {
        $this->phone_number = $phone_number;
    }

    function setAddress($address) {
        $this->address = $address;
    }



}
?>

