<?php

class Item {
    
    // Construct
    
    function __construct(){
    }
    
    function setItem($id,$name){
        $this->setId($id);
        $this->setName($name);
    }
    
    // id
    
    public $id;

    function setId($id){
        $this->id = $id;
    }
    
    function getId(){
        return $id;
    }
    
    // Name
    
    public $name;
    
    function setName($name){
        $this->name = $name;
    }
    
    function getName(){
        return $name;
    }
    
    // Example
    
    function setExample($id){
        $this->setItem($id,'name'.$id);
    }
    
    // JSON
    
    function getJson(){
        return json_encode($this);
    }
}