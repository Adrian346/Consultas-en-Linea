
<?php
  require 'pages/sesion.php';
?>


<!DOCTYPE html>
<html ng-app="app">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Consulta Virtual</title>
    
     <!-- Bootstrap -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
     <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    <script src="js/index.js"></script>
    <script src="js/about.js"></script>
    
    <link href="css/mystyles.css" rel="stylesheet">
    <script src="routing.js"></script>
    </head>
    <body ng-controller="indexController">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <?php if(!empty($user)): ?>
      <span class="glyphicon glyphicon-user"
                         aria-hidden="true"></span> Bienvenido <?= $user['nombre_doc']; ?> <?= $user['apellido_doc'];?>
                <?php endif; ?>
                         
                         
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="img/logo.png" height=30 width=41></a>
                </div>
                
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#!"><span class="glyphicon glyphicon-home"
                         aria-hidden="true"></span> Home</a></li>
                        <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown"
                         role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                         Menú <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#!">Doctor</a></li>
                            <li><a href="routingEnfermera.php">Enfermera</a></li>
                            <li><a href="Asistente.php">Asistente</a></li>
                        </ul>
                     </li>
                     <li><a href="#!about"><span class="glyphicon glyphicon-info-sign"
                         aria-hidden="true"></span> Sobre Nosotros</a></li>
                      <?php if(!empty($user)): ?>
                        <li><a href="#!consultasMedico"><i class="glyphicon glyphicon-book"></i> Consultas</a></li>
                        <li><a href="#!receta"><i class="glyphicon glyphicon-file"></i> Realizar Receta</a></li>
                        <li><a href="#!Videollamada"><i class="glyphicon glyphicon-facetime-video"></i> Videollamada</a></li>
                        <?php else: ?>
                        <li><a href="#!medico"><i class="glyphicon glyphicon-book"></i> Consultas</a></li>
                        <li><a href="#!medico"><i class="glyphicon glyphicon-file"></i> Realizar Receta</a></li>
                        <li><a href="#!medico"><i class="glyphicon glyphicon-facetime-video"></i> Videollamada</a></li>
                        <?php endif; ?>
                    </ul>
               
                    <?php require 'pages/partials/header.php' ?>

    <?php if(!empty($user)): ?>
      <ul class="nav navbar-nav navbar-right">
                   <li><a href="pages/logout.php" data-target="#loginModal">
                       <span class="glyphicon glyphicon-log-in"></span> Logout</a>
                    </li>
        </ul>
    <?php else: ?>
                   <ul class="nav navbar-nav navbar-right">
                   <li><a data-toggle="dropdown" data-target="#loginModal">
                   <span class="glyphicon glyphicon-log-in"></span> Login</a>
                   <ul class="dropdown-menu">
                           <li><a href="#!medico">Médico</a></li>
                           <li><a href="#!Enfermera">Enfermera</a></li>
                    </ul>
                    </li>
                    </ul>
    <?php endif; ?>
                
                
                </div>
               
                
            </div>
                
        </nav> 
        
        
        <div id="main">
            <!-- this is where content will be injected -->
            <div ng-view></div>
        </div>-->
        
        
        
        
        
        <footer class="row-footer">
        
        <div class="container">
            <div class="row">             
                <div class="col-xs-5 col-xs-offset-1 col-sm-2 col-sm-offset-1">
                
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#!home">Home</a></li>
                        <li><a href="#!contact">Contact</a></li>
                        <li><a href="#!about">About</a></li>
                        <li><a href="!registro">Ser Doctor</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-5">
                    <h5>Nuestra Direccion</h5>
                    <address>
		              Tecnologias Web<br>
		              Dto De Sistemas Electronicos<br>
		              UAA<br>
		              <i class="fa fa-phone"></i>: +52 1 449 155 51 77<br>
		              <i class="fa fa-fax"></i>: +52 1 346 102 14 91<br>
		              <i class="fa fa-envelope"></i>: <a href="mailto:confusion@food.net">al174471@edu.uaa.mx</a>
		           </address>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="nav navbar-nav" style="padding: 40px 10px;">
                        <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
                <div class="col-xs-12">
                    <p style="padding:10px;"></p>
                    <p align=center>Â© Copyright Seguro en Linea de Adrian y Cesar</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            
    <script>
        $(document).ready(function(){
            $("#mycarousel").carousel( { interval: 2000 } );
                          $("#carousel-pause").click(function(){
                $("#mycarousel").carousel('pause');
            });
                        $("#carousel-play").click(function(){
                $("#mycarousel").carousel('cycle');
            });
        });
    </script>

    </body>
</html>