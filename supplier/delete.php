<?php
 include'koneksi.php';
 $id_supplier    =$_GET['id_supplier'];
 $delete ="DELETE FROM supplier WHERE id_supplier='$id_supplier'";
 mysqli_query($koneksi,$delete);
 header("location:index.php")
?>