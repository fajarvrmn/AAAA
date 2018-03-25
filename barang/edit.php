<!DOCTYPE html>
<html>
<head>
 <title>Data Barang</title>
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
    <title>Data Barang</title>
    <link href="/azfajar/tampilan/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    </div>

   <ul class="nav nav-tabs">
  <li role="presentation"><a href="http://localhost/azfajar/karyawan/">data karyawan</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/jenis_laundry/">data laundry</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/konsumen/">data konsumen</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/pemakaianbarang/">data pemakaian barang</a></li>
   <li role="presentation"><a href="http://localhost/azfajar/pembelian/">data pembelian</a></li>
   <li role="presentation"><a href="http://localhost/azfajar/rincian_pembelian/">data rincian pembelian</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/rincian_transaksi/">data rincian transaksi</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/supplier/">data supplier</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/supplier/">data tarif</a></li>
  <li role="presentation"><a href="http://localhost/azfajar/transaksi/">data transaksi</a></li>
    <li role="presentation" class="active"><a href="">Data Barang</a></li> 
  
  

  <div class="col-md-4">
    <div class="container-fluid">
      <div class="row">
        <div class="panel panel-primary">
          <div class="panel-heading">Barang</div>
          <div class="panel-body">
          <table class="table" >

                      <h1><b>Tambah Data Barang </b></h1>
  </center>
  <form action="editpro.php" method="post">
  <?php
  include 'koneksi.php';
  $kode_barang         =$_GET['kode_barang'];
  $karyawan          =mysqli_query($koneksi,"SELECT * FROM barang  where kode_barang='$kode_barang' ");
  $data              =mysqli_fetch_array($karyawan)
  ?>

    <div>
      <label> <input type="hidden" name="kode_barang" value="<?php echo $data['kode_barang'];?>"> </label>
    </div>
    <div class="form-group">
        <label>Nama Barang :</label>
        <input type="text" name="nama_barang" class="form-control" value="<?php echo $data['nama_barang'];?>" required>
    </div>
    <div class="form-group">
        <label>Stock :</label>
        <input type="text" name="stok" class="form-control" value="<?php echo $data['stok'];?>" required>
    </div>
    <div class="form-group">
        <label>Tanggal Update Stock :</label>
        <input type="text" name="tgl_update_stok" class="form-control" value="<?php echo $data['tgl_update_stok'];?>" required>
    </div>
  
          <button type="submit" class="btn btn-success btn-lg"> Simpan</button>


  </form>
                             </div>
         
          <div class="panel-footer panel-custom">
              <label>&copy; azfajar. 2017.Smk Assalaam Bandung.Rekayasa Perangkat Lunak</label>
          </div>
        </div>  
      </div>
    </div>
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/azfajar/tampilan/js/bootstrap.min.js"></script>
  </body>
</html>

</body>
</html>