<?php

include '../../models/item.php';

if(isset($_REQUEST['id']))
    $id = filter_var($_REQUEST['id'],FILTER_VALIDATE_INT);
else
    $id=0;

$item = new Item();
$item->setExample($id);
echo $item->getJson();