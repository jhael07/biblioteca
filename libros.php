
<html>

<?php include 'bootstrap.php'; ?>
<?php include 'db.php'; ?>


<body>
  <?php include 'nav.php'; ?>
  

<div class="container mt-5">

<table class="table table-light table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Tipo</th>
      <th scope="col">Precio</th>
      <th scope="col">Total de ventas</th>
    </tr>
  </thead>
  <tbody>
 
  <?php
$stmt = $pdo->query('SELECT * FROM titulos');

while ($row = $stmt->fetch()) {
    echo "<tr>
    <th scope='row'>$row[0]</th>
    <td>$row[1]</td>
    <td>$row[2]</td>
    <td>$row[4]</td>
    <td>$row[6]</td>
  </tr>";
}

?>
  </tbody>
</table>
</div>



</html>
