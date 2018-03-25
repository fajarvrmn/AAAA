<?php 
 include'koneksi.php';
 $nik 					=$_POST['nik'];
 $kode_konsumen 		    =$_POST['kode_konsumen'];
 $tgl_transaksi 		    =$_POST['tgl_transaksi'];
 $tgl_ambil 		    	=$_POST['tgl_ambil'];
 $diskon 		    	=$_POST['diskon'];
 $tambah="INSERT INTO transaksi SET  tgl_transaksi='$tgl_transaksi', tgl_ambil='tgl_ambil',diskon='$diskon',nik='$nik', kode_konsumen='$kode_konsumen'";
 mysqli_query($koneksi,$tambah);
 header("location:index.php")
?>