<?php 
 include'koneksi.php';
 $id_rincian		=$_POST['id_rincian'];
 $jumlah 		    =$_POST['jumlah'];
 $id_jenis_pakaian 			=$_POST['id_jenis_pakaian'];
 $no_transaksi 	 	=$_POST['no_transaksi'];

 $tambah="UPDATE rincian_transaksi SET jumlah='$jumlah',id_jenis_pakaian='$id_jenis_pakaian', no_transaksi='$no_transaksi'
 				WHERE id_rincian='$id_rincian'";
 mysqli_query($koneksi,$tambah);
 header("location:index.php")
?>