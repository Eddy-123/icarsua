<?php 
include("includes/db.php");
include("includes/header.php");
?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
    </nav>

    <div class="col-md-3">
        <?php include("includes/sidebar.php"); ?>  
    </div>    

    <div class="col-md-9">
        <center>        
            <h3 class="text-muted">
                N'hésitez pas à nous contacter !
            </h3>
            <form action="contact.php" method="post">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Sujet</label>
                    <input type="text" class="form-control" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" name="submit">Envoyer</button>
                </div>
            </form>
            <?php  
              if (isset($_POST['submit'])) {
                
                $sender_name = $_POST['name'];
                $sender_email = $_POST['email'];
                $sender_subject = $_POST['subject'];
                $sender_message = $_POST['message'];
                
                $receiver_email = "adegnandjoueddy12@gmail.com";

                mail($receiver_email, $sender_name, $sender_subject, $sender_message, $sender_email);

                //For auto reply to sender
                $email = $_POST['email'];
                $subject = "Bienvenue sur le site";
                $message = "Merçi de nous contacter. Nous vous répondons dès que possible";
                $from = "adegnandjoueddy12@gmail.com";

                mail($email, $subject, $message, $from);

                echo "<h2>Votre message à été envoyé avec succès</h2>";
              }

            ?>
        </center>
    </div>

    <?php include("includes/footer.php"); ?>
  </body>
</html>
