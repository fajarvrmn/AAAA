<?php 
 include'koneksi.php';
 $nama_jenis_laundry 		=$_POST['nama_jenis_laundry'];
 $tambah="INSERT INTO jenis_laundry SET nama_jenis_laundry='$nama_jenis_laundry'";
 mysqli_query($koneksi,$tambah);
 header("location:index.php")
?>