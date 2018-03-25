<?php 
 include'koneksi.php';
 $nama_barang 			=$_POST['nama_barang'];
 $stok 					=$_POST['stok'];
 $tgl_update_stok 		=$_POST['tgl_update_stok'];
 $tambah="INSERT INTO barang SET nama_barang='$nama_barang', stok='$stok',tgl_update_stok='$tgl_update_stok'";
 mysqli_query($koneksi,$tambah);
 header("location:index.php")
?>