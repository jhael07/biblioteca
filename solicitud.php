<?php include 'nav.php'?>
<?php include 'bootstrap.php'?>
<?php include 'db.php'?>

<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Libreria</title>
        
        <?php include 'bootstrap.php'; ?>

    </head>
    
<div class="container mt-5 ">
    <form class="row g-3" action="insertar.php" method="POST">
        
        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label for="fecha" class="form-label">Fecha:</label>
            <input type="date" id="fecha" name="fecha" class="form-control" required>
        </div>

        <div class="col-md-12">
            <label for="correo" class="form-label">Correo:</label>
            <input type="email" id="correo" name="correo" class="form-control" required>
        </div>

        <div class="col-md-12">
            <label for="asunto" class="form-label">Asunto:</label>
            <input type="text" id="asunto" name="asunto" class="form-control" required>
        </div>

        <div class="col-md-12">
            <label for="comentario" class="form-label">Comentario:</label>
            <textarea id="comentario" name="comentario" class="form-control" required></textarea>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary m-auto flex">Enviar</button>
        </div>
    </form>
</div>
