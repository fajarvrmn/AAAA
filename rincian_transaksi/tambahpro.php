<?php 
 include'koneksi.php';
 $jumlah 		    =$_POST['jumlah'];
 $id_jenis_pakaian 			=$_POST['id_jenis_pakaian'];
 $no_transaksi 	 	=$_POST['no_transaksi'];

 $tambah="INSERT INTO rincian_transaksi SET jumlah='$jumlah',id_jenis_pakaian='$id_jenis_pakaian', no_transaksi='$no_transaksi'";
 mysqli_query($koneksi,$tambah);
 header("location:index.php")
?>