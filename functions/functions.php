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
echo $product_title;
        echo "
            <div class='col-sm-4'>
            <div class='product'>
                <a href='details.php?product_id=$product_id'>
                <img class='img-responsive' src='admin_area/product_images/$product_img1' alt='produit'>
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
        ";
    }

}

?>