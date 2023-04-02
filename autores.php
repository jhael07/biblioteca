
<html>

<?php include 'bootstrap.php'; ?>
<?php include 'db.php'; ?>


<body>
  <?php include 'nav.php'; ?>
  

<div class="container mt-5">

<table class="table table-light table-striped">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Estado</th>
      <th scope="col">Pais</th>
      <th scope="col">Codigo Postal</th>
    </tr>
  </thead>
  <tbody>
 
  <?php
$stmt = $pdo->query('SELECT nombre,apellido,telefono,direccion,ciudad,estado,pais,cod_postal FROM titulo_autor 
INNER JOIN  autores on autores.id_autor = titulo_autor.id_autor
                    
');


while ($row = $stmt->fetch()) {
    echo "<tr>
    <th>$row[0]</th>
    <td>$row[1]</td>
    <td>$row[2]</td>
    <td>$row[3]</td>
    <td>$row[4]</td>
    <td>$row[5]</td>
    <td>$row[6]</td>
    <td>$row[7]</td>
 
   
   
  </tr>";
}

?>
  </tbody>
</table>
</div>



</html>
