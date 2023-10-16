<?php
    
    try{
         $conexion = new PDO('mysql:host=localhost;dbname=db', 'db', 'AVNS_SkDFGosTY1m0cEqfxD7');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>
