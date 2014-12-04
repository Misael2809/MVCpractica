<?php

require 'templates/header.php';
require 'conexion/BD.php';
require 'clases/Usuario.php';
require 'helpers.php';

if(empty($_GET['url'])){

    $_GET['url']='home';
    controller($_GET['url']);

}else{

    controller($_GET['url']);

}
require 'templates/footer.php';
?>