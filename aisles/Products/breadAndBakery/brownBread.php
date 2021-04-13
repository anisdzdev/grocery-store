<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content='maximum-scale=1.0, initial-scale=1.0, width=device-width' name='viewport'>
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/favicon/favicon-16x16.png">



    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@3.6.15/dist/css/uikit.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!--    <link rel="stylesheet" type="text/css"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../../../assets/js/productsJQ.js"></script>

    <meta charset="UTF-8">
    <title>Tropical Flavors</title>
</head>
<body>
<div class="background">
    <nav class="navbar navbar-light bg-light homepage-header ">
        <a class="navbar-brand" href="../../../index.php">
            <img src="../../../assets/images/logo.png" style="height: 85px;">
        </a>

        <nav>
            <a class="navbar-brand text" href="../../../register/signin.php">
                <i class="fas fa-user"></i> <span class="icon-label">Sign In </span> </a>
            <a class="navbar-brand text" href="../../../cart/cart.php">
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

                    <a class="nav-link " href="../../../index.php">Home</a>
                    <a class="nav-link " href="../../weeklyDeals.php">Hot Deals</a>
                    <a class="nav-link " href="../../allProducts.php">All Products</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Aisles </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="../../fruitsVeg.php">Fruits and Vegetables</a>
                            <a class="dropdown-item" href="../../dairyAndEggs.php">Dairy & Eggs</a>
                            <a class="dropdown-item" href="../../meatPoultry.php">Meat and Poultry</a>
                            <a class="dropdown-item" href="../../snacks.php">Snacks</a>
                            <a class="dropdown-item" href="../../breadAndBakery.php">Bread and Bakery</a>
                            <a class="dropdown-item" href="../../beverages.php">Beverages</a>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </nav>

    <br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-md-5 marg">
                <br>
                <img src="../../../assets/images/articles/brown-bread.png" alt="">
            </div>

            <div class="col-md-7 marg">
                <br>
                <h4 class="pro-d-title product-title" id="title">Brown Bread</h4>
                <p>
                    This delicious brown bread will keep your blood sugar at the lowerest level.
                </p>
                <p class="product-price">
                    $<span id="productPrice">19.99</span> each
                </p>
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

    <br><br><br><br>

    <div class="Recommended">
        <h1>
            Recommended
        </h1>

        <div class="container mt-5 mb-5">
            <div class="row">

                <div class="col col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="product card-aisle rounded uk-card-default card product">
                        <a class="productLink" href="../snacks/almond.php">
                            <img class="productImage" alt="almonds" src="../../../assets/images/articles/Almond.png">
                        </a>
                        <div class="card-body productDetails">
                            <p class="productName">Almond</p>
                            <p class="productPrice"><span class="oldPrice">16.37/Kg</span><span class="deal"> $15.37/Kg</span></p>
                            <a href="../../../cart/cart.php">
                                <button name="submit" class="btn btn-primary" type="submit">Add to cart</button>
                            </a></div>
                    </div>
                </div>

                <div class="col col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="product card-aisle rounded  uk-card-default card product">
                        <a class="productLink" href="../meat/chickenBreast.php">
                            <img class="productImage" alt="Chicken Breast" src="../../../assets/images/articles/chicken-breast.png">
                        </a>
                        <div class="card-body productDetails">
                            <p class="productName">Chicken Breast</p>
                            <p class="productPrice"><span class="oldPrice">21.99/Kg</span><span class="deal"> $19.99/Kg</span></p>
                            <a href="../../../cart/cart.php">
                                <button name="submit" class="btn btn-primary" type="submit">Add to cart</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="product card-aisle rounded  uk-card-default card product">
                        <a class="productLink" href="../meat/chicken-wings.php">
                            <img class="productImage" alt="Chicken Wings" src="../../../assets/images/articles/chicken-wing.png">
                        </a>
                        <div class="card-body productDetails">
                            <p class="productName">Chicken Wings</p>
                            <p class="productPrice">7.99$/8pcs</p>
                            <a href="../../../cart/cart.php">
                                <button name="submit" class="btn btn-primary" type="submit">Add to cart</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="product card-aisle rounded  uk-card-default card product">
                        <a class="productLink" href="../fruitsAndVeg/oranges.php">
                            <img class="productImage" alt="Oranges" src="../../../assets/images/articles/oranges.png">
                        </a>
                        <div class="card-body productDetails">
                            <p class="productName">Oranges</p>
                            <p class="productPrice">$1.50 each</p>
                            <a href="../../../cart/cart.php">
                                <button name="submit" class="btn btn-primary" type="submit">Add to cart</button>
                            </a>
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
        <a class="copyright-message" href="../../../contact/contact-us.php">Contact Us</a>
    </div>
</footer>

<script src="https://kit.fontawesome.com/45836f3eb4.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</div>
</body>
</html>