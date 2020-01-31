<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Icarsua</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      
    
    
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    
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
              <li><a href="index.php">Acceuil</a></li>
              <li class="active"><a href="shop.php">Boutique</a></li>
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

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Boutique</li>
        </ol>
    </nav>
<div class="row">
    <div class="col-md-3">
        <?php include("includes/sidebar.php"); ?>  
    </div>    


    <div class="col-md-9">
        <div class="row" id="productMain">
            <div class="col-md-6">
                <h2></h2>  
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
                        <img class="img-responsive" src="admin_area/product_images/product-1.png" alt="" style="width:100%;">
                    </div>

                    <div class="item">
                        <img class="img-responsive" src="admin_area/product_images/product-2.png" alt="" style="width:100%;">
                    </div>
                    
                    <div class="item">
                        <img class="img-responsive" src="admin_area/product_images/product-1.png" alt="" style="width:100%;">
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
            </div>
            
            <div class="col-md-6">
              <div class="box">
                <h1 class="text-center">Honda</h1>
                <form action="details.php" class="form-horizontal">
                  <div class="form-group">
                    <label for="" class="col-md-5 control-label">Quantité</label>
                    <div class="col-md-7">
                      <select name="product_qty" id="" class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="" class="col-md-5 control-label">Taille</label>
                    <div class="col-md-7">
                      <select name="product_size" id="" class="form-control">
                        <option>Caractéristique</option>
                        <option>Petite</option>
                        <option>Moyenne</option>
                        <option>Grande</option>
                      </select>
                    </div>
                  </div>

                  <center class="price">500£</center>
                  <center class="center-text"><a href="">Ajouter</a></center>

                </form>
              </div>

              <div class="row">
                <div class="col-xs-4">
                  <a href=""><img src="admin_area/product_images/product-1.png" alt="" class="img-responsive"></a>
                </div>
              
                <div class="col-xs-4">
                  <a href=""><img src="admin_area/product_images/product-2.png" alt="" class="img-responsive"></a>
                </div>
              
                <div class="col-xs-4">
                  <a href=""><img src="admin_area/product_images/product-3.png" alt="" class="img-responsive"></a>
                </div>
              
              </div>
            </div>


        </div>

        <div id="details">
          <h4>Honda</h4>
          <p>
            Honda Motor Co., Ltd, ou plus simplement Honda,
             est un constructeur automobile. C'est également un constructeur
              de motocyclettes, d'ATVs, de scooters, d'avions d'affaires, 
              de générateurs électriques, de moteurs de bateaux et d'équipements
               de jardinage et de bricolage.
          </p>
          <h4>Autres caractéristiques</h4>
          <ul>
            <li>Petite</li>
            <li>Moyenne</li>
            <li>Grande</li>
          </ul>
          <hr>
        </div>

        <div class="row">
          <h3>Suggestions de voitures</h3>

          <div class="col-sm-3">
            <div class="product">
              <a href="details.php">
              <img class="img-responsive" src="admin_area/product_images/product-1.png" alt="product 1">
              </a>
              <div class="text">
                <h3>
                  <a href="details.php">Honda</a>
                </h3>
                <p class="price">
                  500£   
                </p>
              </div>
            </div>
          </div>


          <div class="col-sm-3">
            <div class="product">
              <a href="details.php">
              <img class="img-responsive" src="admin_area/product_images/product-1.png" alt="product 1">
              </a>
              <div class="text">
                <h3>
                  <a href="details.php">Honda</a>
                </h3>
                <p class="price">
                  500£   
                </p>
              </div>
            </div>
          </div>


          <div class="col-sm-3">
            <div class="product">
              <a href="details.php">
              <img class="img-responsive" src="admin_area/product_images/product-1.png" alt="product 1">
              </a>
              <div class="text">
                <h3>
                  <a href="details.php">Honda</a>
                </h3>
                <p class="price">
                  500£   
                </p>
              </div>
            </div>
          </div>


          <div class="col-sm-3">
            <div class="product">
              <a href="details.php">
              <img class="img-responsive" src="admin_area/product_images/product-1.png" alt="product 1">
              </a>
              <div class="text">
                <h3>
                  <a href="details.php">Honda</a>
                </h3>
                <p class="price">
                  500£   
                </p>
              </div>
            </div>
          </div>
        </div>
    </div>

    <?php include("includes/footer.php"); ?>
  </body>
</html>
