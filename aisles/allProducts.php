<?php

if(!isset($_SESSION)) {
    session_start();
}

$products = [];
if (($handle = fopen("../backstore/database/products.csv", "r")) !== FALSE) {
    while (($row = fgetcsv($handle)) !== FALSE) {
        array_push($products, $row);
    }
    fclose($handle);
} else {
    $error = "Something wrong occurred. Cannot continue!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta content='maximum-scale=1.0, initial-scale=1.0, width=device-width' name='viewport'>
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="icon" type="image/png" href="/assets/images/Favicon/favicon-16x16.png"/>

    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@3.6.15/dist/css/uikit.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!--    <link rel="stylesheet" type="text/css"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../assets/js/aisles.js"></script>

    <meta charset="UTF-8">
    <title>All Products</title>
</head>
<body>

<?php include ('../header.php')?>


    <div class="jumbotron jumbotron-fluid allProductBg">
        <div class="container whiteBorder">
            <h1 class="display-4 centerWhite">All Products</h1>
        </div>
    </div>

    <div class="all">


        <!-- filter section-->

        <div class="filter text">
            <p>
                <b><span class="font-word">Filter</span></b>
            </p>
            <p class="filterCategory">
                <a class="filter-option current" href="allProducts.php">Show all</a>
            </p>
            <p class="filterCategory">
                <a class="filter-option" href="weeklyDeals.php">Hot deal</a>
            </p>
            <p class="filterCategory">
                <a class="filter-option" href="fruitsVeg.php">Fruits and Vegetables</a>
            </p>
            <p class="filterCategory">
                <a class="filter-option" href="dairyAndEggs.php">Dairy and Eggs</a>
            </p>
            <p class="filterCategory">
                <a class="filter-option" href="meatPoultry.php">Meat and Poultry</a>
            </p>
            <p class="filterCategory">
                <a class="filter-option" href="breadAndBakery.php">Bread and Bakery</a>
            </p>
            <p class="filterCategory">
                <a class="filter-option" href="beverages.php">Beverages</a>
            </p>
            <p class="filterCategory">
                <a class="filter-option" href="snacks.php">Snacks</a>
            </p>
        </div>


        <!-- Product display -->

        <div class="container mt-5 mb-5">
            <div class="row">

<?php
    foreach($products as $product):
?>
                <div class="col col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="product card-aisle rounded uk-card-default card product">
                        <a class="productLink" href="Products/product.php?id=<?php echo $product[0] ?>">
                            <img class="productImage" alt="<?php echo $product[1] ?>" src="../assets/images/articles/<?php echo $product[5] ?>">
                        </a>
                        <div class="card-body productDetails">
                            <p class="productName"><?php echo $product[1] ?></p>
                            <?php
                            if($product[2]==$product[3]){
                                echo "<p class='productPrice'> \$$product[2] </p>";
                            }
                            else{
                                echo "<p class='productPrice'><span class='oldPrice'>\$$product[3] $product[4]</span><span class='deal'> \$$product[2] $product[4]</span></p>";
                            }
                            ?>
                        </div>
                    </div>
                 </div>
<?php endforeach; ?>

            </div>
        </div>
    </div>
</div>

<footer class="zone">
    <a class="footer-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
    <a class="footer-icon" href="https://facebook.com/"><i target="_blank" class="fab fa-facebook-f"></i></a>
    <a class="footer-icon" href="https://instagram.com/"><i target="_blank" class="fab fa-instagram"></i></a>
    <a class="footer-icon" href="mailto:"><i class="fas fa-envelope"></i></a>
    <p class="copyright-message">© Copyright 2021: SOEN 287</p>
    <div style="padding-left: 20px; color: #2A3542";>
        <a class="copyright-message" href="../contact/contact-us.php">Contact Us</a>
    </div>
</footer>

<script src="https://kit.fontawesome.com/45836f3eb4.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>