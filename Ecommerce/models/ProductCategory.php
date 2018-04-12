<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class ProductCategory {

    private $category_id;
    private $category_name;
    private $parent_id;
    private $category_order;

    function __construct($category_id, $category_name, $parent_id, $category_order) {
        $this->category_id = $category_id;
        $this->category_name = $category_name;
        $this->parent_id = $parent_id;
        $this->category_order = $category_order;
    }
    function getCategory_id() {
        return $this->category_id;
    }

    function getCategory_name() {
        return $this->category_name;
    }

    function getParent_id() {
        return $this->parent_id;
    }

    function getCategory_order() {
        return $this->category_order;
    }

    function setCategory_id($category_id) {
        $this->category_id = $category_id;
    }

    function setCategory_name($category_name) {
        $this->category_name = $category_name;
    }

    function setParent_id($parent_id) {
        $this->parent_id = $parent_id;
    }

    function setCategory_order($category_order) {
        $this->category_order = $category_order;
    }

    
}
?>
    

