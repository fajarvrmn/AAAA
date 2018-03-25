<?php 
 include'koneksi.php';
 $no_transaksi			=$_POST['no_transaksi'];
 $nik 					=$_POST['nik'];
 $kode_konsumen 		    =$_POST['kode_konsumen'];
 $tgl_transaksi 		    =$_POST['tgl_transaksi'];
 $tgl_ambil 		    	=$_POST['tgl_ambil'];
 $diskon 		    	=$_POST['diskon'];
 $tambah="UPDATE  transaksi SET  tgl_transaksi='$tgl_transaksi', tgl_ambil='tgl_ambil',diskon='$diskon',nik='$nik', 
 kode_konsumen='$kode_konsumen' WHERE no_transaksi='$no_transaksi '";
 mysqli_query($koneksi,$tambah);
 header("location:index.php")
?>