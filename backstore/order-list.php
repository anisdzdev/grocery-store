
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Orders</title>
    <meta charset="utf-8">
    <meta content='maximum-scale=1.0, initial-scale=1.0, width=device-width' name='viewport'>
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@3.6.15/dist/css/uikit.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Order List</title>
</head>



<body>

<nav class="uk-navbar-container backstore-nav" id="backstore-nav" >
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="../index.html"><img src="../assets/images/logo.png" style="height: 85px;"></a></li>

            <li class="uk-active"><a href="product-list.html">Products</a></li>

            <li class="uk-active"><a href="user-list.php">Users</a></li>

            <li class="uk-active"><a href="order-list.php">Orders</a></li>
        </ul>

    </div>
</nav>


<div class="row" style="margin-top: 50px; margin-left: 10px; margin-right: 10px">
    <div class="col-sm-9 order-title">
        <h1>Orders</h1>
    </div>
    <div class="col-sm-2">
        <a href="order-save.php"><button type="button" id="add-button" class="btn btn-success" onclick="addOrder()"><i class="fas fa-plus"></i> Add</button></a>
    </div>
</div>


<table id="order-table" class="table table-striped order-table">
    <thead>
    <tr>
        <th scope="col">Buyer Name</th>
        <th scope="col">Total</th>
        <th scope="col">Status</th>
        <th scope="col">Order #</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody id="tbodyorder">

    <tr>
<!---->
<!--        <td>Omari Amissi</td>-->
<!--        <td>$350.00</td>-->
<!--        <td>Fulfilled</td>-->
<!--        <td>A5759</td>-->
<!--        <td> <a href="order-save.html"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>-->
<!--            <button onclick="deleteRow($(this))" type="button" class="btn btn-danger btn-sm">Remove</button></td>-->
    </tr>
    <tr>

<!--        <td>Feulip Quintero</td>-->
<!--        <td>$500.00</td>-->
<!--        <td>Fulfilled</td>-->
<!--        <td>A5378</td>-->
<!--        <td> <a href="order-save.html"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>-->
<!--            <button onclick="deleteRow($(this))" type="button" class="btn btn-danger btn-sm">Remove</button></td>-->
    </tr>
    <tr>
    </tr>
    </tbody>
</table>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="../assets/js/backstore.js"></script>
</body>






</html>