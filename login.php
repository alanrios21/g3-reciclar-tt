<?php

require_once("datosDb.php");
session_start();

if (isset($_POST["login"])) {
    if (!empty($_POST['nombre']) && (!empty($_POST['pass']))) {
        $nombre = $_POST['nombre'];
        $pass = $_POST['pass'];

        $query = $conn -> prepare("SELECT * FROM usuarios WHERE nombre=:nombre");
        $query -> bindParam("nombre", $nombre, PDO::PARAM_STR);
        $query -> execute();

        $result = $query -> fetch(PDO::FETCH_ASSOC);

        if (!$result) {
            echo '<p>La combinacion de usuario y contraseña no coincide</p>';
        } 
        else {
            if ($pass == $result['password']) {
                $_SESSION['session_nombre']=$nombre;
                echo '<p>Bienvenido a Reciclar-TT</p>';
            }
            else {
                echo '<p>Nombre de usuario o contraseña incorrecto</p>';
                }
        }
    }
    else {
        $message = "Todos los campos son requeridos!";
    }
}

?>