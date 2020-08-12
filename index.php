<?php
require 'includes.php';
$defaultController= new DefaultController();
$ravioleController= new RavioleController();
if(empty($_GET)){

    $defaultController->homePage();

}elseif (($_GET['controller']==='raviole'  AND  $_GET['action']=== 'add')){
    //echo'i\'m here !!!!';
    $ravioleController->addRavioleForm();

}





