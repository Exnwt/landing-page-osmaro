@php
$site_name = get_pengaturan_value('_site_name');

$lokasi = get_pengaturan_value('_location');
$instagram = get_pengaturan_value('_instagram');
$facebook = get_pengaturan_value('_facebook');
$linkedin = get_pengaturan_value('_linkedin');

$image = get_post_data('image');

@endphp
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="{{ asset('frontend/images/fevicon.png')}}" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>{{$site_name}}</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- font awesome style -->
  <link href="{{ asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('frontend/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('frontend/css/responsive.css')}}" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section long_section px-0 sticky-top">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="">
          <span>
            {{$site_name}}
          </span>
        </a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="" style="color: #17a2b8"><b>Beranda</b><span class="sr-only">(saat ini)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tentang.html">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="layanan.html">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="fasilitas.html">Fasilitas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kontak.html">Kontak</a>
              </li>
            </ul>
          </div>
          <div class="quote_btn-container">
            <a href="login">
              <span>
                Masuk
              </span>
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
            <form class="form-inline">
            </form>
          </div>
        </div>
      </nav>
    </header>

    <!-- about section -->

  <section class="about_section layout_padding long_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ asset('frontend/images/f1.jpg')}}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2 style="color: #17a2b8">
                Tentang
              </h2>
            </div>
            <p>
            Laboratorium Klinik OSMARO merupakan sebuah fasilitas layanan kesehatan Penunjang Diagnostik milik swasta. Rencana pendiriannya adalah untuk memberikan layanan Kesehatan berupa pemeriksaan laboratorium. Dengan prinsip :
            <br><span style="color: orange;"><b>O</b></span>bedience (Kepatuhan)
            <br><span style="color: orange;"><b>S</b></span>incerity (Ketulusan)
            <br><span style="color: orange;"><b>M</b></span>otivation (Motivasi)
            <br><span style="color: orange;"><b>A</b></span>ccountability (Bertanggung Jawab)
            <br><span style="color: orange;"><b>R</b></span>espect for Others (Menghormati Orang Lain)
            <br><span style="color: orange;"><b>O</b></span>ptimistics (Optimis)
          </p>
            <a href="">
              Baca Selengkapnya
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->
