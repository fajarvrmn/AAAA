<!DOCTYPE html>
<html>
<head>
 <title>Data Konsumen</title>
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
    <title>Data Konsumen</title>
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
  <li role="presentation"><a href="http://localhost/azfajar/pemakaianbarang/">data pemakaian barang</a></li>
   <li role="presentation"><a href="http://localhost/azfajar/pembelian/">data pembelian</a></li>
   <li role="presentation"><a href="http://localhost/azfajar/rincian_pembelian/">data rincian pembelian</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/rincian_transaksi/">data rincian transaksi</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/supplier/">data supplier</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/supplier/">data tarif</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/transaksi/">data transaksi</a></li>
  <li role="presentation" class="active"><a href="">Data Konsumen</a></li> 
  
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
          <div class="panel-heading">Konsumen</div>
          <div class="panel-body">
          <table class="table" >

 <a class='btn btn-success' href="tambah.php"><span class="glyphicon glyphicon-plus"><font face="Impact"> Tambah Data</font></span></a>
  <center>

      <tr>
        <th bgcolor="#1976d2"><font color="white">No</font></th>
        <th bgcolor="#1976d2"><font color="white">Kode Konsumen</font></th>
        <th bgcolor="#1976d2"><font color="white">Nim Konsumen</font></th>
        <th bgcolor="#1976d2"><font color="white">Alamat Konsumen</font></th>
        <th bgcolor="#1976d2"><font color="white">No Telepon</font></th>
        <th bgcolor="#1976d2"><font color="white">OPSI</font></th>
      </tr>
          <?php
          include'koneksi.php';
          $data =mysqli_query($koneksi,"SELECT * FROM konsumen");
          $no=1;
          foreach ($data as $dataa) 
          {
            echo  "<tr>
                <td>$no</td>
                    <td>".$dataa['kode_konsumen']."</td>
                    <td>".$dataa['nama_konsumen']."</td>
                    <td>".$dataa['alamat_konsumen']."</td>
                    <td>".$dataa['tlp_konsumen']."</td>
                    <td>
              <a href='edit.php?kode_konsumen=$dataa[kode_konsumen]'>EDIT</a>
              <a href='delete.php?kode_konsumen=$dataa[kode_konsumen]'>DELETE</a>
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
              <label>&copy; azfajar  .2017.Smk Assalaam Bandung.Rekayasa Perangkat Lunak</label>
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