  <!DOCTYPE html>
<html>
<head>
 <title>Data Supplier</title>
 <style type="text/css">

    .panel-footer.panel-custom {
    background: blue;
    color: white;
    position:relative;
    bottom: 0px;
    width: 100%;

    }
  </style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Supplier</title>
    <link href="/azfajar/tampilan/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    </div>

   <ul class="nav nav-tabs">
  <li role="presentation"><a href="http://localhost/azfajar/karyawan/">data karyawan</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/barang/">data Barang</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/jenis_laundry/">data jenis_laundry</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/konsumen/">data konsumen</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/pemakaian_barang/">data pemakaian barang</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/pembelian/">data pembelian</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/rincian_pembelian/">data rincian pembelian</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/rincian_transaksi/">data rincian transaksi</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/tarif/">data tarif</a></li>
  <li role="presentation"><a href="" f="http://localhost/azfajar/transaksi/">data transaksi</a></li>
  <li role="presentation" class="active"><a href="">Data Supplier</a></li> 
  
  <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span><span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <center><a href="/testing/logout.php"><b>Logout</b></a></center>
    </ul>
  </li>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <div class="col-md-12">
    <div class="container">
      <div class="row">
        <div class="panel panel-primary">
          <div class="panel-heading">Jenis Supplier</div>
          <div class="panel-body">
          <table class="table" >

 <a class='btn btn-success' href="tambah.php"><span class="glyphicon glyphicon-plus"><font face="Impact"> Tambah Data</font></span></a>
  <center>

      <tr>
        <th bgcolor="#1976d2"><font color="white">No</font></th>
        <th bgcolor="#1976d2"><font color="white">Id Supplier</font></th>
        <th bgcolor="#1976d2"><font color="white">Nama Suplier</font></th>
        <th bgcolor="#1976d2"><font color="white">Alamat Supplier</font></th>
        <th bgcolor="#1976d2"><font color="white">Telepone Supplier</font></th>
        <th bgcolor="#1976d2"><font color="white">OPSI</font></th>
      </tr>
          <?php
          include'koneksi.php';
          $data =mysqli_query($koneksi,"SELECT * FROM supplier");
          $no=1;
          foreach ($data as $dataa) 
          {
            echo  "<tr>
                <td>$no</td>
                    <td>".$dataa['id_supplier']."</td>
                    <td>".$dataa['nama_supplier']."</td>
                    <td>".$dataa['alamat_supplier']."</td>
                    <td>".$dataa['tlp_supplier']."</td>
                    <td>
              <a href='edit.php?id_supplier=$dataa[id_supplier]'>EDIT</a>
              <a href='delete.php?id_supplier=$dataa[id_supplier]'>DELETE</a>
                    </td>
                 </tr>";
                            $no++;
          }
         ?>


      </table>
     </center>

          </div>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <div class="panel-footer panel-custom">
              <label>&copy; azfajar.2017.Smk Assalaam Bandung.Rekayasa Perangkat Lunak</label>
          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/testing/tampilan/js/bootstrap.min.js"></script>
  </body>
</html>
</body>
</html>