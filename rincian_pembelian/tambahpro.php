<?php 
 include'koneksi.php';
 $kode_barang 		=$_POST['kode_barang'];
 $no_pembelian 		=$_POST['no_pembelian'];
 $jumlah 		    =$_POST['jumlah'];
 $tambah="INSERT INTO rincian_pembelian SET kode_barang='$kode_barang', no_pembelian='$no_pembelian', jumlah='$jumlah'";
 mysqli_query($koneksi,$tambah);
 header("location:index.php")
?>