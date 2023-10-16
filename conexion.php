<?php
    
    try{
         $conexion = new PDO('mysql:host=localhost;dbname=dblogin', 'dblogin', 'AVNS_-OxtONDH-_bTXfw9ftN');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>
