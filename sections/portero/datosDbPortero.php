<?php
require_once("../../conexion.php");

$correcto = false;

if(isset($_POST['actualizar'])){
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $turno = $_POST['turno'];
    $bloque = $_POST['bloque'];

    $db = $con->prepare("UPDATE porteros SET nombre=?, apellido=?, turno=?, bloque=? WHERE id=?");
    $res = $db->execute(array($nombre, $apellido, $turno, $bloque, $id));

    if($res){
        $correcto = true;
    }
}
if(isset($_POST['agregar'])){
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $turno = $_POST['turno'];
    $bloque = $_POST['bloque'];

    $db = $con->prepare("INSERT INTO porteros(id, nombre, apellido, turno, bloque) VALUES (:identificacion, :names , :lastName, :turn, :blocks)");
    $res = $db->execute(array('identificacion' => $id, 'names' => $nombre, 'lastName' => $apellido,'turn' => $turno, 'blocks' => $bloque));

    if($res){
        $correcto = true;
    }
}
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
  <body class=""  style="background-color:#B3B6B7;">
    <!-- Contenedor -->
    <div class="container-fluid">
        <!-- Fila 1 -->
        <div class="row py-3">
            <div class="col mx-auto d-flex align-items-center">
                <?php if($correcto){ ?>
                    <h3 class="mx-auto mt-3"> Portero guardado <br></h3>
                <?php }else{ ?>
                    <h3 class="mx-auto mt-3">Error al agregar un Portero <br></h3>
                <?php } ?>
            </div>
        </div>
        <div class="row py-3">
            <div class="col mx-auto d-flex align-items-center">
                <a href="principalPortero.php" class="btn btn-primary mx-auto d-flex align-items-center">Regresar</a>
            </div>
        </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>