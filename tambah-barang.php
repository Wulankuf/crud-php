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
  

$title = 'Tambah barang';
 include 'layout/header.php';
 
 if (isset($_POST['tambah'])){
    if (create_barang($_POST)> 0){
        echo "<script>
               alert('Data Barang Berhasil Ditambahkan');
               document.location.href = 'index.php';
               </script>";
    }else {
        echo "<script>
               alert('Data Barang Gagal Ditambahkan');
               document.location.href = 'index.php';
               </script>";
    }
}
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="container mt-5">
    <h1>Tambah Data Barang</h1>
    <hr>
    <form action="" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang..." required>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="jumlah Barang..." required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga Barang</label>
            <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga Barang..." required>
        </div>
        <button type="submit" name="tambah" class="btn btn-primary" style="float: right;">Submit</button>      
    </form>
</div>
  </div>
  <?php include 'layout/footer.php';?>
  