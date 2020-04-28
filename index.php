<?php 
include 'vendor/autoload.php';
use App\Prado;
use App\Bmw;

$t = new Prado();
$t->getData();
echo Bmw::$model;

?>