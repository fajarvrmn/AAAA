<?php 
 include'koneksi.php';
 $nama_supplier 		=$_POST['nama_supplier'];
 $alamat_supplier 		=$_POST['alamat_supplier'];
 $tlp_supplier 		=$_POST['tlp_supplier'];
 $tambah="INSERT INTO supplier SET nama_supplier='$nama_supplier', alamat_supplier='$alamat_supplier',tlp_supplier='$tlp_supplier'";
 mysqli_query($koneksi,$tambah);
 header("location:index.php")
?>