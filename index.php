<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<head>
	<title>Lista de Carros</title>
	<link rel="icon" href="img/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8" />
	<meta name="description" content="Exercício de Angular. Lista de veículos.">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0" />
</head>
<body>
	<div class="topo">
		<a href="index.html"><img class="logo_top" src="img/logo_top.png"></a>
		<h1>LISTA DE VEÍCULOS</h1>	
	</div><!--topo-->
	<div class="container" ng-app="myApp" ng-controller="myCtrl">

		<p>Escolha um carro na lista:</p>

		<select ng-model="selectedCar" ng-options="x for (x, y) in cars">
		</select>

		<h1>Carro: {{selectedCar.marca | uppercase}}</h1>
		<h2>Modelo: {{selectedCar.modelo  | uppercase}}</h2>
		<h3>Ano: {{selectedCar.ano}}</h3>
		<h3>Placa: {{selectedCar.placa | uppercase}}</h3>
		<h3>Chassi: {{selectedCar.chassi | uppercase}}</h3>
		
	</div>

	<div class="footer">
		<h2>OBRIGADO POR ESCOLHER A NOSSA EMPRESA</h2>
		<p>lista.veiculos@veiculos.com.br</p>
		<p> + 55 31 99999-8888</p>
	</div><!--footer-->




<script src="js/lista.js"></script>	
</body>
</html>
