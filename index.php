<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Icarsua</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js" defer></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" defer></script>
    <link rel="stylesheet" href="./css/style.css">
    <script type="text/javascript" src="js/index.js" defer></script>
  </head>
  <body>

    <div class="" id="top"><!-- #top begin -->

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
              <li><a href="checkout.php">Compte</a></li>
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

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="admin_area/slides_images/slide-1.jpg" alt="Los Angeles" style="width:100%">
        </div>

        <div class="item">
          <img src="admin_area/slides_images/slide-1.jpg" alt="Chicago" style="width:100%">
        </div>

        <div class="item">
          <img src="admin_area/slides_images/slide-1.jpg" alt="New York" style="width:100%">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>    
    
  </body>
</html>