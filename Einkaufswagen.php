<?php
session_start();
require_once __DIR__ . '/config.php';

if(!isset($_SESSION['userid'])) {
  die('Bitte zuerst <a href="Login.php">einloggen</a>');
}



if(isset($_POST["add_to_cart"]))
{
    if(isset($_SESSION["shopping_cart"]))
    {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id'               =>     $_GET["id"],
                'item_name'               =>     $_POST["hidden_name"],
                'item_preis'          =>     $_POST["hidden_preis"],
                'item_quantity'          =>     $_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
            echo '<script>alert("Item Already Added")</script>';
            echo '<script>window.location="Einkaufswagen.php"</script>';
        }
    }
}
if(isset($_POST["add_to_mysql"]))
{
    if(isset($_SESSION["shopping_cart"]))

    {
        $values[] = newrelic_add_custom_parameter();
        foreach($_SESSION["shopping_cart"] as $keys => $count)
        {
            $id = mysqli_real_escape_string($connect, $value[0]);
            $quanity = mysqli_real_escape_string($connect, $value[2]);
            $values[] = "('$id', '$quanity')";
        }
        $bestellungsid = +1;
        $sql = "INSERT INTO bestellungen (id, quantity ) VALUES ";
        $sql .= implode(', ', $values[]);
        mysqli_query($connect, $sql);


    }
}
if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_id"] == $_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="Einkaufswagen.php"</script>';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

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
    
    <!--SCRYPTS -->
    <script type="text/javascript" src="plugins/jquery/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="plugins/waypoints/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="plugins/angular/angular.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/owlcarousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="plugins/waitforimages/jquery.waitforimages.min.js"></script>
    <script type="text/javascript" src="js/hero-slider.js"></script>
    <script type="text/javascript" src="js/project-slider.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/app.js"></script>

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
                <li><a href= "UeberUns.html "class="external">ÜberUns</a></li>
                <li><a href= "Einkaufswagen.php" class="external"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Einkaufswagen</a></li>
                <li><a href= "Kontakt.html" class="external"><i class="fa fa-envelope-o" aria-hidden="true"></i> Kontakt</a></li>

            </ul>
        </div>

    </div>
</div>

<br/>
<div class="container" >
    <br />
    <h3 align="center">Shoppingcart</h3><br />

    <?php
    $query = "SELECT * FROM produkte ORDER BY id ASC";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            ?>

            <div class="col-md-4">
                <form method="post" action="Einkaufswagen.php?action=add&id=<?php echo $row["id"]; ?>">
                    <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                        <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />
                        <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                        <h4 class="text-danger">$ <?php echo $row["preis"]; ?></h4>
                        <input type="text" name="quantity" class="form-control" value="1" />
                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                        <input type="hidden" name="hidden_preis" value="<?php echo $row["preis"]; ?>" />
                        <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                    </div>
                </form>
            </div>
            <?php
        }
    }
    ?>
    <div class="col-md-4">
        <form method="post" action="Einkaufswagen.php?action=add&id=<?php echo $row["id"]; ?>">
            <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />
                <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                <h4 class="text-danger">$ <?php echo $row["preis"]; ?></h4>
                <input type="text" name="quantity" class="form-control" value="1" />
                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                <input type="hidden" name="hidden_preis" value="<?php echo $row["preis"]; ?>" />
                <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
            </div>
        </form>
    </div>


    <div class="col-md-4">
        <form method="post" action="Einkaufswagen.php?action=add&id=<?php echo $row["id"]; ?>">
            <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />
                <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                <h4 class="text-danger">$ <?php echo $row["preis"]; ?></h4>
                <input type="text" name="quantity" class="form-control" value="1" />
                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                <input type="hidden" name="hidden_preis" value="<?php echo $row["preis"]; ?>" />
                <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
            </div>
        </form>
    </div>



    <div style="clear:both"></div>

    <br/>
    <h3>Order Details</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th width="40%">Item Name</th>
                <th width="10%">Anzahl</th>
                <th width="20%">Preis</th>
                <th width="15%">Total</th>
                <th width="5%">Aktion</th>
            </tr>
            <?php
            if(!empty($_SESSION["shopping_cart"]))
            {
            $total = 0;
            foreach($_SESSION["shopping_cart"] as $keys => $values)
            {
            ?>
            <tr>
                <td><?php echo $values["item_name"]; ?></td>
                <td><?php echo $values["item_quantity"]; ?></td>
                <td>$ <?php echo $values["item_preis"]; ?></td>
                <td>$ <?php echo number_format($values["item_quantity"] * $values["item_preis"], 2); ?></td>
                <td><a href="Einkaufswagen.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
            </tr>
            <?php
            $total = $total + ($values["item_quantity"] * $values["item_preis"]);
            }
            ?>
            <tr>
                <td colspan="3" align="right">Total</td>
                <td align="right">$ <?php echo number_format($total, 2); ?></td>
                <td><button name="submit" name="add_to_mysql" type="submit" class="btn btn-store btn-block">Bestellung abschicken</button></p></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>
<br/>

</body>
</html>