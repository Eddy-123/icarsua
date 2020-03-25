<?php
session_start();
include("includes/db.php");
include("functions/functions.php");

if(isset($_GET['product_id'])){
    $product_id = $_GET['product_id'];
    $get_product = "SELECT * FROM products WHERE product_id = $product_id";
    $run_product = mysqli_query($con, $get_product);
    $row_product = mysqli_fetch_array($run_product);
    $product_category_id = $row_product['product_category_id'];
    $cat_id = $row_product['cat_id'];
    $product_title = $row_product['product_title'];
    $product_img1 = $row_product['product_img1'];
    $product_img2 = $row_product['product_img2'];
    $product_img3 = $row_product['product_img3'];
    $product_desc = $row_product['product_desc'];
    $product_price = $row_product['product_price'];

    $get_category = "SELECT * FROM categories WHERE cat_id = $cat_id";
    $run_category = mysqli_query($con, $get_category);
    $row_category = mysqli_fetch_array($run_category);
    $cat_title = $row_category['cat_title'];
    $cat_desc = $row_category['cat_desc'];

}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Icarsua</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" id="bootstrap-css">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    <script>
      var myobj = jQuery('input.form-control');
      myobj.on('keyup keypress blur change input', function() {
        var messg = ($(this).data('invalidMessage'));
        if (this.validity.typeMismatch) {
          this.setCustomValidity(messg);
        } else {
          this.setCustomValidity('');
        }
      });
    </script>

  </head>
  <body>

    <div class="" id="top"><!-- #top begin -->

      <div class="container"><!-- container begin -->

        <div class="col-md-6"><!-- col-md-6 begin -->
          <p><?= isset($_SESSION['customer_name']) ? $_SESSION['customer_name'] : 'Icarsua' ?></p>
        </div><!-- col-md-6 end -->

        <div class="col-md-6"><!-- col-md-6 begin -->

          <ul class="menu">
            <li> <a href="customer_registration.php">Inscription</a> </li>
            <li>
                <?= isset($_SESSION['customer_email']) ? "<a href='logout.php'>Déconnexion</a>" : "<a href='checkout.php'>Connexion</a>" ?>
              </li>
            <li> <a class="btn btn-success" href="cart.php"><i class="glyphicon glyphicon-shopping-cart"> <?= items(); ?></i></a> </li>
          </ul>

        </div><!-- col-md-6 end -->

      </div><!-- container end -->

    </div><!-- #top end -->

    <nav class="navbar navbar-default" id="navbar">
    
      <div class="container">

        <a href="index.php" class="navbar-brand">LOGO</a>
        
        <div class="" id="navigation">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Acceuil</a></li>
              <li class=""><a href="shop.php">Boutique</a></li>
              <li><a href="customer/my_account.php">Compte</a></li>
              <li><a href="cart.php">Panier</a></li>
              <li><a href="contact.php">Contact</a></li>              
            </ul>
          
            <!-- Search form -->
            <form class="form-inline md-form form-sm" action="results.php" method="get">
              <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Recherche"
                aria-label="Search" required>
                <button type="submit" ><i type="submit" class="fa fa-search" aria-hidden="true"></i></button>
            </form>
          
          </div>

          </div>
        </div>

      </div>
    
    </nav>
