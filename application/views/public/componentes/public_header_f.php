<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Inventario</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="<?=base_url('static/images/favicon.ico')?>">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/79e32c056e.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="<?=base_url('/static/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
               
 
</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div> 
    <!-- Loader -->

    <!-- navbar -->

<div class="bs-component">
              <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">TAQ</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Gestion TAQ
                          <span class="visually-hidden">(current)</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('/controlador')?>">Inicio</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('/controlador/restablecer')?>">Restablecer contraseña</a>
                      </li>
                    </ul>

                  </div>
                </div>
              </nav>
            

    <!-- ./navbar -->
