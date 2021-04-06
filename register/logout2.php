<?php
session_start();
unset($_SESSION['logged']);
unset($_SESSION['welcome']);
header("Location: signup.php");