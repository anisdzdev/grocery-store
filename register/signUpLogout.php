<?php
session_start();
unset($_SESSION['logged']);
unset($_SESSION['welcome']);
unset($_SESSION['admin']);
unset($_SESSION['name']);
header("Location: signup.php");