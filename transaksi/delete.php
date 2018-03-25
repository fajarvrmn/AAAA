<?php
 include'koneksi.php';
 $no_transaksi    =$_GET['no_transaksi'];
 $delete ="DELETE FROM transaksi WHERE no_transaksi='$no_transaksi'";
 mysqli_query($koneksi,$delete);
 header("location:index.php")
?>