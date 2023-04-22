<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body class="" >
    <!-- Contenedor -->
    <div class="container-fluid bg-white" style="background-image: url(img/ladrillo.jpg);">
        <!-- Fila -->
        <div class="row">
            <!-- Columna -->
            <div class="col">
                <div class="d-flex d-flex justify-content-center align-items-center vh-100">
                    <form  method="post" action="./process.php" class="p-2" style="background-color: #bfbfbf; border: 1px solid #676767; border-radius: 10px;">
                        <h1 class="col mx-auto d-flex align-items-center justify-content-center mb-4">Log In</h1>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre de Usuario</label>
                            <input type="email" name="usr" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color: #ebebeb;">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            <input type="password" name="pss" class="form-control" id="exampleInputPassword1" style="background-color: #ebebeb;">
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary col mx-auto d-flex align-items-center justify-content-center w-50 mt-4" value="Ingresar">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>