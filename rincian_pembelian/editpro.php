<?php 
 include'koneksi.php';
 $no_rincian		=$_POST['no_rincian'];
 $kode_barang 		=$_POST['kode_barang'];
 $no_pembelian 		=$_POST['no_pembelian'];
 $jumlah 		    =$_POST['jumlah'];
 $tambah="UPDATE rincian_pembelian SET kode_barang='$kode_barang', no_pembelian='$no_pembelian', jumlah='$jumlah' WHERE no_rincian='$no_rincian'";
 mysqli_query($koneksi,$tambah);
 header("location:index.php")
?>