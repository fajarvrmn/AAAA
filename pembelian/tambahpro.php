<?php 
 include'koneksi.php';
 $tgl_pembelian 		    =$_POST['tgl_pembelian'];
 $total_biaya 		    	=$_POST['total_biaya'];
 $id_supplier 		   		=$_POST['id_supplier'];
  $nik 						=$_POST['nik'];
 $tambah="INSERT INTO pembelian SET  tgl_pembelian='$tgl_pembelian', total_biaya='$total_biaya',
  id_supplier='$id_supplier',nik='$nik'
 ";
 mysqli_query($koneksi,$tambah);
 header("location:index.php")
?>