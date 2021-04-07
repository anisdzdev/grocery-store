<?php
if(!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content='maximum-scale=1.0, initial-scale=1.0, width=device-width' name='viewport'>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css"  href="https://cdn.jsdelivr.net/npm/uikit@3.6.15/dist/css/uikit.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/54a1f2ad80.js" crossorigin="anonymous"></script>
    <title>Checkout</title>



</head>
    <body id="index" class="main-body cart-body">

<!--    <nav class="navbar navbar-light bg-light homepage-header ">-->
<!--        <a class="navbar-brand" href="../index.html">-->
<!--            <img src="../assets/images/logo.png" style="height: 85px;">-->
<!--        </a>-->
<!---->
<!--        <nav>-->
<!--            <a class="navbar-brand text" href="../register/signin.html">-->
<!--                <i class="fas fa-user"></i> <span class="icon-label">Sign In </span> </a>-->
<!--            <a class="navbar-brand text" href="cart.php">-->
<!--                <i class="fas fa-shopping-cart"></i> <span class="icon-label">Cart </span> </a>-->
<!--        </nav>-->
<!---->
<!--    </nav>-->
<!--    <nav class="navbar sticky-top navbar-custom navbar-expand-lg navbar-light">-->
<!--        <div class="container-fluid">-->
<!--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"-->
<!--                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">-->
<!--                <span class="navbar-toggler-icon"></span>-->
<!--            </button>-->
<!--            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">-->
<!--                <div class="navbar-nav ">-->
<!---->
<!--                    <a class="nav-link " href="../index.html">Home</a>-->
<!--                    <a class="nav-link " href="../aisles/weeklyDeals.html">Hot Deals</a>-->
<!--                    <a class="nav-link " href="../aisles/allProducts.html">All Products</a>-->
<!--                    <li class="nav-item dropdown">-->
<!--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                            Aisles </a>-->
<!--                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
<!--                            <a class="dropdown-item" href="../aisles/fruitsVeg.html">Fruits and Vegetables</a>-->
<!--                            <a class="dropdown-item" href="../aisles/dairyAndEggs.html">Dairy & Eggs</a>-->
<!--                            <a class="dropdown-item" href="../aisles/meatPoultry.html">Meat and Poultry</a>-->
<!--                            <a class="dropdown-item" href="../aisles/snacks.html">Snacks</a>-->
<!--                            <a class="dropdown-item" href="../aisles/breadAndBakery.html">Bread and Bakery</a>-->
<!--                            <a class="dropdown-item" href="../aisles/beverages.html">Beverages</a>-->
<!--                        </div>-->
<!--                    </li>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </nav>-->

<?php include ('../header.php')?>

    <i class="fa fa-accessible-icon"></i>
        <div class="m-5">
            <div class="uk-card white-80 uk-card-default uk-card-body rounded-5 varela">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row ml-0 mb-3 continue-shopping">
                            <a href="../aisles/allProducts.html"><i class="fas fa-arrow-left align-self-center text-secondary mr-3"></i></a>
                            <h6 class="uk-card-title m-0 text-5 text-secondary varela"> <a class="uk-card-title m-0 text-5 text-secondary varela" href="../aisles/allProducts.html">Continue Shopping</a></h6>
                        </div>
                        <div class="line-break"></div>
                        <h3 class="uk-card-title varela mb-0 font-weight-bold">Shopping Cart</h3>
                        <p class="mt-1">You have <span id="number-of-items">3 items</span> in your cart</p>

                        <div>
                            <div class="row ml-0 mr-0">
                                <!-- ITEM -->
                                <div class="uk-card full-width uk-card-default uk-card-body rounded-5 varela p-4 mb-4">
                                    <div class="row ml-0 mr-0">
                                        <img class="cart-img" src="../assets/images/articles/bread.jpg" alt="Bread"/>
                                        <div class="col-md-4 align-self-center">
                                            <span class="text-dark text-bold">Our Homemade Bread</span>
                                            <span class="row ml-0 mr-0 text-secondary">Real, Crusty and delicious</span>
                                        </div>
                                        <div class=" align-self-center align-right">
                                            <div class="d-inline-block mr-5">
                                                <i class="fas plus-icon fa-plus align-self-center mr-2" name="plus" onclick="changeCount(this)"></i>
                                                <input type="hidden" value="5.99" name="unitary">
                                                <input class="text-dark text-bold border-thicc p-2 rounded-3 number-selector" value="1" type="number" disabled>
                                                <i class="fas minus-icon fa-minus align-self-center ml-2" name="minus" onclick="changeCount(this)"></i>
                                            </div>
                                            <span class="text-dark text-bold mr-5 text-5 element-price" name="price">$5.99</span>
                                            <i class="far fa-trash-alt align-self-center icon-trash" onclick="removeElement(this)"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ITEM -->
                                <div class="uk-card full-width uk-card-default uk-card-body rounded-5 varela p-4 mb-4">
                                    <div class="row ml-0 mr-0">
                                        <img class="cart-img" src="../assets/images/articles/bread.jpg" alt="Bread"/>
                                        <div class="col-md-4 align-self-center">
                                            <span class="text-dark text-bold">Our Homemade Bread</span>
                                            <span class="row ml-0 mr-0 text-secondary">Real, Crusty and delicious</span>
                                        </div>
                                        <div class=" align-self-center align-right">
                                            <div class="d-inline-block mr-5">
                                                <i class="fas plus-icon fa-plus align-self-center mr-2" name="plus" onclick="changeCount(this)"></i>
                                                <input type="hidden" value="5.99" name="unitary">
                                                <input class="text-dark text-bold border-thicc p-2 rounded-3 number-selector" value="1" type="number" disabled>
                                                <i class="fas minus-icon fa-minus align-self-center ml-2" name="minus" onclick="changeCount(this)"></i>
                                            </div>
                                            <span class="text-dark text-bold mr-5 text-5 element-price" name="price">$5.99</span>
                                            <i class="far fa-trash-alt align-self-center icon-trash" onclick="removeElement(this)"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ITEM -->
                                <div class="uk-card full-width uk-card-default uk-card-body rounded-5 varela p-4 mb-4">

                                    <div class="row ml-0 mr-0">
                                        <img class="cart-img" src="../assets/images/articles/bread.jpg" alt="Bread"/>
                                        <div class="col-md-4 align-self-center">
                                            <span class="text-dark text-bold">Our Homemade Bread</span>
                                            <span class="row ml-0 mr-0 text-secondary">Real, Crusty and delicious</span>
                                        </div>
                                        <div class=" align-self-center align-right">
                                            <div class="d-inline-block mr-5">
                                                <i class="fas plus-icon fa-plus align-self-center mr-2" name="plus" onclick="changeCount(this)"></i>
                                                <input type="hidden" value="5.99" name="unitary">
                                                <input class="text-dark text-bold border-thicc p-2 rounded-3 number-selector" value="1" type="number" disabled>
                                                <i class="fas minus-icon fa-minus align-self-center ml-2" name="minus" onclick="changeCount(this)"></i>
                                            </div>
                                            <span class="text-dark text-bold mr-5 text-5 element-price" name="price">$5.99</span>
                                            <i class="far fa-trash-alt align-self-center icon-trash" onclick="removeElement(this)"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class='credit-info'>
                            <div class='credit-info-content'>
                                <table class='half-input-table mb-4'>
                                    <tr><td>Select a Payment Method: </td><td><div class='dropdown width-75 align-right' id='card-dropdown'><div class='dropdown-btn' id='current-card'>Visa</div>
                                        <div class='dropdown-select'>
                                            <ul class="card-ul">
                                                <li>Master Card</li>
                                                <li>American Express</li>
                                            </ul></div>
                                    </div>
                                    </td></tr>
                                </table>
                                <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80' class='credit-card-image' id='credit-card-image'></img>

                                <label for="card-number">Card Number</label>
                                <input id="card-number" type="number" onkeypress="return (event.charCode !==8 && event.charCode ===0 || (event.charCode >= 48 && event.charCode <= 57))" class='input-field'/>


                                <label for="card-holder">Card Holder</label>
                                <input id="card-holder" class='input-field'/>
                                <table class='half-input-table '>
                                    <tr>
                                        <td>
                                            <label for="expires">Expires</label>
                                            <input id="expires" type="text" class='input-field' placeholder="MM/YY"/>
                                        </td>
                                        <td>
                                            <label for="cvc">CVC</label>
                                            <input id="cvc" type="number" onkeypress="return (event.charCode !==8 && event.charCode ===0 || (event.charCode >= 48 && event.charCode <= 57))" class='input-field'/>
                                        </td>
                                    </tr>
                                </table>
                                <div class="line-break mt-3"></div>
                                <div class="mb-100">
                                    <div class="row mt-3 ml-3 mr-3">
                                        <div class="col-md-6 text-5">
                                            Subtotal :
                                        </div>
                                        <div id="subtotal" class="col-md-6 text-5 text-align-right">
                                            $17.97
                                        </div>
                                    </div>
                                    <div class="row mt-2 ml-3 mr-3">
                                        <div class="col-md-6 text-5">
                                            Taxes :
                                        </div>
                                        <div id="taxes" class="col-md-6 text-5 text-align-right">
                                            $2.70
                                        </div>
                                    </div>
                                    <div class="row mt-2 ml-3 mr-3">
                                        <div class="col-md-6 text-5">
                                            Total :
                                        </div>
                                        <div id="total" class="col-md-6 text-5 text-align-right">
                                            $20.67
                                        </div>
                                    </div>
                                </div>
                                <button class='pay-btn' onclick="checkCheckout()">Checkout</button>
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
            <a class="copyright-message" href="../contact/contact-us.html">Contact Us</a>
        </div>

    </footer>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.15/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.15/dist/js/uikit-icons.min.js"></script>
        <script src="../assets/js/cart.js"></script>
    </body>
</html>