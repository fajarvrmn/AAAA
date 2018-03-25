<?php
 include'koneksi.php';
 $kode_barang    =$_GET['kode_barang'];
 $delete ="DELETE FROM barang WHERE kode_barang='$kode_barang'";
 mysqli_query($koneksi,$delete);
 header("location:index.php")
?>