<h1 align="center">Modifier le mot de passe</h1>


<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="old_pass">Ancien mot de passe</label>
        <input type="text" class="form-control" name="old_pass" required>
    </div>
    <div class="form-group">
        <label for="new_pass">Nouveau mot de passe</label>
        <input type="password" class="form-control" name="new_pass" required>
    </div>
    <div class="form-group">
        <label for="subject">Confirmer le nouveau mot de passe</label>
        <input type="password" class="form-control" name="new_pass_again" required>
    </div>
    
    <div class="text-center">
        <button type="submit" name="submit">Mettre à jour</button>
    </div>
 </form>

