<?php
require_once("../../conexion.php");
$comando = $con->prepare("SELECT * FROM porteros ORDER BY id ASC");
$comando->execute();
$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crud Edificio</title>
  </head>
  <body class="">
    <!-- Contenedor -->
    <div class="container-fluid bg-white">
        <!-- Fila 1 -->
        <div class="row">
            <!-- Columna -->
            <div class="col">
                <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                    <p href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                        <img src="../../img/edificio.svg" alt="" class="bi me-2" width="40" height="32">
                        <span class="fs-4">Menú pricipal</span>
                    </p>
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a href="../../home.php" class="nav-link " >Home</a></li>
                        <li class="nav-item"><a href="../habitante/principalHabitante.php" class="nav-link" aria-current="page">Habitantes</a></li>
                        <li class="nav-item"><a href="portero/principalPortero.php" class="nav-link active">Porteros</a></li>
                        <li class="nav-item"><a href="../apartamento/principalApto.php" class="nav-link">Apartamentos</a></li>
                        <li class="nav-item"><a href="../../index.php" class="btn btn-outline-danger"">Cerrar sesión</a></li>

                    </ul>
                </header>
            </div>
        </div>
        <!-- Fila 2 -->
        <div class="row py-3">
            <div class="col mx-auto d-flex align-items-center">
                <h3 class="mx-auto">Porteros<br>
                    <a href="agregarPortero.php" type="button" class="btn btn-success d-flex align-items-center mt-4 mx-auto text-center justify-content-center">Agregar</a>
                </h3>
            </div>
        </div>
        <!-- Fila 3 -->
        <div class="row py-2">
            <div class="col">
                <table class="table table-info">
                    <thead>
                        <tr class="">
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Turno</th>
                            <th>Bloque</th>
                            <th>Actualizar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php
                        foreach($resultado as $columna){
                        ?>
                        <tr>
                            <td><?php echo $columna['id']?></td>
                            <td><?php echo $columna['nombre']?></td>
                            <td><?php echo $columna['apellido']?></td>
                            <td><?php echo $columna['turno']?></td>
                            <td><?php echo $columna['bloque']?></td>
                            <td><a href="actualizarPortero.php?id=<?php echo $columna['id']?>" class="btn btn-warning">Actualizar</a></td>
                            <td><a href="eliminarPortero.php?id=<?php echo $columna['id']?>" class="btn btn-danger">Eliminar</a></td>
                        </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>