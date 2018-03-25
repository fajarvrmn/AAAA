<?php
 include'koneksi.php';
 $nik =$_GET['nik'];
 $delete ="DELETE FROM karyawan WHERE nik='$nik'";
 mysqli_query($koneksi,$delete);
 header("location:index.php")
?>