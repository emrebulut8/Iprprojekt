<?php
session_start();
require_once __DIR__ . '/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Einkaufswagen</title>
    
    <!-- STYLESHEETS -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sliders.css">
    <link rel="stylesheet" href="css/hero-slider.css">
    <link rel="stylesheet" href="css/project-slider.css">
    <link rel="stylesheet" href="css/blue.css" class="colors">
    <link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">
    
    <!-- SCRYPTS -->
    <script type="text/javascript" src="plugins/jquery/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="plugins/waypoints/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="plugins/angular/angular.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/owlcarousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="plugins/waitforimages/jquery.waitforimages.min.js"></script>
    <script type="text/javascript" src="js/hero-slider.js"></script>
    <script type="text/javascript" src="js/project-slider.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

</head>

<body id="home">
<?php
  if(isset($errorMessage)) {
   echo $errorMessage;
  }
  ?>
    <div id="main-nav" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
     <div class="container">
        <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
              </button>
        <a class="navbar-brand" href="#home">
              <a href="index.html" class="external"> <img id="navlogo" src="img/navlogo-blue.png" alt="Tassen" width="122" height="50"></a>
        </a>

        </div>
            <div class="collapse navbar-collapse">
                <ul id="navigation" class="nav navbar-nav navbar-right text-center">
                     <li><a href= "Produkte.html " class="external"><i class="fa fa-coffee" aria-hidden="true"></i> Produkte</a></li>
                     <li><a href= "Einkaufswagen.php" class="external"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Einkaufswagen</a></li>
                     <li><a href= "Kontakt.php" class="external"><i class="fa fa-envelope-o" aria-hidden="true"></i> Kontakt</a></li>
                     <li><a href= "logout.php" class="external"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a></li>
                     <li><a href= "UeberUns.html " class="external">ÜberUns</a></li>

                </ul>
             </div>

        </div>
    </div>
    <div class="panel panel-default" >
        <div class="panel-heading">
              <div class="panel-title text-center">Login</div>
         </div>
         <div class="panel-body" >
            <form action="?login=1" class="form-horizontal" method="POST">
                <div class="panel-info text-center">Email</div>
                <div class="input-group">
                    <span class="input-group-addon"><i></i></span>
                        <input title="email" type="email" name="email" class="form-control" required autofocus maxlength="250"/>
                </div>
                <div class="panel-info text-center">Passwort</div>
                <div class="input-group">
                    <span class="input-group-addon"><i></i></span>
                        <input title="password" type="password" name="password" class="form-control" required maxlength="250"/>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 controls">
                        <button type="submit" class="btn center-block" value="Abschicken">
                        <i></i> Log in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>