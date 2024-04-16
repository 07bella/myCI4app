<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bella Coffe</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Custom styles */
    .jumbotron {
      background-image: url('https://png.pngtree.com/background/20230519/original/pngtree-an-old-coffee-shop-with-very-dark-walls-picture-image_2652909.jpg');
      background-size: cover;
      color: #fff;
      text-shadow: 2px 2px 4px #000000;
    }
    .card-img-top {
      height: 200px;
      object-fit: cover;
      transition: transform 0.3s ease;
    }
    .card-img-top:hover {
      transform: scale(0.95);
    }
    .about-section {
      padding: 80px 0;
      background-color: #f8f9fa;
    }
    .about-heading {
      text-align: center;
      margin-bottom: 60px;
    }
    .about-heading h2 {
      font-size: 36px;
      margin-bottom: 20px;
    }
    .about-text {
      font-size: 18px;
      line-height: 1.8;
      text-align: center;
    }

    
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Coffe Bella.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('coba/coba')?>">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('coba/pesan')?>">Buat Pesanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('coba/tentangkami')?>">Tentang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron jumbotron-fluid text-center">
  <div class="container">
    <h1 class="display-4">Selamat Datang di Tempat Nongkrong Anda</h1>
    <p class="lead">Nikmati Kopi Terbaik dan Suasana Caffe Yang Nyaman</p>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img src="https://image.cermati.com/q_70,w_1200,h_800,c_fit/s8tg62yd8vzk7jpokxmo" class="card-img-top" alt="Coffe Moka">
        <div class="card-body">
          <h5 class="card-title">Coffe Moka</h5>
          <p class="card-text">Harga : Rp 15.000,00</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="https://img.jakpost.net/c/2018/02/21/2018_02_21_41016_1519181881._large.jpg" class="card-img-top" alt="Coklat Coffe">
        <div class="card-body">
          <h5 class="card-title">Coklat Coffe</h5>
          <p class="card-text">Harga : Rp 12.000,00</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="https://awsimages.detik.net.id/community/media/visual/2022/01/02/manfaat-kopi_169.jpeg?w=650" class="card-img-top" alt="Black Coffe">
        <div class="card-body">
          <h5 class="card-title">Black Coffe</h5>
          <p class="card-text">Harga : Rp 10.000,00</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img src="https://asset.kompas.com/crops/VRQB0CkugUlm-4hFJU9ttwFzk9c=/32x0:1000x645/750x500/data/photo/2023/11/01/6541a468e7c18.jpg" class="card-img-top" alt="Nama Tempat Wisata">
        <div class="card-body">
          <h5 class="card-title">Coffe Dalgona</h5>
          <p class="card-text">Harga : Rp 16.000,00</p>
        </div>
      </div>
    </div>
    <!-- Tambahkan card lainnya di sini -->
    <div class="col-md-4">
      <div class="card">
        <img src="https://cdn.yummy.co.id/content-images/images/20210704/1qqHPmU4sklK55lKAcTAFlPonUc4RMMO-31363235333831313837d41d8cd98f00b204e9800998ecf8427e.jpg?x-oss-process=image/resize,w_388,h_388,m_fixed,x-oss-process=image/format,webp" class="card-img-top" alt="Nama Tempat Wisata">
        <div class="card-body">
          <h5 class="card-title">Ice Coffe Jelly</h5>
          <p class="card-text">Harga : Rp 11.000,00</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="https://assets.unileversolutions.com/v1/2005891.jpg" class="card-img-top" alt="Nama Tempat Wisata">
        <div class="card-body">
          <h5 class="card-title">Americano Coffe</h5>
          <p class="card-text">Harga : Rp 15.000,00</p>
        </div>
      </div>
    </div>
    <!-- Tambahkan card lainnya di sini -->
  </div>
</div>

<!-- Tentang Kami -->



<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!-- Penutup -->
<footer class="footer bg-dark text-white text-center py-4">
  <div class="container">
    <span class="text-muted">© 2024 CoffeBella</span>
  </div>
</footer>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
