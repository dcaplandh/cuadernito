<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CdC - Home</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive|Dancing+Script" rel="stylesheet">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
         <!-- Styles -->
        <link href="./css/simple.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="./images/cuadernitologo.png" />
    </head>
    <body>
    <div class="wrap push">

<a href="#menu" class="menu-link">
    <img style="width:50px;" src="images/menu-responsive.png" alt="Menu">
</a>

 
    <div id="menu">
        <nav class="nav flex-column">
        <a class="nav-link active" href="./">Comunicaciones</a>
        <a class="nav-link" href="notificaciones">Notificaciones</a>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Eventos</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Próximo Evento</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="eventos">Todos los Eventos</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Retiros</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="responsables">Filtrar por Responsable</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Filtrar por Salita</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="alumnos">Filtrar por Alumno</a>
            </div>
            
        </li>
        <a class="nav-link" href="#">Salitas</a>
        <a class="nav-link" href="#">Ajustes</a>
        <a class="nav-link" href="./logout">Cerrar Sesión</a>
        </nav>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBlT432SDJL7zn6ALXCNeI96UaaTLVyz-8",
    authDomain: "cuadernito-ba068.firebaseapp.com",
    databaseURL: "https://cuadernito-ba068.firebaseio.com",
    projectId: "cuadernito-ba068",
    storageBucket: "cuadernito-ba068.appspot.com",
    messagingSenderId: "667313446859"
  };
  firebase.initializeApp(config);
  </script>