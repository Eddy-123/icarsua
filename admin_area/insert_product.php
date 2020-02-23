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

                                        while($row_p_cats = mysqli_fetch_array($run_p_cats)){
                                            $p_cat_id = $row_p_cats['p_cat_id'];
                                            $p_cat_title = $row_p_cats['p_cat_title'];

                                            echo "
                                                <option value='$p_cat_id'>$p_cat_title</option>
                                            ";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Categorie</label>
                            <div class="col-md-6">
                                <select name="product_cat" id="" class="form-control">
                                    <option value="">Sélectionner une catégorie</option>
                                    <?php
                                        $get_cat = "SELECT * FROM categories";
                                        $run_cat = mysqli_query($con, $get_cat);

                                        while($row_cat = mysqli_fetch_array($run_cat)){
                                            $cat_id = $row_cat['cat_id'];
                                            $cat_title = $row_cat['cat_title'];

                                            echo "
                                                <option value='$cat_id'>$cat_title</option>
                                            ";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Première image de la voiture</label>
                            <div class="col-md-6">
                                <input name="product_img1" type="file" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Première image de la voiture</label>
                            <div class="col-md-6">
                                <input name="product_img1" type="file" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Deuxième image de la voiture</label>
                            <div class="col-md-6">
                                <input name="product_img2" type="file" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Troisième image de la voiture</label>
                            <div class="col-md-6">
                                <input name="product_img3" type="file" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Prix de la voiture</label>
                            <div class="col-md-6">
                                <input name="product_price" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Mots clés de la voiture</label>
                            <div class="col-md-6">
                                <input name="product_keywords" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Description de la voiture</label>
                            <div class="col-md-6">
                                <textarea name="product_desc" rows="8" cols="80" class="form-control"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
