<?php
require_once 'tigger.php';

$tigger = Tigger::getInstance();

for($i = 0; $i < 10; $i++){
    $tigger->roar();
}

$tigger->getCounter();



