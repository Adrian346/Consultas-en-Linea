var app = angular.module('app', ['ngRoute']);
app.config(function ($routeProvider) {
// configure the routes
$routeProvider
.when('/', {
// route for the home page
templateUrl: 'pages/home.php',
controller: 'indexController'
})
.when('/about', {
// route for the about page
templateUrl: 'pages/about.php',
controller: 'aboutController'
})
.when('/contact', {
// route for the contact page
templateUrl: 'pages/contact.html',
controller: 'contactController'
})
.when('/sugerencias', {
// route for the contact page
templateUrl: 'pages/sugerencias.html',
controller: 'sugerenciasController'
})
.when('/calendario', {
// route for the contact page
templateUrl: 'pages/calendario.html',
controller: 'calendarioController'
})
.when('/medico', {
// route for the contact page
templateUrl: 'pages/LoginMedico.php',
controller: 'medicoController'
})
.when('/Enfermera', {
// route for the contact page
templateUrl: 'pages/LoginEnfermera.php',
controller: 'EnfermeraController'
})
.when('/SignupMedico', {
// route for the contact page
templateUrl: 'pages/SignupMedico.php',
controller: 'SignupMedicoController'
})
.when('/SignupEnfermera', {
// route for the contact page
templateUrl: 'pages/SignupEnfermera.php',
controller: 'SignupEnfermeraController'
})
.when('/database', {
// route for the contact page
templateUrl: 'pages/database.php',
controller: 'databaseController'
})
.when('/logoutEnfermera', {
// route for the contact page
templateUrl: 'pages/logoutEnfermera.php',
controller: 'logoutEnfermeraController'
})
.when('/consulta', {
// route for the contact page
templateUrl: 'pages/consulta.php',
controller: 'consultaController'
}) 
.when('/registrarPaciente', {
// route for the contact page
templateUrl: 'pages/RegistrarPaciente.php',
controller: 'RegistrarpacienteController'
})  
.when('/VideollamadaEnfermera', {
// route for the contact page
templateUrl: 'pages/VideollamadaEnfermera.php',
controller: 'VideollamadaEnfermeraController'
})
.otherwise({
// when all else fails
templateUrl: 'pages/routeNotFound.html',
controller: 'notFoundController'
});

});



app.controller('indexController', function ($scope) {
$scope.message = '¡Bienvenido a la pagina de inicio!';
});
app.controller('aboutController', function ($scope) {
$scope.message = 'Arma tu equipo con los mejores jugadores de la liga';
});
app.controller('contactController', function ($scope) {
$scope.message = '¡Pon a prueba tus conocimientos sobre fucho!';
});
app.controller('sugerenciasController', function ($scope) {
$scope.message = '¡Queremos saber tu opinion!';
});
app.controller('calendarioController', function ($scope) {
$scope.message = '¡Calendario Actualizado!';
});
app.controller('medicoController', function ($scope) {
$scope.message = '¡Medico Actualizado!';
});
app.controller('EnfermeraController', function ($scope) {
$scope.message = '¡Medico Actualizado!';
});
app.controller('SignupMedicoController', function ($scope) {
$scope.message = '¡SignupMedico Actualizado!';
});
app.controller('SignupEnfermeraController', function ($scope) {
$scope.message = '¡SignupEnfermera Actualizado!';
});
app.controller('databaseController', function ($scope) {
$scope.message = '¡Database Actualizado!';
});
app.controller('logoutEnfermeraController', function ($scope) {
$scope.message = '¡Logout Actualizado!';
});
app.controller('consultaController', function ($scope) {
$scope.message = '¡Consulta Actualizado!';
});
app.controller('registrarPacienteController', function ($scope) {
$scope.message = '¡registrarPaciente Actualizado!';
});
app.controller('VideollamadaEnfermera', function ($scope) {
$scope.message = '¡Videollamada Actualizado!';
});
app.controller('notFoundController', function ($scope) {

$scope.message = 'There seems to be a problem finding the page you wanted';
//$scope.attemptedPath = $location.path();

});