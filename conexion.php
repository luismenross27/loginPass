<?php
    
    try{
         $conexion = new PDO('mysql:host=localhost;dbname=dblogin', 'login_tuto', '49b36255792fdeed18c6cff9e308d70552d9df8f9feb950c');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>
