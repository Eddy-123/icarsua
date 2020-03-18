<?php
include("includes/header.php");
?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Boutique</li>
        </ol>
    </nav>

    <div class="col-md-3">
        <?php include("includes/sidebar.php"); ?>  
    </div>    

    <div class="col-md-9">
    
      <p>Bienvenue dans la boutique</p>

      <div class="row">
      <?php
        if(!isset($_GET['product_category_id'])){
          $per_page = 6;
          if(isset($_GET['page'])){
            $page = $_GET['page'];
          }else{
            $page = 1;
          }
          
          $start_from = ($page - 1) * $per_page;
          $get_products = "SELECT * FROM products"; // ORDER BY id product_id DESC LIMIT '$start_from', '$per_page'
          $run_products = mysqli_query($db, $get_products);
          
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
      
        
        <center>
          <ul class="pagination">
            <?php

              $query = "SELECT * FROM products";
              $result = mysqli_query($db, $query);
              $total_records = mysqli_num_rows($result);

              $total_pages = ceil($total_records / $per_page);

              echo "
                <li><a href='shop.php?page=1'>Première page</a></li>
              ";

              for($i = 1; $i <= $total_pages; $i++){
                echo "
                <li><a href='shop.php?page=".$i."'>".$i."</a></li>
              ";
              }

              echo "
                <li><a href='shop.php?page=".$total_pages."'>Dernière page</a></li>
              ";

               }
              ?>
          </ul>
        </center>

        <div class="row">
               <?php
                getCategoryProducts();
               ?>
        </div>
    <?php include("includes/footer.php"); ?>
  </body>
</html>
