<h1 align="center">Modifier mon compte</h1>


<form action="" method="post" enctype="multipart/form-data">
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
        <img src="customer_images/sasha.png" alt="" class="img-responsive">
    </div>
    <div class="text-center">
        <button type="submit" name="update">Mettre à jour</button>
    </div>
 </form>

