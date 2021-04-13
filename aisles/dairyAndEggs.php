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
    <title>Dairy and Eggs</title>
</head>
<body>
<div class="background">
    <nav class="navbar navbar-light bg-light homepage-header ">
        <a class="navbar-brand" href="../index.php">
            <img src="../assets/images/logo.png" style="height: 85px;">
        </a>

        <nav>
            <a class="navbar-brand text" href="../register/signin.php">
                <i class="fas fa-user"></i> <span class="icon-label">Sign In </span> </a>
            <a class="navbar-brand text" href="../cart/cart.php">
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

                    <a class="nav-link " href="../index.php">Home</a>
                    <a class="nav-link " href="weeklyDeals.php">Hot Deals</a>
                    <a class="nav-link " href="allProducts.php">All Products</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Aisles </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="fruitsVeg.php">Fruits and Vegetables</a>
                            <a class="dropdown-item" href="dairyAndEggs.php">Dairy & Eggs</a>
                            <a class="dropdown-item" href="meatPoultry.php">Meat and Poultry</a>
                            <a class="dropdown-item" href="snacks.php">Snacks</a>
                            <a class="dropdown-item" href="breadAndBakery.php">Bread and Bakery</a>
                            <a class="dropdown-item" href="beverages.php">Beverages</a>
                        </div>
                    </li>

                </div>
            </div>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid dairyEggBg">
        <div class="container whiteBorder">
            <h1 class="display-4 centerWhite">Dairy and Eggs</h1>
        </div>
    </div>

    <div class="all">
        <div class="filter text">
            <p>
                <b><span class="font-word">Filter</span></b>
            </p>
            <p class="filterCategory">
                <a class="filter-option" href="allProducts.php">Show all</a>
            </p>
            <p class="filterCategory">
                <a class="filter-option" href="weeklyDeals.php">Hot deal</a>
            </p>
            <p class="filterCategory">
                <a class="filter-option" href="fruitsVeg.php">Fruits and Vegetables</a>
            </p>
            <p class="filterCategory">
                <a class="filter-option current" href="dairyAndEggs.php">Dairy and Eggs</a>
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

        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="product card-aisle rounded  uk-card-default card product">
                        <a class="productLink" href="Products/dairyAndEggs/cheese.php">
                            <img class="productImage" alt="cheese" src="../assets/images/articles/cheese.png">
                        </a>
                        <div class="card-body productDetails">
                            <p class="productName">Cheese</p>
                            <p class="productPrice"><span class="oldPrice">$8.99 each</span><span class="deal"> $7.99 each</span></p>
                            <a href="../cart/cart.php">
                                <button name="submit" class="btn btn-primary" type="submit">Add to cart</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="product card-aisle rounded  uk-card-default card product">
                        <a class="productLink" href="Products/dairyAndEggs/eggs.php">
                            <img class="productImage" alt="brown eggs" src="../assets/images/articles/brown-eggs.png">
                        </a>
                        <div class="card-body productDetails">
                            <p class="productName">Brown Eggs</p>
                            <p class="productPrice">$5.99/dz</p>
                            <a href="../cart/cart.php">
                                <button name="submit" class="btn btn-primary" type="submit">Add to cart</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="product card-aisle rounded  uk-card-default card product">
                        <a class="productLink" href="Products/dairyAndEggs/white-eggs.php">
                            <img class="productImage" alt="white eggs" src="../assets/images/articles/white-eggs.png">
                        </a>
                        <div class="card-body productDetails">
                            <p class="productName">White Eggs</p>
                            <p class="productPrice">$5.99/dz</p>
                            <a href="../cart/cart.php">
                                <button name="submit" class="btn btn-primary" type="submit">Add to cart</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="product card-aisle rounded  uk-card-default card product">
                        <a class="productLink" href="Products/dairyAndEggs/milk.php">
                            <img class="productImage" alt="Milk" src="../assets/images/articles/milk-bag.png">
                        </a>
                        <div class="card-body productDetails">
                            <p class="productName">Milk</p>
                            <p class="productPrice">$5.99 each</p>
                            <a href="../cart/cart.php">
                                <button name="submit" class="btn btn-primary" type="submit">Add to cart</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="product card-aisle rounded  uk-card-default card product">
                        <a class="productLink" href="Products/dairyAndEggs/chocomilk.php">
                            <img class="productImage" alt="choco milk" src="../assets/images/articles/chocolate-milk.png">
                        </a>
                        <div class="card-body productDetails">
                            <p class="productName">Chocolate Milk</p>
                            <p class="productPrice">$7.99 each</p>
                            <a href="../cart/cart.php">
                                <button name="submit" class="btn btn-primary" type="submit">Add to cart</button>
                            </a>
                        </div>
                    </div>
                </div>
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