<?php
include("functions/functions.php");
include("includes/header.php");
?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Acceuil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Compte</li>
        </ol>
    </nav>

    <div class="col-md-3">
        <?php include("includes/sidebar.php"); ?>  
    </div>    

    <div class="div col-md-9">
    
      <?php
        if(isset($_GET['my_orders'])){
          include("my_orders.php");
        }

        if(isset($_GET['pay_offline'])){
          include("pay_offline.php");
        }

        if(isset($_GET['edit_account'])){
          include("edit_account.php");
        }

        if(isset($_GET['change_pass'])){
          include("change_pass.php");
        }

        if(isset($_GET['delete_account'])){
          include("delete_account.php");
        }
      ?>

    </div>
    
    <?php include("../includes/footer.php"); ?>
  </body>
</html>
