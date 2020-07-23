<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>


<body>
<form action="simpan_data.php" method= "POST">
  
<nav id="navbar-example2" class="navbar navbar-transparent bg-dark">
  <a class="navbar-brand" href="index.html">HOME</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="tampilkan_data.php">Lihat Data</a>
    </li>
  </ul>
</nav>
<div class="card mb-3" style="max-width: 100%;">
<div class="row no-gutters">
  <div class="col-md-4">
    <img src="logo/img.png" class="card-img" alt="...">
  </div>
  <div class="col-md-8">
    <div class="card-body">

    <?php 
    include 'config.php';
    $koneksi = new Database();
   
?>
      <h5 class="card-title">Checkout</h5> 
      <div class="modal-body">
      <div class="form-group">
              <label >Nama</label>
              <input type="text" name="nama_plngn" placeholder="Masukkan Nama Anda" min="1" max="1000" class="form-control" required>
          </div>
          <div class="form-group">
              <label >Furniture yang dipesan</label>
              <input list="barang" name="nama_brng" class="form-control" required>
             
          </div>
          <div class="form-group">
              <label >Jumlah</label>
              <input type="number" name="jumlah_brng" placeholder="Jumlah Barang" min="1" max="1000" class="form-control" required>
          </div>
         
     
          <div class="form-group">
              <label >Telepon</label>
              <input type="text" name="telepon" placeholder="Nomor Telepon Anda" min="1" max="1000" class="form-control" required>
          </div>
    

      </form>

      <p>
            
        </p>
  </div>
  <div class="modal-footer">
      <input type="submit" name="submit" class="btn btn-primary" value="Beli Sekarang" />
           <div class="clearfix"></div>
  </div>


 
</div>
</div>

				
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
        crossorigin="anonymous"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
  <?php 
