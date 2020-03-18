<?php 
include("includes/db.php");
include("includes/header.php");
?>

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
        <?php
          $ip_address = getRealIpUser();
          $get_cart = "SELECT * FROM cart WHERE ip_address='$ip_address';";
          $run_cart = mysqli_query($db, $get_cart);
          $count = mysqli_num_rows($run_cart);
        ?>
        <p class="text-muted">Vous avez choisi <?= $count ?> voitures</p>
        <div class="table responsive">
        
            <table class="table table-striped">
            <thead>
                <tr>
                <th colspan="2">Voiture</th>
                <th >Quantité</th>
                <th >Prix unitaire</th>
                <th >Caractéristique</th>                
                <th >Supprimer</th>
                <th >Total partiel</th>
                </tr>
            </thead>
            <tbody>
              <?php 
                $total = 0;
                while($row_cart=mysqli_fetch_array($run_cart)){
                  $product_id = $row_cart['product_id'];
                  $quantity = $row_cart['quantity'];
                  $size = $row_cart['size'];

                  $get_products = "SELECT * FROM products WHERE product_id='$product_id';";
                  $run_products = mysqli_query($db, $get_products);

                  while($row_products = mysqli_fetch_array($run_products)){
                    $product_title = $row_products['product_title'];
                    $product_img1 = $row_products['product_img1'];
                    $product_price = $row_products['product_price'];
                    $sub_total = $product_price * $quantity;
                    $total += $sub_total;
                  }
              ?>
                <tr>
                <td class="">
                    <img src="admin_area/product_images/<?= $product_img1 ?>" class="img-responsive"  alt="">
                </td>
                <td><a href="details.php?product_id=<?= $product_id ?>"><?= $product_title ?></a></td>
                <td><?= $quantity ?></a></td></td>
                <td><?= $product_price ?></td>
                <td><?= $size ?></td>
                <td>
                  <input type="checkbox" name="remove[]" value="<?= $product_id ?>" />
                </td>
                <td><?= $sub_total ?></td>
                </tr>
              <?php } ?>
            </tbody>
            <tfoot>
              <th colspan="5">Total</th>
              <th colspan="2"><?= $total ?></th>
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
      
      <?php
        function update_cart(){
          global $db;
          //echo "update cart";
          if(isset($_POST['update'])){
            foreach($_POST['remove'] as $remove_id){
              $delete_product = "DELETE FROM cart WHERE product_id='$remove_id';";
              $run_delete = mysqli_query($db, $delete_product);
              //var_dump($run_delete);
              if($run_delete){
                echo "<script>window.open('cart.php','_self')</script>";
              }
            }
          }
        }

        echo @$up_cart = update_cart();
      ?>

      <div class="">
          <h3>Suggestions de voitures</h3>

          <?php
            $get_products = "SELECT * FROM products ORDER BY RAND() DESC LIMIT 0, 3"; // ORDER BY id product_id DESC LIMIT '$start_from', '$per_page'
            $run_products = mysqli_query($con, $get_products);
            
            while($row_products = mysqli_fetch_array($run_products)){
              $product_id = $row_products['product_id'];
              $product_title = $row_products['product_title'];
              $product_price = $row_products['product_price'];
              $product_img1 = $row_products['product_img1'];
  
              echo "
              <div class='col-sm-3'>
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

    <div class="col-md-3">
    <h1>Bilan</h1>
    <p class="text-muted">Détail de vos achats</p>
      <div class="table-responsive">
        <table class="table">
          <tbody>
            <tr>
              <td>Commandes</td>
              <th><?= $total ?></th>
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
              <td><?= $total ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</div>
    
    
    <?php include("includes/footer.php"); ?>
  </body>
</html>
