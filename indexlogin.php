<html>
<head>
<title>
Welcome to the jungle
</title>
<form action="login.php" method="post">
<center>
<table>
<h1>Silahkan Login Terlebih Dahulu</h1>
<tr>
	<td>Username</td>
	<td><input type="text" name="username"></td>
</tr>
<tr>
	<td>Password</td>
	<td><input type="password" name="password"></td>
</tr>
<tr>
	<td><input type="submit" value="Login"></td>
</tr>
<table border="1">
<a href="regristasi.php">+ Registrasi</a>
      <tr>
		<th bgcolor="#1976d2"><font color="white">No</font></th>
        <th bgcolor="#1976d2"><font color="white">Id</font></th>
        <th bgcolor="#1976d2"><font color="white">Username</font></th>
        <th bgcolor="#1976d2"><font color="white">Password</font></th>
        <th bgcolor="#1976d2"><font color="white">OPSI</font></th>
      </tr>
          <?php
          include'koneksi.php';
          $data =mysqli_query($koneksi,"SELECT * FROM login");
          $no=1;
          foreach ($data as $dataa) 
          {
            echo  "<tr>
                <td>$no</td>
                    <td>".$dataa['id']."</td>
                    <td>".$dataa['username']."</td>
                    <td>".$dataa['password']."</td>
                   <td><a class='btn btn-info' href='edit.php?id=$dataa[id]'>Edit</a>
          <a class='btn btn-danger' href='delete.php?id=$dataa[id]'>Delete</a>
        </td>
                 </tr>";
                            $no++;
          }
         ?>
      </table>
     </center>
         </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/testing/tampilan/js/bootstrap.min.js"></script>
</body>
</table>
</center>
</form>
</html>
