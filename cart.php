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
              <li><a href="shop.php">Boutique</a></li>
              <li><a href="checkout.php">Compte</a></li>
              <li class="active"><a href="cart.php">Panier</a></li>
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

    <nav aria-label="breadcrumb" class="col-md-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Panier</li>
        </ol>
    </nav>

<div class="row">
    <div class="col-md-9" id="cart">
      <form action="cart.php" method="post">
      <h1>Panier</h1>
        <div class="table responsive">
        
            <table class="table table-striped">
            <thead>
                <tr>
                <th colspan="2">Voiture</th>
                <th >Quantité</th>
                <th >Prix unitaire</th>
                <th >Taille</th>
                <th >Supprimer</th>
                <th >Total partiel</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="">
                    <img src="admin_area/product_images/product-2.png" class="img-responsive"  alt="">
                </td>
                <td><a href="#">Honda</a></td>
                <td>2</td>
                <td>500£</td>
                <td>Grande</td>
                <td>
                  <input type="checkbox" name="remove[]">
                </td>
                <td>1000£</td>
                </tr>
                <tr>
            </tbody>
            <tbody>
                <tr>
                <td class="">
                    <img src="admin_area/product_images/product-1.png" class="img-responsive"  alt="">
                </td>
                <td><a href="#">Honda</a></td>
                <td>2</td>
                <td>500£</td>
                <td>Grande</td>
                <td>
                  <input type="checkbox" name="remove[]">
                </td>
                <td>1000£</td>
                </tr>
                <tr>
            </tbody>
            <tbody>
                <tr>
                <td class="">
                    <img src="admin_area/product_images/product-3.png" class="img-responsive"  alt="">
                </td>
                <td><a href="#">Honda</a></td>
                <td>2</td>
                <td>500£</td>
                <td>Grande</td>
                <td>
                  <input type="checkbox" name="remove[]">
                </td>
                <td>1000£</td>
                </tr>
                <tr>
            </tbody>
            <tbody>
                <tr>
                <td class="">
                    <img src="admin_area/product_images/product-2.png" class="img-responsive"  alt="">
                </td>
                <td><a href="#">Honda</a></td>
                <td>2</td>
                <td>500£</td>
                <td>Grande</td>
                <td>
                  <input type="checkbox" name="remove[]">
                </td>
                <td>1000£</td>
                </tr>
                <tr>
            </tbody>

            <tfoot>
              <th colspan="5">Total</th>
              <th colspan="2">1000£</th>
            </tfoot>
            </table>
        </div>

        <div class="">
          <div class="pull-left">
              <button type="submit" name="update">
                Actualiser
              </button>              
          </div>
          <div class="pull-right">            
            <button class="pull-left">
              <a href="checkout.php">Payement</a>
            </button>
          </div>
          
        </div>
      </form>
      <br><br>
      <div class="">
      
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

    <div class="col-md-3">
    <h1>Bilan</h1>
    <p class="text-muted">Détail de vos achats</p>
      <div class="table-responsive">
        <table class="table">
          <tbody>
            <tr>
              <td>Commandes</td>
              <th>1000£</th>
            </tr>
            <tr>
              <td>Livraison</td>
              <td>0£</td>
            </tr>
            <tr>
              <td>Tax</td>
              <td>0£</td>
            </tr>
            <tr>
              <td>Total</td>
              <td>1000£</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</div>
    
    
    <?php include("includes/footer.php"); ?>
  </body>
</html>
