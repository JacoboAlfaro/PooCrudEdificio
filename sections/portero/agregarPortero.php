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
                    <form method="post" action="">
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Identificaión:</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputPassword1" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputPassword1" class="form-label">Apellido:</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputPassword1" class="form-label">Turno:</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputPassword1" class="form-label">Bloque:</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <a href="principalPortero.php" type="submit" class="btn btn-success d-flex d-flex justify-content-center align-items-center mx-auto mt-4">Agregar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>