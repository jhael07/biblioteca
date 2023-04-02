

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Libreria</title>
        
        <?php include 'bootstrap.php'; ?>

    </head>
    <body>
        <?php include 'nav.php'; ?>

        <div class="container mt-5">
            <h1 class=" d-flex">
            <span class="m-auto">
                Bienvenido a la biblioteca JR !!!</h1>
            </span>    
            <br>

            <div class="container border border-2 rounded-3 p-2">
               <div class="row">
                <div class="col p-2 d-flex ">
                   
                    <?php
                        $image_path = "jhael.jpg";
                        echo "<img src=\"$image_path\" alt=\"Alternative text\" width='350' class='px-2 m-auto'>";
                    ?>
                </div>
                <div class="col">
                    <div class="container-fluid">
                        <h1>Descripción</h1>
                        <p class="p-2 text-left    ">
                      
                            Mi nombre es <b>Jhael Rodriguez 2022-0296</b> 
                            y esta es mi pagina web aplicando los conocimientos de html, css, js y php, adquiridos a lo largo de este cuatrimestre, espero que le guste.
                    
                        </p>

                        <div>
                            <h2 class="display-6">Tecnologias en este proyecto</h2>
                            <div class="d-flex  ">
                            <?php
                            
                             echo "<img src=\"https://alignminds.com/wp-content/uploads/2022/11/Full-stack-development.png\" width= '300' class='px-2 m-auto mt-2'>";
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
               </div>

            </div>
        </div>

    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>

</html>
    