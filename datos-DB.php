<?php// apertura de php

$host = "localhost";
$usuario = "root";
$clave = "reciclar1234";
$user = "mydb";
$basededatos = "reciclar";

$conn = new mysqli($host,$usuario,$clave,$basededatos); 
mysqli_query($conn , "SET character_set_result=utf8");

if ($conn ->connect_error){ 
         die( "Database Error : " . $conn ->connect_error); 

}

?>