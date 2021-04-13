<?php

if(!isset($_SESSION)) {
    session_start();
}

$id = $_GET["id"];
$product = [];
if (($handle = fopen("../../backstore/database/products.csv", "r")) !== FALSE) {
    while (($row = fgetcsv($handle)) !== FALSE) {
            if($row[0] == $id){
                $product = $row;
            }
        }
    fclose($handle);
} else {
    $error = "Something wrong occurred. Cannot continue!";
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/favicon/favicon-16x16.png">

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" type="text/css"
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@3.6.15/dist/css/uikit.min.css" />

    <title>
        <?php
        echo $product[1];
        ?>
    </title>

</head>

<body>
<div class="background">

<?php include ('../../header.php')?>

<div class="container">
    <div class="row">
        <div class="col-md-5 marg">
            <br>

                <img src="../../assets/images/articles/<?php echo $product[5] ?>" alt="">

        </div>

        <div class="col-md-7 marg">
            <br>

            <h4 class="pro-d-title product-title" id="title"><?php echo $product[1]?></h4>

            <p>
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Link with href
                </a>

            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <?php echo $product[7] ?>
                </div>
            </div>

                    <?php
                        if($product[2] == $product[3]){
                            echo "<p class='product-price'>
                            $<span id='productPrice'>
                                $product[2]
                            </span>
                            $product[4]
                            </p>";
                        }
                        else{
                            echo "<p class='productPrice'><span class='oldPrice'>$product[3] $product[4]</span><span class='deal'>&nbsp&nbsp&nbsp<span id='productPrice'>$product[2]</span> $product[4]</span></p>";
                        }
                    ?>
            <div class="product_meta">
                <span class="posted_in"> <strong>Availability:</strong> <a class="inStock" href="#">In Stock</a></span>
            </div>
            <label>Quantity: </label>
            <label>
                <i class="fas plus-icon fa-plus align-self-center mr-2 plus" name="plus"></i>
                <input type="hidden" value="5.99" name="unitary">
                <input class="text-dark text-bold border-thicc p-2 rounded-3 number-selector" id="input" value="1" type="number" disabled>
                <i class="fas minus-icon fa-minus align-self-center ml-2 minus" name="minus"></i>
            </label>
            <button type="button" class="btn btn-outline-success">Add to cart</button>
            <p id="change"></p>
            <p>
        </div>
    </div>
</div>
</div>


<?php include ('../../recommended.php')?>

<?php include ('../../footer.php')?>
<!-- Scripts for the Bootstrap, ignore -->
<script src="https://kit.fontawesome.com/45836f3eb4.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>