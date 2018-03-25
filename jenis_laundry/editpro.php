<?php 
 include'koneksi.php';
 $id_jenis_laundry        =$_POST['id_jenis_laundry'];
 $nama_jenis_laundry 		=$_POST['nama_jenis_laundry'];
 $tambah="UPDATE jenis_laundry SET nama_jenis_laundry='$nama_jenis_laundry' WHERE id_jenis_laundry='$id_jenis_laundry'";
 mysqli_query($koneksi,$tambah);
 header("location:index.php")
?>