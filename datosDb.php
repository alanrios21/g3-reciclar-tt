<?php

function console_log($output, $with_script_tags = true)
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
             ');';
        if($with_script_tags){
            $js_code = '<script>' . $js_code . '</script>';
        }
        echo $js_code;
}


$conn = new PDO('mysql:host=localhost:3360;dbname=mydb','root', ''); // El servidor localhost:3360 fue modificado debido a que el puerto por defecto que xampp asigna a MySQL estaba ocupado.

 if (!$conn){ 
         die("Connection failed: " . mysqli_connect_error()); 

} else {
    console_log("Connection successfully");
}
