<?php
  include("includes/header.php")
?>


<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Boutique</li>
            <li><a href="shop.php?product_category_id=<?= $product_category_id ?>"><?= $cat_title ?></a></li>
            <li><?= $product_title ?></li>
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
                        <img class="img-responsive" src="admin_area/product_images/<?= $product_img1 ?>" alt="" style="width:100%;">
                    </div>

                    <div class="item">
                        <img class="img-responsive" src="admin_area/product_images/<?= $product_img2 ?>" alt="" style="width:100%;">
                    </div>
                    
                    <div class="item">
                        <img class="img-responsive" src="admin_area/product_images/<?= $product_img3 ?>" alt="" style="width:100%;">
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
                <h1 class="text-center"><?= $product_title ?></h1>
                
                <?php add_cart(); ?>

                <form action="details.php?add_cart=<?= $product_id ?>" class="form-horizontal" method="post">
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

                  <center class="price"><?= $product_price ?>£</center>
                  <center class="center-text"><a href="">Ajouter</a></center>

                </form>
              </div>

              <div class="row">
                <div class="col-xs-4">
                  <a href=""><img src="admin_area/product_images/<?= $product_img1 ?>" alt="" class="img-responsive"></a>
                </div>
              
                <div class="col-xs-4">
                  <a href=""><img src="admin_area/product_images/<?= $product_img2 ?>" alt="" class="img-responsive"></a>
                </div>
              
                <div class="col-xs-4">
                  <a href=""><img src="admin_area/product_images/<?= $product_img3 ?>" alt="" class="img-responsive"></a>
                </div>
              
              </div>
            </div>


        </div>

        <div id="details">
          <h4><?= $product_title ?></h4>
          <p>
            <?= $product_desc ?>
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

          <?php
            $get_products = "SELECT * FROM products ORDER BY product_id DESC LIMIT 0, 3"; // ORDER BY id product_id DESC LIMIT '$start_from', '$per_page'
            $run_products = mysqli_query($con, $get_products);
            
            while($row_products = mysqli_fetch_array($run_products)){
              $product_id = $row_products['product_id'];
              $product_title = $row_products['product_title'];
              $product_price = $row_products['product_price'];
              $product_img1 = $row_products['product_img1'];
  
              echo "
              <div class='col-sm-4'>
              <div class='product'>
                  <a href='details.php?product_id=$product_id'>
                  <img class='img-responsive same-height' src='admin_area/product_images/$product_img1' alt='produit'>
                  </a>
                  <div class='text'>
                  <h3>
                      <a href='details.php?product_id=$product_id'>$product_title</a>
                  </h3>
                  <p class='price'>
                      $product_price  
                  </p>
                  </div>
              </div>
              </div>
          ";
            
            }
        
          ?>
        </div>
    </div>

    <?php include("includes/footer.php"); ?>
  </body>
</html>
