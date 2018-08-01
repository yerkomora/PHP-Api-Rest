<?php

include '../../models/items.php';

$items = new Items();
$items->setExamples(10);
echo $items->getJson();