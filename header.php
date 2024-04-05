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

* {
    margin: 0;
    padding: 0;
    border: o none;
    position: relative;
}
#menu_gral {
    font-family: verdana, sans sherif;
    width: 80%;
    margin: 1.5rem auto;
}
#menu_gral ul {
    list-style-type: none; 
    text-align: center;
    font-size: 0;
}
#menu_gral > ul li {
    display: inline-block;
    width: 25%;
    position: relative;
    background: #337ab7;
}
#menu_gral li a {
    display: block;
    text-decoration: none;
    font-size: 2rem;
    font-family: 'Roboto', sans-serif;
    background-color: #2698f3;
    font-size: 18px;
    line-height: 2.5rem;
    color: #fff;
}
#menu_gral li:hover a, #menu_gral li a:focus {
    background: #055d54;
    color: #fff;
}

#menu_gral li ul {
    position: absolute;
    width: 0;
    overflow: hidden;
}
#menu_gral li:hover ul, #menu_gral li:focus ul {
    width: 100%;
    margin: 0 -4rem -4rem -4rem;
    padding: 0 4rem 4rem 4rem;
   
    z-index: 5;
}
#menu_gral li li {
    display: block;
    width: 130%;
}
#menu_gral li:hover li a, #menu_gral li:focus li a {
    font-family: monospace;
    font-size: .9rem;
    line-height: 1.7rem;
    border-top: 1px solid #e5e5e5;
    background: #055d54;
}
#menu_gral li li a:hover, #menu_gral li li a:focus {
    background: #8AA9B8; 
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
  	<nav id="menu_gral">
  <ul>
    <li>
    	<div class="card-body d-flex justify-content-between align-items-center">
    <a href="index.php">Inicio</a></div></li>
</li>
</ul>
</nav>
  </ul>
</div>
<div class="panel-body">
<div class="row">