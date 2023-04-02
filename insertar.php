
<?php include 'nav.php'?>
<?php include 'bootstrap.php'?>

<?php

// Conexión a la base de datos

$hostname = "localhost"; 
$database = "libreria";
$username = "root"; 
$password = ""; 

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Sentencia SQL de inserción
    $sql = "INSERT INTO contacto (fecha, correo, nombre, asunto, comentario) 
            VALUES (:fecha, :correo, :nombre, :asunto, :comentario)";

    // Preparar la sentencia
    $stmt = $conn->prepare($sql);

    // Vincular parámetros
    $stmt->bindParam(':fecha', $fecha);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':asunto', $asunto);
    $stmt->bindParam(':comentario', $comentario);

    // Asignar valores a los parámetros
    $fecha = $_POST['fecha'];
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $comentario = $_POST['comentario'];

    // Ejecutar la sentencia
    $stmt->execute();

    
  
    echo "<div class='container'>Dato insertado exitosamente</div>";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Cerrar la conexión
$conn = null;

?>


<html>

<?php include 'db.php'; ?>


<body>
  

<div class="container mt-5">

<table class="table table-light table-striped">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Fecha</th>
      <th scope="col">Asunto</th>
      <th scope="col">Comentario</th>
    </tr>
  </thead>
  <tbody>
 
  <?php
$stmt = $pdo->query('SELECT * FROM contacto');


while ($row = $stmt->fetch()) {
    echo "<tr>
    <th>$row[3]</th>
    <td>$row[2]</td>
    <td>$row[1]</td>
    <td>$row[4]</td>
    <td>$row[5]</td>
  
 
   
   
  </tr>";
}

?>
  </tbody>
</table>
</div>



</html>

