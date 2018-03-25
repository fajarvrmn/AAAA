<?php 
 include'koneksi.php';
 $kode_pengeluaran	=$_POST['kode_pengeluaran'];
 $nik 				=$_POST['nik'];
 $kode_barang 		=$_POST['kode_barang'];
 $jumlah 		    =$_POST['jumlah'];
 $tambah="UPDATE pemakaian_barang SET nik='$nik', kode_barang='$kode_barang', jumlah='$jumlah' WHERE kode_pengeluaran='$kode_pengeluaran'";
 mysqli_query($koneksi,$tambah);
 header("location:index.php")
?>