<?php
require 'conexion.php';
session_start();
$dni = $_SESSION['dni'];
if(!isset($dni)){
    header("location: index");
} else {

}
 ?>
