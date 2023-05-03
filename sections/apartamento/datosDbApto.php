<?php
require_once("../../conexion.php");

$correcto = false;

if(isset($_POST['actualizar'])){
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $bloque = $_POST['bloque'];
    $piso = $_POST['piso'];
    $cuarto = $_POST['num_cuartos'];

    $db = $con->prepare("UPDATE apartamentos SET nombre=?, bloque=?, piso=?, num_cuartos=? WHERE id=?");
    $res = $db->execute(array($nombre, $bloque, $piso, $cuarto, $id));

    if($res){
        $correcto = true;
    }
}
if(isset($_POST['agregar'])){
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $bloque = $_POST['bloque'];
    $piso = $_POST['piso'];
    $cuartos = $_POST['num_cuartos'];


    $db = $con->prepare("INSERT INTO apartamentos(id, nombre, bloque, piso, num_cuartos) VALUES (:identificacion, :names , :blocks, :floor, :room)");
    $res = $db->execute(array('identificacion' => $id, 'names' => $nombre, 'blocks' => $bloque, 'floor' => $piso, 'room' => $cuartos));

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
  <body class=""  style="background-image: url(../../img/ladrillo.jpg);">
    <!-- Contenedor -->
    <div class="container-fluid">
        <!-- Fila 1 -->
        <div class="row py-3">
            <div class="col mx-auto d-flex align-items-center">
                <?php if($correcto){ ?>
                    <h3 class="mx-auto mt-3"> Apartamento guardado <br></h3>
                <?php }else{ ?>
                    <h3 class="mx-auto mt-3">Error al agregar un Apartamento <br></h3>
                <?php } ?>
            </div>
        </div>
        <div class="row py-3">
            <div class="col mx-auto d-flex align-items-center">
                <a href="principalApto.php" class="btn btn-primary mx-auto d-flex align-items-center">Regresar</a>
            </div>
        </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>