<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
  <title>KIP - Seleksi</title>
  <!-- <link rel="icon" href="https://www.pinclipart.com/picdir/big/7-75302_clip-art-transparent-library-world-png-jokingart-com.png"> -->
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="assets/style_item.css">
  <link rel="stylesheet" href="Card_Profile/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <style>
    .flex-container {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
    }
    .flex-item-left {
    flex: 1;
    min-width: 300px;
    }
    .flex-item-right {
    flex: 1;
    min-width: 300px;
    text-align: center;
    }
  .text-purple {
    color: #6f42c1 !important;
  }
  .btn-outline-purple {
    color: #6f42c1;
    border-color: #6f42c1;
  }
  .btn-outline-purple:hover {
    background-color: #6f42c1;
    color: #fff;
  }
  .btn-purple {
    color: #fff;
    background-color: #6f42c1;
    border-color: #6f42c1;
  }
  .btn-purple:hover {
    background-color: #5a32a3;
    border-color: #5a32a3;
    color: #fff;
  }
</style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container navbar">
      <a class="navbar-brand text-decoration-none mb-0 brandd text-purple" href="index.php">
        <img src="/assets/img/logo-sikip.png" alt="Logo" style="height: 60px; width: auto; margin-right: 2px; margin-bottom: 8px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-decoration-none active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-decoration-none active" href="#objekwisata">Syarat Pengajuan KIP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-decoration-none active" href="#topic">Form Pengajuan KIP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-decoration-none active" href="#topic">Tentang</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto d-flex flex-row gap-2">
          <li class="nav-item">
            <a class="btn text-decoration-none rounded-pill btn-outline-purple" href="data/login">
              Login Akun &nbsp;<i class="uil uil-user button_icon"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HOME -->
  <section>
    <div class="flex-container container mt-5">
      <div class="flex-item-left">
        <label class="text-purple">SMAN 1 TIRAWUTA</label>
        <h1 class="display-7 text-purple"><strong><strong>SI-KIP SMAN 1 Tirawuta</strong></strong></h1>
        <label class="home_subtitle mt-1 text-muted">Sistem Penentuan Kelayakan Penerima KIP SMAN 1 Tirawuta menggunakan metode Naive Bayes untuk menentukan kelayakan penerima KIP berdasarkan kriteria sosial ekonomi. Cek kelayakanmu dengan mudah dan cepat!</label> <br>
          <a href="fuzzy-database-php-mysql.php" class="btn text-decoration-none rounded btn-purple mt-3 py-3">
            Selengkapnya... &nbsp;</i>
          </a>
      </div>
      <div class="flex-item-right">
        <img src="/assets/img/kiplp.png" class="img-fluid rounded-3 mb-6" alt="">
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
