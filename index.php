<?php
//acak figure
$bahan = 'abcde';
$acak = str_shuffle($bahan);

$namaFig = substr($acak, 0, 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Haxors Programming Club - Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <div class="container d-none d-lg-block">
      <div class="row">
        <div class="col-12 text-center mb-4 mt-5">
          <h1 class="mb-0 site-logo"><a href="#!" class="text-black h2 mb-0">{{titleClub}}</a></h1>
        </div>
      </div>
    </div>
    <header class="site-navbar py-md-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-md-6 col-xl-2  d-block d-lg-none">
            <h1 class="mb-0 site-logo"><a href="#!" class="text-black h2 mb-0">Haxorsprogramming Club</a></h1>
          </div>

          <div class="col-12 col-md-12 main-menu" style="text-align:center;">
            <nav class="site-navigation" role="navigation">
              <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                <li v-for='mh in menuHeader'><a :href="mh.link" class="nav-link">{{mh.teks}}</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-6 col-md-6 d-inline-block d-lg-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right">
              <span class="fas fa-bars"></span></a></div>
        </div>
      </div>

    </header>
    <div class="site-blocks-cover">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-12 col-md-12 " style="position: relative;" data-aos="fade-up">

            <img src="images/figure/<?= $namaFig; ?>.png" alt="Image" class="img-fluid img-absolute">

            <div class="row mb-4">
              <div class="col-lg-4 col-sm-4 mr-auto" style='text-align:center;'>
                <img src='images/logo_club.png' style='width:200px;'>
                <h2>Spirit of Collaborative, Never Stop Coding</h2>
                <p class="mb-5"></p>
                <div>
                  <a href="#features-section" class="btn btn-primary mr-2 mb-2">About Haxors</a>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="features-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Divisi</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">

            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="fas fa-code"></span></span>
              </div>
              <div>
                <h3>Web Development</h3>
                <p>Divisi pengembangan aplikasi berbasis web, serta pengembangan API yang dapat digunakan untuk aplikasi lain</p>
                <p><a href="#">More</a></p>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">

            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="fas fa-mobile-alt"></span></span>
              </div>
              <div>
                <h3>Mobile Development</h3>
                <p>Divisi pengembangan aplikasi berbasis mobile (android, Ios)</p>
                <p><a href="#">More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="fas fa-gamepad"></span></span>
              </div>
              <div>
                <h3>Game Development</h3>
                <p>Divisi pengembangan game 2D dan 3D menggunakan Construct, Unity, & Unreal Engine</p>
                <p><a href="#">More</a></p>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="fas fa-draw-polygon"></span></span>
              </div>
              <div>
                <h3>UI/UX Designer</h3>
                <p>Divisi pengembangan UI/UX (Interface) aplikasi/sistem.</p>
                <p><a href="#">More</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="fas fa-chart-bar"></span></span>
              </div>
              <div>
                <h3>Data Science</h3>
                <p>Divisi pengembangan data science menggunakan Python & R, serta pengembangan algoritma mandiri untuk mendapatkan hasil terbaik dari analisis data</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>


          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="fas fa-microchip"></span></span>
              </div>
              <div>
                <h3>IoT (Internet of Thing)</h3>
                <p>Divisi pengembangan IoT untuk inovasi sistem yang mempunyai nilai guna dan dapat digunakan untuk sehari hari.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="project-big" id='project-section'>
      <div class="container">
        <div class="col-12 text-center" style="padding-top:12px;">
          <h2 class="section-title mb-3">Project</h2>
        </div>
        <div class="row mb-5 site-section border-bottom">
          <div class="col-lg-7">
            <img src="images/nadha_laundry.png" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-5 pl-lg-5 ml-auto mt-md-5">
            <h2 class="text-black">NadhaLaundry</h2>
            <p class="mb-4">Aplikasi pengelolaan laundry. Dengan fitur : </p>
            <ul class="">
              <li>Manajemen cucian</li>
              <li>Manajemen pelanggan, promo, pengeluaran laundry</li>
              <li>Notifikasi realtime ke pelanggan</li>
              <li>Pembukuan laundry</li>
            </ul>
            <a href="https://github.com/haxorsprogramming/Nadha-Laundry" target='new' class="btn btn-primary mr-2 mb-2">Details</a>
            <br /><br />
            <div class="author-box">
              <div class="d-flex mb-4">
                <div class="mr-3">
                  <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle">
                </div>
                <div class="mr-auto text-black">
                  <strong class="font-weight-bold mb-0">Hery Syahputra.</strong> <br>
                  Owner, Nova Laundry
                </div>
              </div>
              <blockquote>&ldquo;Aplikasi yg interaktif, pembukuan & report yang rapi, serta adanya sistem promo yang memudahkan mendapatkan pelanggan baru&rdquo;</blockquote>
            </div>
          </div>
        </div>

        <div class="mt-5 row mb-5 site-section ">
          <div class="col-lg-7 order-1 order-lg-2">
            <img src="images/uinsu_web.png" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-5 pr-lg-5 mr-auto mt-5 order-2 order-lg-1">
            <h2 class="text-black">Uinsu Development Website</h2>
            <p class="mb-4">Pengembangan website Universitas Islam Negeri Sumatera Utara</p>
            <ul class="">
              <li>Helpdeks online</li>
              <li>Virtual tour uinsu</li>
            </ul>
            <a href="http://103.76.20.169:3562/" target='new' class="btn btn-primary mr-2 mb-2">Details</a>
          </div>
        </div>
        <hr />
        <div class="row mb-5 site-section border-bottom">
          <div class="col-lg-7">
            <img src="images/front_nadha_school.png" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-5 pl-lg-5 ml-auto mt-md-5">
            <h2 class="text-black">NadhaSchool</h2>
            <p class="mb-4">Aplikasi Manajemen Sekolah, dengan fitur : </p>
            <ul class="">
              <li>Manajemen data siswa, guru, & pegawai</li>
              <li>Manajemen absensi siswa, guru & pegawai</li>
              <li>Notifikasi informasi siswa ke orangtua</li>
              <li>Sistem ujian online</li>
              <li>Laporan hasil belajar (Rapor) online</li>
            </ul>
            <a href="https://github.com/haxorsprogramming/Nadha-School" target='new' class="btn btn-primary mr-2 mb-2">Details</a>
            <br /><br />

          </div>
        </div>
      </div>
      <div style='text-align:center;margin-bottom:15px;'>
        <a href='https://trello.com/b/pYbgelnu/haxors-project-board' target="new" class="btn btn-primary">All project of Haxorsprogramming</a>
      </div>
      <div class="site-section bg-light" id="about-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h2 class="section-title mb-3">About Us</h2>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-lg-6">
              <img src="images/about_1.jpg" alt="Image" class="img-fluid mb-5 mb-lg-0 rounded shadow">
            </div>
            <div class="col-lg-5 ml-auto pl-lg-5">
              <h2 class="text-black mb-4">Just write code .. :)</h2>
              <p class="mb-4">
                Tak mampu mendisrupsi kampus, namun tetap bertekad menjadi kompetitor mereka mereka yang telah menjadikan kami motivasi ...
              </p>
              <p><a href="file/laporan_kegiatan.pdf" target="new" class="btn btn-primary">Haxors in timeline</a></p>
              <p><a href="#!" target="new" class="btn btn-primary">Haxors Squad</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="site-section testimonial-wrap" id="testimonials-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h2 class="section-title mb-3">Activity</h2>
            </div>
          </div>
        </div>
        <div class="slide-one-item home-slider owl-carousel">

          <div v-for='k in kegiatan'>
            <div class="testimonial">
              <img :src='k.pic'>
              <blockquote class="mb-3">
                <p>&ldquo;{{k.teks}}&rdquo;</p>
              </blockquote>
              <p class="text-black"><strong>{{k.judul}}</strong></p>
            </div>
          </div>

        </div>
      </div>

      <div class="site-section" id="blog-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h2 class="section-title mb-3">Haxors Update</h2>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
              <div class="h-entry">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                <h2><a href="#">Cara membuat RestAPI dengan Python</a></h2>
                <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                <p>Deks ..</p>
                <p><a href="#">Continue Reading...</a></p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
              <div class="h-entry">
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                <h2><a href="#">Tips mengoptimalkan network balance pada socket.io</a></h2>
                <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                <p>Deks ..</p>
                <p><a href="#">Continue Reading...</a></p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
              <div class="h-entry">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                <h2><a href="#">Berkenalan dengan Meteor.Js</a></h2>
                <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                <p>Deks ..</p>
                <p><a href="#">Continue Reading...</a></p>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="site-section bg-light" id="contact-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h2 class="section-title mb-3">"Spirit of collaborative, never stop coding"</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="footer py-5 border-top text-center">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12">
              <p class="mb-0">
                <a href="#" class="p-3"><span class="icon-facebook"></span></a>
                <a href="#" class="p-3"><span class="icon-twitter"></span></a>
                <a href="#" class="p-3"><span class="icon-instagram"></span></a>
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
             
            </div>
          </div>
        </div>
      </div>




    </div> <!-- .site-wrap -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <script src="js/main.js"></script>
    <script src="js/haxors.js"></script>
  
</body>

</html>