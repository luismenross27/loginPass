<?php
// Datos de conexión a la base de datos PostgreSQL
$driver = 'pgsql';
$host = getenv('app-543eb30e-c1b1-47a9-b5ce-d4b8f828f8b6-do-user-14712981-0.c.db.ondigitalocean.com');
//$port = getenv('25060');
$dbname = getenv('dbsangredemono');
$user =   getenv('dbsangredemono');
$password = getenv('AVNS_eBm6i5IKYtPxLRRyeWb');

try {
    // Conexión a la base de datos
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");

    $sql = "DROP TABLE IF EXISTS login";
    $conn->exec($sql);
    
    // Consulta SQL para crear una tabla
    $sql = "CREATE TABLE IF NOT EXISTS login (
    id serial PRIMARY KEY,
    correo varchar(123) NOT NULL,
    usuario varchar(100) NOT NULL,
    clave varchar(200) NOT NULL)";

    // Ejecutar la consulta SQL
    $conn->exec($sql);

    echo "Tabla creada con éxito.";
} catch (PDOException $e) {
    echo "Error al crear la tabla: " . $e->getMessage();
}

// Cerrar la conexión a la base de datos
$conn = null;
?>
