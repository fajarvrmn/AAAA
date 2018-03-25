<?php 
 include'koneksi.php';
 $kode_konsumen      =$_POST['kode_konsumen'];
 $nama_konsumen 		=$_POST['nama_konsumen'];
 $alamat_konsumen 	=$_POST['alamat_konsumen'];
 $tlp_konsumen    	=$_POST['tlp_konsumen'];
 $tambah="UPDATE konsumen SET nama_konsumen='$nama_konsumen', alamat_konsumen='$alamat_konsumen',tlp_konsumen='$tlp_konsumen' WHERE kode_konsumen='$kode_konsumen'";
 mysqli_query($koneksi,$tambah);
 header("location:index.php")
?>