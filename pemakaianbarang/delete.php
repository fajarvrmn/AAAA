<?php
 include'koneksi.php';
 $kode_pengeluaran    =$_GET['kode_pengeluaran'];
 $delete ="DELETE FROM pemakaian_barang WHERE kode_pengeluaran='$kode_pengeluaran	 '";
 mysqli_query($koneksi,$delete);
 header("location:index.php")
?>