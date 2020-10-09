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
.when('/logout', {
// route for the contact page
templateUrl: 'pages/logout.php',
controller: 'logoutController'
})
.when('/consultasMedico', {
// route for the contact page
templateUrl: 'pages/consultasMedico.php',
controller: 'consultasMedicoController'
})
.when('/receta', {
// route for the contact page
templateUrl: 'pages/receta.php',
controller: 'recetaController'
})
.when('/Videollamada', {
// route for the contact page
templateUrl: 'pages/Videollamada.php',
controller: 'VideollamadaController'
})
.when('/actualizarPaciente', {
// route for the contact page
templateUrl: 'pages/actualizarPaciente.php',
controller: 'actualizarPacienteController'
})
.when('/asistenteRegistrar', {
// route for the contact page
templateUrl: 'pages/asistenteRegistrar.php',
controller: 'asistenteRegistrarController'
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
app.controller('logoutController', function ($scope) {
$scope.message = '¡Logout Actualizado!';
});
app.controller('consultasMedico', function ($scope) {
$scope.message = '¡consultasMedico Actualizado!';
});
app.controller('receta', function ($scope) {
$scope.message = '¡receta Actualizado!';
});
app.controller('Videollamada', function ($scope) {
$scope.message = '¡Videollamada Actualizado!';
});
app.controller('actualizarPaciente', function ($scope) {
$scope.message = '¡actualizarPaciente Actualizado!';
});
app.controller('asistenteRegistrar', function ($scope) {
$scope.message = '¡actualizarPaciente Actualizado!';
});
app.controller('notFoundController', function ($scope) {
$scope.message = 'There seems to be a problem finding the page you wanted';
//$scope.attemptedPath = $location.path();

});