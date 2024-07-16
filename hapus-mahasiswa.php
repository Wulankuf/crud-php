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
//menerima id mahasiswa yang dipilih pengguna
$id_mahasiswa = (int)$_GET['id_mahasiswa'];

if (delete_mahasiswa($id_mahasiswa) > 0) {
    echo "<script>
               alert('Data mahasiswa Berhasil Dihapus');
               document.location.href = 'mahasiswa.php';
               </script>";
    }else {
        echo "<script>
               alert('Data mahasiswa Gagal Dihapus');
               document.location.href = 'mahasiswa.php';
               </script>";
    }


?>