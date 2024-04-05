<!DOCTYPE html>
<html>
<head>
<title>Ministerio de Educación, Cultura, Ciencia y Tecnología</title>
<link rel="stylesheet" href="style.css" type="text/css" media="all" />
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">
<!-- Último minificado bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery libraria incluida -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<!-- Último minificado bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.btn-success {
	margin: 10px;
}
.main {
	margin: 20px;
}
</style>
<link rel="icon" type="image/png" href="./imagenes/escudo-32x32.png">
</head>

<img src="./imagenes/fondoCabecera.jpg">

<body>
<div class="main">
<div class="panel panel-default">
<div class="panel-heading">
  <ul class="nav nav-pills">
    <li role="presentation" class="active"><a href="index.php">Inicio</a></li>
    <li role="group">
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
     <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Legajos
     </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Listado de Docentes</a>
      <br>
      <br>
      <a class="dropdown-item" href="#">Editar Docentes</a>
      <br>
      <br>
      <a class="dropdown-item" href="#">Listado Docentes de Especial(Temporal)</a>
      <br>
      <br>
      <a class="dropdown-item" href="#">Listado Docentes de Especial  SIN TITULARES (Temporal)</a>
      <br>
      <br>
       <a class="dropdown-item" href="#">Listado Docentes de Especial(Interinos,suplentes y Titulares)</a>
       <br>
       <br>

      </div>
      </div>
  </li>

<li role="group">
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
     <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Administracion
     </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Modalidades</a>
      <br>
      <br>
      <a class="dropdown-item" href="#">Dependencia</a>
      <br>
      <br>
      <a class="dropdown-item" href="#">Configurar Listados</a>
      <br>
      <br>
      </div>
      </div>
  </li>

<li>

  <div class="card-body d-flex justify-content-between align-items-center">
  <a href="MiCuenta.php?logoutSubmit=1"   class="btn btn-primary" class="logout">Cerrar Sesion</a>
</div>
</li>   

  </ul>
</div>
<div class="panel-body">
<div class="row">