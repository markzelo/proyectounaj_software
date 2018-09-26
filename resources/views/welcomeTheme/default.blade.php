<!DOCTYPE html>
<html lang="es">
<head>
	<title>SCIT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="{{ asset('welcome/styles.css') }}">

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('welcome/normalize.css') }}">

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<!-- Header start --> 

@include('welcomeTheme.header')

<!-- Header end -->

<!-- Title start -->

<div class="bg"></div>
<div class="jumbotron text-center">
  <h1>< <span>_</span>SCIT ></h1> 
  <p>Sistema de gestión de incidencias</p> 
</div>

<!-- Title end -->

<!-- Sections start -->

@include('welcomeTheme.sections')

<!-- Sections end -->

<!-- Tech start -->

@include('welcomeTheme.slider')

<!-- Tech end -->

<!-- Grid start -->

@include('welcomeTheme.grid')

<!-- Grid end -->

<!-- Footer start -->

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Proyecto de software - 2018 - SCIT</p> 
</footer>

<!-- Footer end -->

<!-- Scripts start -->

@include('welcomeTheme.scripts')

<!-- Scripts end -->

</body>
</html>