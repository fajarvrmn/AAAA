<?php
 include'koneksi.php';
 $id_jenis_pakaian    =$_GET['id_jenis_pakaian'];
 $delete ="DELETE FROM tarif WHERE id_jenis_pakaian='$id_jenis_pakaian'";
 mysqli_query($koneksi,$delete);
 header("location:index.php")
?>