<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>

    <title>Sign In</title>
</head>

<body class="sign-body text">
<nav class="navbar navbar-light bg-light homepage-header ">
    <a class="navbar-brand" href="../index.html">
        <img src="../assets/images/logo.png" style="height: 85px;">
    </a>

    <nav>
        <a class="navbar-brand text" href="signin.php">
            <i class="fas fa-user"></i> <span class="icon-label"><?php echo isset($logged) ? 'Sign Out' : 'Sign In' ?></span> </a>
        <a class="navbar-brand text" href="../cart/cart.html">
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

                <a class="nav-link " href="../index.html">Home</a>
                <a class="nav-link " href="../aisles/weeklyDeals.html">Hot Deals</a>
                <a class="nav-link " href="../aisles/allProducts.html">All Products</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Aisles </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../aisles/fruitsVeg.html">Fruits and Vegetables</a>
                        <a class="dropdown-item" href="../aisles/dairyAndEggs.html">Dairy & Eggs</a>
                        <a class="dropdown-item" href="../aisles/meatPoultry.html">Meat and Poultry</a>
                        <a class="dropdown-item" href="../aisles/snacks.html">Snacks</a>
                        <a class="dropdown-item" href="../aisles/breadAndBakery.html">Bread and Bakery</a>
                        <a class="dropdown-item" href="../aisles/beverages.html">Beverages</a>
                    </div>
                </li>

            </div>
        </div>
    </div>
</nav>

<div class="d-flex justify-content-center align-items-center signin-container">
    <form class="sign-form text-center" method="post" action="read.php">
        <div class="user-img">
            <img src="../assets/images/face.png">
        </div>
        <h1 class="mb-5">Sign In</h1>
        <small> <?php echo isset($message) ? : ' '?> </small>
        <div class="form-group mb-2">
            <input name="email" id="emailIn" type="email" class="form-control form-control-lg"
                   placeholder="Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"
                   required autofocus>
        </div>
        <div class="form-group mb-2">
            <input name="password" id="passwordIn" type="password" class="form-control form-control-lg"
                   placeholder="Password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>" required>
        </div>
        <div class="forgot-link form-group mb-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
                <input type="checkbox" name="rememberMe" id="remember" class="form-check-input">
                <label class="form-check-label">Remember me </label>
            </div>
            <a href="recovery.html" target="_blank">Forgot Password?</a>
        </div>
        <button name="submit" id="submitIn" class="btn btn-primary col-6" type="submit">Submit</button>
        <p class="mt-3 font-weight-normal">Don't have an account? <a href="signup.html"><strong>Register
                    Now</strong></a></p>
        <a href="../backstore/user-list.html">Admin</a>
    </form>
</div>

<footer class="zone">

    <a class="footer-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
    <a class="footer-icon" href="https://facebook.com/"><i target="_blank" class="fab fa-facebook-f"></i></a>
    <a class="footer-icon" href="https://instagram.com/"><i target="_blank" class="fab fa-instagram"></i></a>
    <a class="footer-icon" href="mailto:"><i class="fas fa-envelope"></i></a>
    <p class="copyright-message">© Copyright 2021: SOEN 287</p>
    <div style="padding-left: 20px; color: #2A3542" ;>
        <a class="copyright-message" href="../contact/contact-us.html">Contact Us</a>
    </div>

</footer>
<script src="https://kit.fontawesome.com/45836f3eb4.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>

</html>