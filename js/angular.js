var app = angular.module('app', []);

/*
Template desarrollado por Juan Camilo Arroyave Rico
*/

app.filter('splitStringAndGetTheIndex', function() {
	return function(input, splitChar, splitIndex) {
		var inputChar = input.toString();
		return inputChar.split(splitChar)[splitIndex];
	}
});

app.filter('splitString', function() {
	return function(input, splitChar) {
		var inputChar = input.toString();
		return inputChar.split(splitChar);
	}
});

//Hagamos en esta parte todo el JavaScript sin Angular

var jumboHeight = $('.jumbotron').outerHeight();
function parallax(){
	var scrolled = $(window).scrollTop();
	$('.bg').css('height', (jumboHeight-scrolled) + 'px');
}

$(window).scroll(function(e){
	parallax();
});

//Y aquí comencemos toda la parte del angular

app.controller('navigationController', function($scope) {
	$scope.changeClass = function(section) {
		switch (section) {
			case 1:
			$('#homeLink').addClass('active');
			$('#newsLink').removeClass('active');
			$('#servicesLink').removeClass('active');
			$('#usLink').removeClass('active');
			$('#contactLink').removeClass('active');
			break;
			case 2:
			$('#newsLink').addClass('active');
			$('#homeLink').removeClass('active');
			$('#servicesLink').removeClass('active');
			$('#usLink').removeClass('active');
			$('#contactLink').removeClass('active');
			break;
			case 3:
			$('#servicesLink').addClass('active');
			$('#homeLink').removeClass('active');
			$('#newsLink').removeClass('active');
			$('#usLink').removeClass('active');
			$('#contactLink').removeClass('active');
			break;
			case 4:
			$('#usLink').addClass('active');
			$('#homeLink').removeClass('active');
			$('#newsLink').removeClass('active');
			$('#servicesLink').removeClass('active');
			$('#contactLink').removeClass('active');
			break;
			case 5:
			$('#contactLink').addClass('active');
			$('#homeLink').removeClass('active');
			$('#newsLink').removeClass('active');
			$('#servicesLink').removeClass('active');
			$('#usLink').removeClass('active');
			break;
			default:
			$('#homeLink').addClass('active');
			break;
		}
	}
});