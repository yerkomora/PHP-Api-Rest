<?php

include_once '../models/item.php';

class Items {
    private $items;
    
    function __construct(){
        $this->items = array();
    }
    
    function addItem($item){
        $this->items[]=$item;
    }
    
    // Examples
    
    function setExamples($count){
        for($id=1;$id<=$count;$id++){
            $item = new Item();
            $item->setExample($id);
            $this->addItem($item);
        }
    }
    
    // Json
    
    function getJson(){
        return json_encode($this->items);
    }
}