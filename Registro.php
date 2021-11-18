<?php

require_once("datosDb.php");
session_start();

if (isset($_POST["register"])) {

    if (!empty($_POST['nombreInput']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['fecha_nacimiento']) && !empty($_POST['pass']) && !empty($_POST['telefono'])) { 
        $nombreInput=$_POST['nombreInput'];
        $apellido=$_POST['apellido'];
        $email=$_POST['email'];
        $fecha_nacimiento=$_POST['fecha_nacimiento'];
        $pass=$_POST['pass'];
        $telefono=$_POST['telefono'];
        $ciudad=$_POST['ciudad'];
        $provincia=$_POST['provincia'];
        $pais=$_POST['pais'];
        

        $query = $conn ->prepare("SELECT * FROM usuarios WHERE MAIl=:email");
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $query->execute();

            if ($query->rowCount() > 0) {
                echo '<p>El mail ya se encuentra registrado</p>';
            }
            
            if ($query->rowCount() == 0) {
                $query = $conn->prepare("INSERT INTO usuarios (nombre,apellido,mail,fecha_nac,password,telefono,ciudad,provincia,pais) VALUES (:nombreInput,:apellido,:email ,:fecha_nacimiento, :pass, :telefono, :ciudad, :provincia, :pais)");
                $query->bindParam("nombreInput", $nombreInput, PDO::PARAM_STR);
                $query->bindParam("apellido", $apellido, PDO::PARAM_STR);
                $query->bindParam("email", $email, PDO::PARAM_STR);
                $query->bindParam("fecha_nacimiento", $fecha_nacimiento, PDO::PARAM_STR);
                $query->bindParam("pass", $pass, PDO::PARAM_STR);
                $query->bindParam("telefono", $telefono, PDO::PARAM_STR);
                $query->bindParam("ciudad", $ciudad, PDO::PARAM_STR);
                $query->bindParam("provincia", $provincia, PDO::PARAM_STR);
                $query->bindParam("pais", $pais, PDO::PARAM_STR);
                $result = $query -> execute(); 

                if($result) {
                    echo '<p> Cuenta creada correctamente</p>';
                }
                else {
                    echo '<p>Error al ingresar datos de la informacion!';
            }
        }
        else {
            echo '<p>El nombre de usuario ya existe! por favor, intente con otro<p>';
        }
    } else {
        echo '<p>Todos los campos no pueden estar vacios!!';
    }
}
?>