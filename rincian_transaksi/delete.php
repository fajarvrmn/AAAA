<?php
 include'koneksi.php';
 $id_rincian    =$_GET['id_rincian'];
 $delete ="DELETE FROM rincian_transaksi WHERE id_rincian='$id_rincian'";
 mysqli_query($koneksi,$delete);
 header("location:index.php")
?>