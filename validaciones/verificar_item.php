<?php 
session_start();
 
require '../bd/conexion_bd.php';

$obj = new BD_PDO();

$item = $_GET['p'];
$datos = $obj->Ejecutar_Instruccion("Select * from items where item='$item'");

echo json_encode($datos);

?>