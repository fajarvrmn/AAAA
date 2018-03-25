<?php
 include'koneksi.php';
 $kode_konsumen      =$_GET['kode_konsumen'];
 $delete ="DELETE FROM konsumen WHERE kode_konsumen='$kode_konsumen'";
 mysqli_query($koneksi,$delete);
 header("location:index.php")
?>