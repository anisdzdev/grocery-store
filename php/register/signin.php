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
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/favicon/favicon-16x16.png">

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>

    <title>Sign In</title>
</head>

<body class="sign-body text">
<?php include ('../header.php')?>

<div class="d-flex justify-content-center align-items-center signin-container">
    <form class="sign-form text-center" method="post" action="read.php">
        <div class="user-img">
            <img src="../../assets/images/face.png">
        </div>
        <h1 class="mb-5">Sign In</h1>
        <div class="errorSign">
            <small><?php echo isset($message) ? ($message): ' '?></small>
        </div>
        <div class="form-group mb-2">
            <input name="email" id="emailIn" type="text" class="form-control form-control-lg"
                   placeholder="Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"
                   required autofocus>
        </div>
        <div class="form-group mb-2">
            <input name="password" id="passwordIn" type="password" class="form-control form-control-lg"
                   placeholder="Password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>" required>
        </div>
        <div class="forgot-link form-group mb-2 d-flex justify-content-between align-items-center">
<!--            <div class="form-check">-->
<!--                <input type="checkbox" name="rememberMe" id="remember" class="form-check-input">-->
<!--                <label class="form-check-label">Remember me </label>-->
<!--            </div>-->
            <a href="recovery.php" target="_blank">Forgot Password?</a>
        </div>
        <button name="submit" id="submitIn" class="btn btn-primary col-6" type="submit">Submit</button>
        <p class="mt-3 font-weight-normal">Don't have an account? <a href="signup.php"><strong>Register
                    Now</strong></a></p>
    </form>
</div>

<?php include ('../footer.php')?>


</body>

</html>