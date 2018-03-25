<?php
 include'koneksi.php';
 $no_pembelian    =$_GET['no_pembelian'];
 $delete ="DELETE FROM pembelian WHERE no_pembelian='$no_pembelian'";
 mysqli_query($koneksi,$delete);
 header("location:index.php")
?>