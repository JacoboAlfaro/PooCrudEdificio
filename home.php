
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
  <body class="" style="background-color:#B3B6B7;">
    <!-- Contenedor -->
    <div class="container-fluid">
        <!-- Fila -->
        <div class="row" style="background-color:#fff;">
            <!-- Columna -->
            <div class="col">
                <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                    <p href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                        <img src="img/edificio.svg" alt="" class="bi me-2" width="40" height="32">
                        <span class="fs-4">Menú pricipal</span>
                    </p>
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a href="home.php" class="nav-link active" aria-current="page">Home</a></li>
                        <li class="nav-item"><a href="sections/habitante/principalHabitante.php" class="nav-link">Habitantes</a></li>
                        <li class="nav-item"><a href="sections/portero/principalPortero.php" class="nav-link">Porteros</a></li>
                        <li class="nav-item"><a href="sections/apartamento/principalApto.php" class="nav-link">Apartamentos</a></li>

                    </ul>
                </header>
            </div>
        </div>
        <div class="row">
            <div class="col-7">
                <div class="card mb-4  mt-4" style="max-width: 800px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="img/hab.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Habitantes</h5>
                            <p class="card-text">Crud de los las personas que residen en un conjunto de edificos. <br> Más informacion <a href="sections/habitante/principalHabitante.php">aquí.</a></p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4" style="max-width: 800px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="img/celador.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Porteros</h5>
                            <p class="card-text">Crud de las personas que cuidan el conjunto de edificios. <br> Más informacion <a href="sections/portero/principalPortero.php">aquí.</a></p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4" style="max-width: 800px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="img/apartamento.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Apartamentos</h5>
                            <p class="card-text">Crud de los apartamentos que hay en el conjunto de edificios. <br> Más informacion <a href="sections/apartamento/principalApto.php">aquí.</a></p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="d-flex align-items-center rounded mt-5">
                    <img src="img/CRUD.gif" class="" alt="..." style="max-width: 480px; max-height: 480px;">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>