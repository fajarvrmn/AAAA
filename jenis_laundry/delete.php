<?php
 include'koneksi.php';
 $id_jenis_laundry    =$_GET['id_jenis_laundry'];
 $delete ="DELETE FROM jenis_laundry WHERE id_jenis_laundry='$id_jenis_laundry'";
 mysqli_query($koneksi,$delete);
 header("location:index.php")
?>