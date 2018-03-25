<?php
 include'koneksi.php';
 $no_rincian    =$_GET['no_rincian'];
 $delete ="DELETE FROM rincian_pembelian WHERE no_rincian='$no_rincian'";
 mysqli_query($koneksi,$delete);
 header("location:index.php")
?>