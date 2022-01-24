<?php
// (A) JWT COOKIE NOT SET!
if (!isset($_COOKIE["user"])) {
  header('Location: /homepage.html');
}
 
// (B) DECODIFICO EL TOKEN
require "../../backend/api/config.php";
require "../../backend/api/vendor/autoload.php";
use Firebase\JWT\JWT;
try { $jwt = JWT::decode($_COOKIE["user"], JWT_SECRET, [JWT_ALGO]); }
catch (Exception $e) { exit("NO"); }
 
// VALIDO EL USUARIO EN LA BASE DE DATOS POR SEGURIDAD Y VERIFICO SI EL TOKEN YA CADUCADO
$now = strtotime("now");
if ($jwt->iss !== JWT_ISSUER ||
    $jwt->nbf > $now || $jwt->exp < $now) { 
       header('Location: /homepage.html');
     }
 
// FINALMENTE MUESTRO LA PAGINA SI TODO SALE BIEN ?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style-login-and-register.css">
    <link rel="stylesheet" href="/frontend/css/editar-perfil.css">
    <title>HOME</title>
</head>
<body>

  <nav class="navbar navbar-expand-md fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><s class="fisrtbrand"></s>PHPExperts.pro</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span>
          <i class="fas fa-bars"></i>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#" id="letter">blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="letter">comunity</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="letter">contact us</a>
          </li>   
          <li class="nav-item">
            <a class="nav-link" onclick="form_update()" id="letter">edit profile</a>
          </li>        
          <li class="nav-item">
            <a class="nav-link" href="#" id="letteron" onclick="logout()">logout</a>
          </li>   
        </ul>
      </div>
    </div>
  </nav>

  <section id="contenido">


 </section>


  
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="../js/controlador-usuarios.js"></script>
<script src="../js/login-efect-slider.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="../js/templates.js"></script>
</body>

</html>

