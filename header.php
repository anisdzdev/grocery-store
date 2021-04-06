<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content='maximum-scale=1.0, initial-scale=1.0, width=device-width' name='viewport'>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/45836f3eb4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@3.6.15/dist/css/uikit.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<nav class="navbar navbar-light bg-light homepage-header ">
    <a class="navbar-brand" href="../index.php">
        <img src="../assets/images/logo.png" style="height: 85px;">
    </a>

    <nav>
        <?php if (isset($_SESSION['logged'])) echo
        "<a class='navbar-brand text' href='signin.php'>
            <i class='fas fa-user''></i> <span
                    class='icon-label'>Sign Out</span> </a>";
        else echo
        "<a class='navbar-brand text' href='signin.php'>
            <i class='fas fa-user''></i> <span
                    class='icon-label'>Sign In</span> </a>";
        ?>
        <a class="navbar-brand text" href="cart/cart.html">
            <i class="fas fa-shopping-cart"></i> <span class="icon-label">Cart </span> </a>
    </nav>
</nav>


<nav class="navbar sticky-top navbar-custom navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav ">

                <a class="nav-link " href="index.html">Home</a>
                <a class="nav-link " href="aisles/weeklyDeals.html">Hot Deals</a>
                <a class="nav-link " href="aisles/allProducts.html">All Products</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Aisles </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="aisles/fruitsVeg.html">Fruits and Vegetables</a>
                        <a class="dropdown-item" href="aisles/dairyAndEggs.html">Dairy & Eggs</a>
                        <a class="dropdown-item" href="aisles/meatPoultry.html">Meat and Poultry</a>
                        <a class="dropdown-item" href="aisles/snacks.html">Snacks</a>
                        <a class="dropdown-item" href="aisles/breadAndBakery.html">Bread and Bakery</a>
                        <a class="dropdown-item" href="aisles/beverages.html">Beverages</a>
                    </div>
                </li>
            </div>
        </div>
    </div>
</nav>
</html>
