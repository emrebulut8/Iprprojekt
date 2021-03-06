<?php
if(isset($_POST['sent'])){



    echo "Danke für ihre Meinung.";
}
function(){
    echo "Danke für ihre Meinung.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>
    
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
                <li><a href= "Login.php" class="external"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                <li><a href= "UeberUns.html " class="external">ÜberUns</a></li>

            </ul>
        </div>

    </div>
</div>
<section id="contact" class="gray-bg padding-top-bottom">
    <div class="container">
        <header class="section-header text-center">
            <h1><strong>Kontakt</strong></h1>
            <p>Haben sie irgendwelche Probleme auf unserer Website?</p>
        </header>
        <form action="index.html" method="post" novalidate id="contact-form">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 contact-info cta-message  fade-right">
                    <address>
                        <strong>Tassen</strong><br>
                        Schellingstr. 24, 70174 Stuttgart<br>
                        Postfach 101452, 70013 Stuttgart<br>
                        Fax +49 (0)711 8926 2666<br>
                        tassen@tassen.com
                    </address>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-8  fade-up d1" >
                    <div class="form-group">
                        <label class="control-label" for="contact-name">Name</label>
                        <div class="controls">
                            <input id="contact-name" name="contactName" placeholder="Dein Name" class="form-control input-lg requiredField" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="contact-mail">Email</label>
                        <div class=" controls">
                            <input id="contact-mail" name="email" placeholder="Deine Email" class="form-control input-lg requiredField" type="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="contact-message">Message</label>
                        <div class="controls">
                            <textarea id="contact-message" name="comments" placeholder="Deine Nachricht" class="form-control input-lg requiredField" rows="5"></textarea>
                        </div>
                    </div>
                    <p>
                        <button name="sent" type="submit" onlick="function()" class="btn btn-store btn-block">Nachricht Senden</button></p>

                </div>
            </div>
        </form>
    </div>
</section>

</body>
</html>