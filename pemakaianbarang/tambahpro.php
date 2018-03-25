<?php 
 include'koneksi.php';
 $nik 				=$_POST['nik'];
 $kode_barang 		=$_POST['kode_barang'];
 $jumlah 		    =$_POST['jumlah'];
 $tambah="INSERT INTO pemakaian_barang SET nik='$nik', kode_barang='$kode_barang', jumlah='$jumlah'";
 mysqli_query($koneksi,$tambah);
 header("location:index.php")
?>