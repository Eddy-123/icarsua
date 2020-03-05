<?php

$db = mysqli_connect("localhost", "root", "", "icarsua");

function getProducts(){
    global $db;

    $get_products = "SELECT * FROM products ORDER BY product_id DESC"; 
    $run_products = mysqli_query($db, $get_products);
    if (!$run_products) {
        printf("Error: %s\n", mysqli_error($db));
        exit();
    }

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

}

function getProductCategories(){
    global $db;

    $get_product_categories = "SELECT * FROM product_categories";
    
    $run_product_categories = mysqli_query($db, $get_product_categories);

    while($row_product_categories = mysqli_fetch_array($run_product_categories)){
        $product_category_id = $row_product_categories['product_category_id'];
        $product_category_title = $row_product_categories['product_category_title'];
        $product_category_description = $row_product_categories['product_category_description'];
        
        echo "            
            <li class='list-group-item'><a href='shop.php?product_category_id=$product_category_id'>$product_category_title</a></li>
        ";
    }

}

function getCategoryProducts(){
    global $db;
    if(isset($_GET['product_category_id'])){
        $product_category_id = $_GET['product_category_id'];
        $get_product_category = "SELECT * FROM product_categories WHERE product_category_id=$product_category_id";
        $run_product_category = mysqli_query($db, $get_product_category);
        $row_product_category = mysqli_fetch_array($run_product_category);
        $product_category_title = $row_product_category['product_category_title'];
        $product_category_description = $row_product_category['product_category_description'];
        
        $get_products = "SELECT * FROM products WHERE product_category_id=$product_category_id";
        $run_products = mysqli_query($db, $get_products);
        $count = mysqli_num_rows($run_products);

        if($count==0){
            echo "
                <h1>Aucune voiture correspondante</h1>
            ";
        } else {
            echo "<h1>".$product_category_title."</h1>";
            echo $product_category_description;

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
        
        }
    }
}
?>