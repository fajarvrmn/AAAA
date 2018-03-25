<?php 
 include'koneksi.php';
 $nik				=$_POST['nik'];
 $nama_karyawan 		=$_POST['nama_karyawan'];
 $alamat_karyawan 	=$_POST['alamat_karyawan'];
 $tlp_karyawan    	=$_POST['tlp_karyawan'];
 $gender_karyawan   	=$_POST['gender_karyawan'];
 $tambah="UPDATE karyawan SET nama_karyawan='$nama_karyawan', alamat_karyawan='$alamat_karyawan',tlp_karyawan='$tlp_karyawan',
 					  gender_karyawan='$gender_karyawan' WHERE nik='$nik'";
 mysqli_query($koneksi,$tambah);
 header("location:index.php")
?>