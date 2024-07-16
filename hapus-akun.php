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
  

include 'config/app.php';
//menerima id akun yang dipilih pengguna
$id_akun = (int)$_GET['id_akun'];

if (delete_akun($id_akun) > 0) {
    echo "<script>
               alert('Data Akun Berhasil Dihapus');
               document.location.href = 'crud-modal.php';
               </script>";
    }else {
        echo "<script>
               alert('Data Akun Gagal Dihapus');
               document.location.href = 'crud-modal.php';
               </script>";
    }


?>