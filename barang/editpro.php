<?php 
 include'koneksi.php';
 $kode_barang			=$_POST['kode_barang'];
 $nama_barang 			=$_POST['nama_barang'];
 $stok 					=$_POST['stok'];
 $tgl_update_stok 		=$_POST['tgl_update_stok'];
 $tambah="UPDATE barang SET nama_barang='$nama_barang', stok='$stok',tgl_update_stok='$tgl_update_stok' WHERE kode_barang='$kode_barang'";
 mysqli_query($koneksi,$tambah);
 header("location:index.php")
?>