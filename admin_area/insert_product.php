<?php
include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insérer les voitures</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      
    
    
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js" defer></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" defer></script>
    <link rel="stylesheet" href="./css/style.css">
    <script type="text/javascript" src="js/index.js" defer></script>
</head>
<body>
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">Tableau de bord / Insérer les voitures</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Insérer une voiture</h3>
                </div>
                <div class="panel-body">
                    <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Titre de la voiture</label>
                            <div class="col-md-6">
                                <input name="product-title" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Categorie de la voiture</label>
                            <div class="col-md-6">
                                <select name="product_cat" id="" class="form-control">
                                    <option value="">Sélectionner une catégorie de voiture</option>
                                    <?php
                                        $get_p_cats = "SELECT * FROM product_categories";
                                        $run_p_cats = mysqli_query($con, $get_p_cats);
                                    ?>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>