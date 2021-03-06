<?php 
include("includes/db.php");
include("includes/header.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Icarsua</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      
    
    
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js" defer></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" defer></script>
    <link rel="stylesheet" href="./css/style.css">
    <script type="text/javascript" src="js/index.js" defer></script>
  </head>
  <body>

    <?php /*<div class="" id="top"><!-- #top begin -->

      <div class="container"><!-- container begin -->

        <div class="col-md-6"><!-- col-md-6 begin -->
          <p>Icarsua</p>
        </div><!-- col-md-6 end -->

        <div class="col-md-6"><!-- col-md-6 begin -->

          <ul class="menu">
            <li> <a href="customer_registration.php">Inscription</a> </li>
            <li> <a href="checkout.php">Connection</a> </li>
            <li> <a href="cart.php">Panier</a> </li>
          </ul>

        </div><!-- col-md-6 end -->

      </div><!-- container end -->

    </div><!-- #top end -->

    <nav class="navbar navbar-default" id="navbar">
    
      <div class="container">

        <a href="index.php" class="navbar-brand">LOGO</a>
        
        <div class="" id="navigation">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Acceuil</a></li>
              <li><a href="shop.php">Boutique</a></li>
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
    
    </nav> */?>


  <section class="section-white" id="slider">
    <div class="container">

      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <?php
            $get_slides = "SELECT * FROM slider LIMIT 0, 1";
            $run_slides = mysqli_query($con, $get_slides);

            while($row_slides = mysqli_fetch_array($run_slides)){

              $slide_name = $row_slides['slide_name'];
              $slide_image = $row_slides['slide_image'];

              echo "
                <div class='item active'>
                <img src='admin_area/slides_images/$slide_image' alt='...'>
                </div>              
              ";
            }


            $get_slides = "SELECT * FROM slider LIMIT 1, 2";
            $run_slides = mysqli_query($con, $get_slides);

            while($row_slides = mysqli_fetch_array($run_slides)){

              $slide_name = $row_slides['slide_name'];
              $slide_image = $row_slides['slide_image'];

              echo "
                <div class='item'>
                <img src='admin_area/slides_images/$slide_image' alt='...'>
                </div>              
              ";
            }

          ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>

    </div>
  </section>    
  
  <h2>Les nouvelles voitures</h2>
  <div class="container-fluid" id="content">
    <div class="row">

      <?php
        getProducts();
      ?>
    </div>
  </div>

  <?php include("includes/footer.php"); ?>
  </body>
</html>
