<?php 
 include'koneksi.php';
 $nama_konsumen 		=$_POST['nama_konsumen'];
 $alamat_konsumen 	=$_POST['alamat_konsumen'];
 $tlp_konsumen    	=$_POST['tlp_konsumen'];
 $tambah="INSERT INTO konsumen SET nama_konsumen='$nama_konsumen', alamat_konsumen='$alamat_konsumen',tlp_konsumen='$tlp_konsumen'";
 mysqli_query($koneksi,$tambah);
 header("location:index.php")
?>