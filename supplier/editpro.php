<?php 
 include'koneksi.php';
 $id_supplier			=$_POST['id_supplier'];
 $nama_supplier 		=$_POST['nama_supplier'];
 $alamat_supplier 		=$_POST['alamat_supplier'];
 $tlp_supplier 		=$_POST['tlp_supplier'];
 $tambah="UPDATE supplier SET nama_supplier='$nama_supplier', alamat_supplier='$alamat_supplier',tlp_supplier='$tlp_supplier'
 				WHERE id_supplier='$id_supplier	'";
 mysqli_query($koneksi,$tambah);
 header("location:index.php")
?>