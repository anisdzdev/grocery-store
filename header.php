<?php
?>

<nav class="navbar navbar-light bg-light homepage-header ">
    <a class="navbar-brand" href="/index.php">
        <img src="/grocery-store/assets/images/logo.png" style="height: 85px;">
    </a>

    <nav>
        <?php if (isset($_SESSION['logged'])) echo
        "<a class='navbar-brand text' href='/grocery-store/register/signin.php'>
            <i class='fas fa-user''></i> <span
                    class='icon-label'>Sign Out</span> </a>";
        else echo
        "<a class='navbar-brand text' href='/grocery-store/register/signin.php'>
            <i class='fas fa-user''></i> <span
                    class='icon-label'>Sign In</span> </a>";
        ?>
        <a class="navbar-brand text" href="/grocery-store/cart/cart.php">
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

                <a class="nav-link " href="/grocery-store/index.html">Home</a>
                <a class="nav-link " href="/grocery-store/aisles/weeklyDeals.html">Hot Deals</a>
                <a class="nav-link " href="/grocery-store/aisles/allProducts.html">All Products</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Aisles </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/grocery-store/aisles/fruitsVeg.html">Fruits and Vegetables</a>
                        <a class="dropdown-item" href="/grocery-store/aisles/dairyAndEggs.html">Dairy & Eggs</a>
                        <a class="dropdown-item" href="/grocery-store/aisles/meatPoultry.html">Meat and Poultry</a>
                        <a class="dropdown-item" href="/grocery-store/aisles/snacks.html">Snacks</a>
                        <a class="dropdown-item" href="/grocery-store/aisles/breadAndBakery.html">Bread and Bakery</a>
                        <a class="dropdown-item" href="/grocery-store/aisles/beverages.html">Beverages</a>
                    </div>
                </li>
            </div>
        </div>
    </div>
</nav>
