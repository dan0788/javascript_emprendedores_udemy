<!doctype html>
<html lang="es">
    <head>
        <title>Project2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <script src="jquery-3.6.0.min.js" type="text/javascript"></script>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="project2.css?ts=<?= time() ?>">
        <script src="project2.js?ts=<?= time() ?>" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="container-fluid text-center">
                <h2 class="btn btn-danger my-3 row col-4">Buscar</h2>
                <ul>
                    <li class="d-flex justify-content-center">
                        <div class="form-floating mb-3 col-5 row mx-1">
                            <input type="text" class="form-control" id="floatingInput" placeholder="">
                            <label for="floatingInput">Ingrese el nombre</label>
                        </div>
                    </li>
                    <li class="d-flex justify-content-center">
                        <div class="form-floating mb-3 col-5 row mx-1">
                            <input type="text" class="form-control" id="floatingInput" placeholder="">
                            <label for="floatingInput">Ingrese la afición</label>
                        </div>
                    </li>
                    <li class="d-flex justify-content-center">
                        <div class="form-floating mb-3 col-5 row mx-1">
                            <input type="text" class="form-control" id="floatingInput" placeholder="">
                            <label for="floatingInput">Ingrese el género</label>
                        </div>
                    </li>
                    <li class="d-flex justify-content-center">
                        <div class="form-floating mb-3 col-5 row mx-1">
                            <input type="text" class="form-control" id="floatingInput" placeholder="">
                            <label for="floatingInput">Ingrese la edad</label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="container-fluid">
                <div class="row col-3 bg-success rounded p-1">
                    
                </div>
            </div>
        </div>
    </body>
</html>

<?php