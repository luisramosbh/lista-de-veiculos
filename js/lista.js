var app = angular.module('myApp', []);
	app.controller('myCtrl', function($scope) {
	    $scope.cars = {
	        VEÍCULO_01 : {placa: "GTG-4411", chassi: "234567891", marca : "GM", modelo : "Kadett", ano : "1995"},
	        VEÍCULO_02 : {placa: "QMT-1691", chassi: "123456789", marca : "Ford", modelo : "Ka", ano : "2018"},
	        VEÍCULO_03 : {placa: "BOY-4891", chassi: "345678912", marca : "GM", modelo : "Vectra", ano : "1994"},
	        VEÍCULO_04 : {placa: "HFP-0885", chassi: "456789123", marca : "GM", modelo : "Vectra", ano : "2007"},
	        VEÍCULO_05 : {placa: "GZK-9477", chassi: "567891234", marca : "Fiat", modelo : "Uno", ano : "2001"},
	        VEÍCULO_06 : {placa: "GZH-7357", chassi: "678912345", marca : "Fiat", modelo : "Palio", ano : "2001"},
	        VEÍCULO_07 : {placa: "HHX-0412", chassi: "789123456", marca : "Fiat", modelo : "Palio", ano : "2008"},
	    }
	});
		