<?php 

session_start();

$conexion = mysqli_connect("localhost", "root",   "", "full_php");

if(!$conexion){
    die("fail connect");
}else{
   /*  echo "conectado"; */
}
?>