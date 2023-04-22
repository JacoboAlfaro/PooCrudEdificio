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
                <h3 class="mx-auto mt-3">Agregar portero <br></h3>
            </div>
        </div>
        <div class="row py-3">
            <div class="col">
                <div class="justify-content-center align-items-center vh-200 vw-200 w-25 mx-auto">
                    <form method="post" action="datosDbPortero.php" autocomplete="off">
                        <div class="mb-2">
                            <label for="id" class="form-label">Identificación:</label>
                            <input type="text" class="form-control" id="id" name="id" required autofocus>
                        </div>
                        <div class="mb-2">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-2">
                            <label for="apellido" class="form-label">Apellido:</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" required>
                        </div>
                        <div class="mb-2">
                            <label for="turno" class="form-label">Turno:</label>
                            <input type="text" class="form-control" id="turno" name="turno" required>
                        </div>
                        <div class="mb-2">
                            <label for="bloque" class="form-label">Bloque:</label>
                            <input type="text" class="form-control" id="bloque" name="bloque" required>
                        </div>
                        <div class="mb-2 d-flex d-flex justify-content-between gap-2">
                            <a href="principalPortero.php" type="submit" class="btn btn-primary w-50 mt-4">Atrás</a>
                            <button type="submit" class="btn btn-success w-50 mt-4" name="agregar">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>