<!DOCTYPE html >
<html lang="pt-br"> 
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Material Design Bootstrap</title>
<meta name="description" content="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo BASEURL; ?>public/css/mdb.css">
<link rel="stylesheet" href="<?php echo BASEURL; ?>public/css/bootstrap-select.css">
<link rel="stylesheet" href="<?php echo BASEURL; ?>public/css/bootstrap-datetimepicker.min.css">


<!-- Template styles -->
<style rel="stylesheet">
/* TEMPLATE STYLES */
        
main {
	margin-top: 3rem;
}

.navbar {
	background-color: #0f6256;
}
footer.page-footer {
	background-color: #0f6256;
	margin-top: 2rem;
}
</style>
</head>

<body>
<header> 
  <!--Navbar-->
  <nav class="navbar default-color-dark">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand waves-effect waves-light" href="sistema">O Estudante</a> </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
        <ul class="nav navbar-nav">
          <li ><a href="<?php echo BASEURL; ?>horarios" class="waves-effect waves-light"> Horarios de Aula </a></li>
          <li><a href="<?php echo BASEURL; ?>trabalhos" class="waves-effect waves-light">Trabalhos para entregar</a></li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" role="button" aria-expanded="false">Opções <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
             <li><a href="<?php echo BASEURL; ?>sistema/horas.php">Gerenciar Horarios</a></li>
              <li><a href="<?php echo BASEURL; ?>sistema/horarios.php">Gerenciar horarios de Aula</a></li>
              <li><a href="<?php echo BASEURL; ?>sistema/disciplinas.php">Gerenciar disciplinas</a></li>
            </ul>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
  <!--/.Navbar--> 
</header>
<main>
<div class="container">
