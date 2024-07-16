<?php 
session_start();
//Membatasi Halaman Sebelum Login
if (!isset($_SESSION['login'])){
    echo "<script>
           alert('Login Dulu');
           document.location.href = 'login.php';
           </script>";
     exit;
  }

//kosongkan $_SESSIO user login
$_SESSION = [];

session_unset();
session_destroy();
header("location: login.php");