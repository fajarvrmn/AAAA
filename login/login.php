<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query="SELECT * from login WHERE username='$username' AND password='$password' ";
$runquery = $koneksi -> query($query); 

if($runquery ->num_rows > 0){
	session_start();
	$_SESSION['username'] =$username;

	header("location: home.php");
} else {
	echo '<h1><font color="red" face="agency fb"> Username atau password Salah !!</h1> ';
} 

