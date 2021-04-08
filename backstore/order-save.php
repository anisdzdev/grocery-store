<?php
if(!isset($_SESSION)) {
    session_start();
}

?>

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/45836f3eb4.js" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@3.6.15/dist/css/uikit.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="../assets/css/style.css">

    <title>Edit/save Orders</title>

</head>

<body>
<nav class="uk-navbar-container backstore-nav" >
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="../index.html"><img src="../assets/images/logo.png" style="height: 85px;"></a></li>

            <li class="uk-active">
                <a href="product-list.html">Products</a>
            </li>

            <li class="uk-active">
                <a href="user-list.html">Users</a>
            </li>
            <li class="uk-active">
                <a href="order-list.php">Orders</a>
            </li>
        </ul>

    </div>
</nav>


<div id="edit-form" class="d-flex justify-content-center align-items-center signBack-container">
    <form name="form" method="post" action ="order-write.php" class="sign-form text-center">
        <h1 class="mb-5 font-weight-light">Edit orders</h1>
        <label class="label">Order#</label>
        <div class="form-group mb-2">
            <input name="order#" id="orderNum" class="form-control form-control-lg" placeholder="Order #"
            >
        </div>
        <label class="label">Buyer name</label>
        <div class="form-group mb-2">
            <input name="name" id="buyerName" class="form-control form-control-lg" placeholder="Buyer Name"
            >
        </div>
        <label class="label">Total</label>
        <div class="form-group mb-2">
            <input name="total" id="total" class="form-control form-control-lg" placeholder="Total"
            >
        </div>
        <label class="label">Status</label>
        <div class="form-group mb-2">
            <input name="status" id="status" class="form-control form-control-lg" placeholder="Status"
            >
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary" onclick="editOrder(); ">Save changes</button>

        </div>
    </form>
</div>


<script>
    // $("#edit-form").submit(function(e) {
    //     e.preventDefault();
    // });

</script>



<script src="../assets/js/backstore.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/45836f3eb4.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>

</html>