<?php 
session_start();
include("includes/header.php"); 
?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Inscription</li>
        </ol>
    </nav>

    <div class="col-md-3">
        <?php include("includes/sidebar.php"); ?>  
    </div>    

    <div class="col-md-9">
        <center>        
            <h3 class="text-muted">
                Inscription
            </h3>
        </center>
            <form action="customer_registration.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="c_name">Votre nom</label>
                    <input type="text" class="form-control" name="c_name" required>
                </div>
                <div class="form-group">
                    <label for="email">Votre Email</label>
                    <input type="email" class="form-control" name="c_email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Votre mot de passe</label>
                    <input type="password" class="form-control" name="c_pass" required>
                </div>
                <div class="form-group">
                    <label for="c_country">Votre pays</label>
                    <input type="text" class="form-control" name="c_country" required>
                </div>
                <div class="form-group">
                    <label for="c_city">Votre ville</label>
                    <input type="text" class="form-control" name="c_city" required>
                </div>
                <div class="form-group">
                    <label for="c_contact">Votre contact</label>
                    <input type="text" class="form-control" name="c_contact" required>
                </div>
                <div class="form-group">
                    <label for="c_address">Votre adresse</label>
                    <input type="text" class="form-control" name="c_address" required>
                </div>
                <div class="form-group">
                    <label for="c_image">Votre photo de profil</label>
                    <input type="file" class="form-control form-height-custom" name="c_image" required>
                </div>
                <div class="text-center">
                    <button type="submit" name="register">S'inscrire</button>
                </div>
            </form>
        
    </div>

    <?php include("includes/footer.php"); ?>
  </body>
</html>

<?php 
    
    if (isset($_POST['register'])) {
        $c_name = $_POST['c_name']; 
        $c_email = $_POST['c_email'];
        $c_pass = $_POST['c_pass'];
        $c_country = $_POST['c_country']; 
        $c_city = $_POST['c_city'];
        $c_contact = $_POST['c_contact'];
        $c_address = $_POST['c_address'];
        $c_image = $_FILES['c_image']['name'];
        $c_image_tmp = $_FILES['c_image']['tmp_name'];
        $c_ip = getRealIpUser();

        move_uploaded_file($c_image_tmp, "customer/customer_images/$c_image");

        $insert_customer = "INSERT INTO customers(customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, customer_address, customer_image, customer_ip) VALUES('$c_name', '$c_email', '$c_pass', '$c_country', '$c_city', '$c_contact', '$c_address', '$c_image', '$c_ip');";

        $run_customer = mysqli_query($db, $insert_customer);

        $select_cart = "SELECT * FROM cart WHERE ip_address='$c_ip'";

        $run_cart = mysqli_query($db, $select_cart);

        $check_cart = mysqli_num_rows($run_cart);

        if ($check_cart > 0) {
            $_SESSION['customer_email'] = $c_email;
            $_SESSION['customer_name'] = $c_name;
            echo "<script>alert('Inscription éffectuée avec succès !')</script>";
            echo "<script>window.open('checkout.php', '_self')</script>";
        }else{

            $_SESSION['customer_email'] = $c_email;
            $_SESSION['customer_name'] = $c_name;
            echo "<script>alert('Inscription éffectuée avec succès !')</script>";
            echo "<script>window.open('index.php', '_self')</script>";
        }
    }

 ?>