<!DOCTYPE html>
<html>
<head>
 <title>Data Karyawan</title>
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
    <title>Data Karywan</title>
    <link href="/azfajar/tampilan/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    </div>

    <ul class="nav nav-tabs">
  <li role="presentation"><a href="http://localhost/azfajar/barang/">data barang</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/jenis_laundry/">data laundry</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/konsumen/">data konsumen</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/pemakaianbarang/">data pemakaian barang</a></li>
   <li role="presentation"><a href="http://localhost/azfajar/pembelian/">data pembelian</a></li>
   <li role="presentation"><a href="http://localhost/azfajar/rincian_pembelian/">data rincian pembelian</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/rincian_transaksi/">data rincian transaksi</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/supplier/">data supplier</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/supplier/">data tarif</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/transaksi/">data transaksi</a></li>
  <li role="presentation" class="active"><a href="">Data Karyawan</a></li> 
  
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
          <div class="panel-heading">Karyawan</div>
          <div class="panel-body">
          <table class="table" >

                      <h1><b>Tambah Data Karyawan</b></h1>
  </center>
  <form action="editpro.php" method="post">
  <?php
  include 'koneksi.php';
  $nik      =$_GET['nik'];
  $karyawan =mysqli_query($koneksi,"SELECT * FROM karyawan  where nik='$nik' ");
  $data     =mysqli_fetch_array($karyawan)
  ?>
    <div>
      <label> <input type="hidden" name="nik" value="<?php echo $data['nik'];?>"> </label>
    </div>

    <div class="form-group">
        <label>Nama Karywan :</label>
        <input type="text" name="nama_karyawan" class="form-control" required value="<?php echo $data['nama_karyawan'];?>">
    </div>
    <div class="form-group">
        <label>Alamat :</label>
        <input type="text" name="alamat_karyawan" class="form-control" required value="<?php echo $data['alamat_karyawan'];?>">
    </div>
    <div class="form-group">
        <label>No Telepon :</label>
        <input type="text" name="tlp_karyawan" class="form-control" required value="<?php echo $data['tlp_karyawan'];?>">
    </div>
    <div class="form-group">
        <label>gender kerja :</label>
        <input type="text" name="gender_karyawan" class="form-control" required value="<?php echo $data['gender_karyawan'];?>">
    </div>
  
          <button type="submit" class="btn btn-success btn-lg"> Simpan</button>


  </form>
                             </div>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <div class="panel-footer panel-custom">
              <label>&copy; azfajar .2017.Smk Assalaam Bandung.Rekayasa Perangkat Lunak</label>
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