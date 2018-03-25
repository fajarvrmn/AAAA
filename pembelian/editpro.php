<?php 
 include'koneksi.php';
 $no_pembelian				=$_POST['no_pembelian'];
 $nik 						=$_POST['nik'];
 $id_supplier 		   		=$_POST['id_supplier'];
 $tgl_pembelian 		    =$_POST['tgl_pembelian'];
 $total_biaya 		    	=$_POST['total_biaya'];
 $tambah="UPDATE pembelian SET nik='$nik', id_supplier='$id_supplier', tgl_pembelian='$tgl_pembelian', total_biaya='$total_biaya' WHERE no_pembelian='$no_pembelian'";
 mysqli_query($koneksi,$tambah);
 header("location:index.php")
?>