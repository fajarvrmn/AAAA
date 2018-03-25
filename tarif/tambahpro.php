<?php 
 include'koneksi.php';
 $id_jenis_laundry 		=$_POST['id_jenis_laundry'];
 $nama_pakaian 		    =$_POST['nama_pakaian'];
 $tarif 				=$_POST['tarif'];
 $tambah="INSERT INTO tarif SET nama_pakaian='$nama_pakaian',tarif='$tarif',id_jenis_laundry='$id_jenis_laundry'";
 mysqli_query($koneksi,$tambah);
 header("location:index.php")
?>