<!DOCTYPE html>
<html>
<head>
 <title>Data Pemakaian Barang</title>
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
    <title>Data Pemakaian Barang</title>
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
   <li role="presentation"><a href="http://localhost/azfajar/pembelian/">data pembelian</a></li>
   <li role="presentation"><a href="http://localhost/azfajar/rincian_pembelian/">data rincian pembelian</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/rincian_transaksi/">data rincian transaksi</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/supplier/">data supplier</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/supplier/">data tarif</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/transaksi/">data transaksi</a></li>
  <li role="presentation" class="active"><a href="">Data Pemakaian Barang</a></li> 
    
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
          <div class="panel-heading">Pemakaian Barang</div>
          <div class="panel-body">
          <table class="table" >

                      <h1><b>Edit Data Pemakaian Barang</b></h1>
  </center>
  <form action="editpro.php" method="post">

      <div class="form-group">
        <label>Nama Karyawan :</label>
        <select name="nik"  class="form-control">
                  <?php include('koneksi.php');
                      $mahasiswa=mysqli_query($koneksi,"SELECT * FROM karyawan");
                      foreach ($mahasiswa as $data) 
                      {
                   ?>
                      <option value="<?php echo $data['nik']?>"><?php echo $data['nama_karyawan']?> </option>                                 
                  <?php } ?>
                   </select>
      </div>

      <div class="form-group">
        <label>Nama Barang :</label>
        <select name="kode_barang"  class="form-control">
                  <?php include('koneksi.php');
                      $mahasiswa=mysqli_query($koneksi,"SELECT * FROM barang");
                      foreach ($mahasiswa as $data) 
                      {
                   ?>
                      <option value="<?php echo $data['kode_barang']?>"><?php echo $data['nama_barang']?> </option>                                 
                  <?php } ?>
                   </select>
      </div>

  <?php
  include 'koneksi.php';
  $kode_pengeluaran    =$_GET['kode_pengeluaran'];
  $karyawan          =mysqli_query($koneksi,"SELECT * FROM pemakaian_barang  WHERE kode_pengeluaran='$kode_pengeluaran' ");
  $data              =mysqli_fetch_array($karyawan)
  ?>
    <div>
      <label> <input type="hidden" name="kode_pengeluaran" value="<?php echo $data['kode_pengeluaran'];?>"> </label>
    </div>
    <div class="form-group">
        <label>Jumlah :</label>
        <input type="text" name="jumlah" class="form-control" value="<?php echo $data['jumlah'];?>" required>
    </div>
  
  
          <button type="submit" class="btn btn-success btn-lg"> Simpan</button>


  </form>
                             </div>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <div class="panel-footer panel-custom">
              <label>&copy;azfajar.2017.Smk Assalaam Bandung.Rekayasa Perangkat Lunak</label>
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