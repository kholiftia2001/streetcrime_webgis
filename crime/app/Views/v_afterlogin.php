<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sijaga | <?= $judul ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('sigali/') ?>assets/images/borgol.png" rel="icon">
    <link href="<?= base_url('sigali/') ?><?= base_url('sigali/') ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('sigali/') ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('sigali/') ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('sigali/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('sigali/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('sigali/') ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('sigali/') ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('sigali/') ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('sigali/') ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('sigali/') ?>assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Anyar
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <!-- <div id="topbar" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
      </div>
      <div class="cta d-none d-md-block">
        <a href="#about" class="scrollto">Get Started</a>
      </div>
    </div>
  </div> -->

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="<?= base_url('Lokasi') ?>">SIJAGA</a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="<?= base_url('lokasi') ?>">Halaman Utama</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('Lokasi #about') ?>">Tentang Sistem</a></li>
                    <li class="dropdown"><a href="#"><span>Fitur</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url('lokasi/petalogin') ?>">Peta</a></li>
                            <li><a href="<?= base_url('lokasi/spatiotemporallogin') ?>">Spatio-Temporal</a></li>
                            <li><a href="<?= base_url('lokasi/datalogin') ?>">Data tabular</a></li>
                            <li class="dropdown"><a><span>Informasi kontak</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="<?= base_url('lokasi/kontakpslogin') ?>">Kontak Polsek</a></li>
                                    <li><a href="<?= base_url('lokasi/kontakrslogin') ?>">Kontak Rumah Sakit</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url('lokasi/edukasilogin') ?>">Edukasi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Aksi</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url('Lokasi/inputLokasi') ?>">Input Lokasi</a></li>
                            <li class="dropdown"><a><span>Sunting Data</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="<?= base_url('Lokasi/dataLokasiSleman') ?>">Sleman</a></li>
                                    <li><a href="<?= base_url('Lokasi/dataLokasiKota') ?>">Kota Yogyakarta</a></li>
                                    <li><a href="<?= base_url('Lokasi/dataLokasiBantul') ?>">Bantul</a></li>
                                    <li><a href="<?= base_url('Lokasi/dataLokasiGunkid') ?>">Gunung Kidul</a></li>
                                    <li><a href="<?= base_url('Lokasi/dataLokasiKulprog') ?>">Kulon Progo</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="<?= base_url('Lokasi #why-us') ?>">Tips & Trik</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('Lokasi #services') ?>">Layanan</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('auth/logout') ?>">Logout</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Selamat Datang <span>ADMIN SIJAGA</span></h2>
          <p class="animate__animated animate__fadeInUp">Anda dapat menambah, menyunting, dan menghapus data kejahatan jalanan di Daerah Istimewa Yogyakarta.</p>
          <a href="#main" class="btn-get-started animate__animated animate__fadeInUp scrollto">Pergi ke Menu</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Peta Persebaran Kejahatan Jalanan</h2>
          <p class="animate__animated animate__fadeInUp">Peta persebaran kejahatan jalanan merupakan peta yang menyajikan titik-titik lokasi kejadian kejahatan jalanan di Daerah Istimewa Yogyakarta</p>
          <a href="<?= base_url('Lokasi/petalogin') ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Buka Peta</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Edukasi tentang kejahatan jalanan</h2>
          <p class="animate__animated animate__fadeInUp">Edukasi tentang kejahatan jalanan menyajikan konten yang bersifat mendidik dan meningkatkan kewaspadaan terhadap kejahatan jalanan di Daerah Istimewa Yogyakarta</p>
          <a href="<?= base_url('Lokasi/edukasilogin') ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Buka Konten Edukasi</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <div class="row">
           <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" style="margin-top: 10px;">
            <div class="icon-box">
              <div class="icon">
                <img src="<?= base_url('sigali/') ?>assets/images/input.png" alt="Peta Persebaran" style="width:70px; height: 70px;">
              </div>
              <h4 class="title"><a href="<?= base_url('Lokasi/inputLokasi') ?>">Input Data</a></h4>
              <p class="description">Data yang ditampilkan pada peta persebaran, animasi spasio temporal, dan data tabular dapat ditambahkan melalui menu input data ini.</p>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" style="margin-top: 10px;">
            <div class="icon-box">
              <div class="icon">
                <img src="<?= base_url('sigali/') ?>assets/images/edit.png" alt="Peta Persebaran" style="width:70px; height: 70px;">
              </div>
              <h4 class="title"><a href="#">Sunting Data</a></h4>
              <p class="description">Pilih menu dibawah ini untuk melakukan perubahan terhadap data kejahatan jalanan </p>
              <h6 class="description"><a href="<?= base_url('Lokasi/dataLokasiSleman') ?>">Sleman</a></h6>
              <h6 class="description"><a href="<?= base_url('Lokasi/dataLokasiKota') ?>">Kota Yogyakarta</a></h6>
              <h6 class="description"><a href="<?= base_url('Lokasi/dataLokasiBantul') ?>">Bantul</a></h6>
              <h6 class="description"><a href="<?= base_url('Lokasi/dataLokasiKulprog') ?>">Kulon Progo</a></a></h6>
              <h6 class="description"><a href="<?= base_url('Lokasi/dataLokasiGunkid') ?>">Gunung Kidul</a></h6>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" style="margin-top: 10px;">
            <div class="icon-box">
              <div class="icon">
                <img src="<?= base_url('sigali/') ?>assets/images/map.png" alt="Peta Persebaran" style="width:70px; height: 70px;">
              </div>
              <h4 class="title"><a href="<?= base_url('Lokasi/petalogin') ?>">Peta Persebaran</a></h4>
              <p class="description">Peta persebaran menyajikan titik-titik lokasi kejadian kejahatan jalanan di
                Daerah Istimewa Yogyakarta</p>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="50" style="margin-top: 10px;">
            <div class="icon-box">
              <div class="icon">
                <img src="<?= base_url('sigali/') ?>assets/images/time.png" alt="Peta Persebaran" style="width:70px; height: 70px;">
              </div>
              <h4 class="title"><a href="<?= base_url('Lokasi/spatiotemporallogin') ?>">Animasi Spasio Temporal</a></h4>
              <p class="description">Animasi spasio temporal menyediakan informasi mengenai kejadian kejahatan jalanan di Daerah Istimewa Yogyakarta berdasarkan aspek keruangan dan waktu</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100" style="margin-top: 10px;">
            <div class="icon-box">
              <div class="icon">
                <img src="<?= base_url('sigali/') ?>assets/images/tabel.png" alt="Data Tabular" style="width: 70px; height: 70px;">
              </div>
              <h4 class="title"><a href=<?= base_url('Lokasi/datalogin') ?>>Data Tabular</a></h4>
              <p class="description">Data tabular menyajikan data dalam bentuk tabel yang berisi total kejadian kejahatan jalanandi Daerah Istimewa Yogyakarta</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="150" style="margin-top: 10px;">
            <div class="icon-box">
              <div class="icon">
                <img src="<?= base_url('sigali/') ?>assets/images/kontak.png" alt="Daftar Kontak" style="width: 70px; height: 70px;">
              </div>
              <h4 class="title"><a href="<?= base_url('Lokasi/kontakpslogin') ?>">Daftar Kontak Polsek</a></h4>
              <p class="description">Daftar kontak menyajikan data dalam bentuk tabel yang berisi daftar kontak
                polsek di Daerah Istimewa Yogyakarta</p>
              
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200" style="margin-top: 10px;">
            <div class="icon-box">
              <div class="icon">
                <img src="<?= base_url('sigali/') ?>assets/images/kontak.png" alt="Daftar Kontak" style="width: 70px; height: 70px;">
              </div>
              <h4 class="title"><a href="<?= base_url('Lokasi/kontakrslogin') ?>">Daftar Kontak Rumah Sakit</a></h4>
              <p class="description">Daftar kontak menyajikan data dalam bentuk tabel yang berisi daftar kontak
                rumah sakit di Daerah Istimewa Yogyakarta</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="250" style="margin-top: 10px;">
            <div class="icon-box">
              <div class="icon">
                <img src="<?= base_url('sigali/') ?>assets/images/edu.png" alt="Edukasi" style="width: 70px; height: 70px;">
              </div>
              <h4 class="title"><a href="<?= base_url('Lokasi/edukasilogin') ?>">Edukasi</a></h4>
              <p class="description">Edukasi menyajikan konten yang bersifat mendidik dan meningkatkan kewaspadaan terhadap kejahatan jalanan di Daerah Istimewa Yogyakarta</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Icon Boxes Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Sistem</h2>
          <p>SIJAGA (Sistem Informasi Kejahatan Jalanan Yogyakarta) merupakan sebuah sistem informasi yang memberikan pemetaan, data,
            dan edukasi terkait kejahatan jalanan yang ada di Daerah Istimewa Yogyakarta. SIJAGA bertujuan untuk
            meningkatkan kesadaran masyarakat, kesiapsiagaan, dan tindakan preventif dalam menghadapi tantangan
            kejahatan jalanan.
          </p>
        </div>
      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container-fluid">

        <div class="row">
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">

            <div class="content">
              <h3>Referensi Tips <strong>Waspada Tindak Kejahatan Jalanan</strong></h3>
              <p>
                cc : youtube CNN Indonesia
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Menghindari lokasi kejadian kejahatan jalanan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Upaya yang dapat anda lakukan adalah memanfaatkan informasi lokasi persebaran kejahatan jalanan
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span>
                    Memperhatikan waktu perjalanan anda <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Anda dapat melihat waktu kejahatan jalanan yang telah terjadi dalam data yang disediakan, sehingga dapat mempertimbangkan waktu perjalanan anda.
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>
                   Membekali diri dengan bela diri <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                     Selain informasi lokasi dan waktu, anda juga dapat membekali diri anda dengan bela diri untuk melindungi diri anda.
                    </p>
                  </div>
                </li>

              </ul>
            </div>


          </div>
          <div class="col-lg-5 align-items-stretch position-relative video-box" style='background-image: url("<?= base_url('sigali/') ?>images/thumbnail.png"); background-size: contain;' data-aos="fade-right">
            <a href="https://youtu.be/dEWSFVu6TrY" class="glightbox play-btn mb-4"></a>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan Sistem Informasi</h2>
          <p>Sistem yang dibuat menyediakan layanan berikut</p>
        </div>

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <!--<i class="bi bi-card-checklist"></i>-->
              <h4><a href="#">Pemetaan Lokasi Kejahatan Jalanan di Daerah Istimewa Yogyakarta</a></h4>
              <p>Anda dapat mendapatkan informasi lokasi dan waktu kejahatan jalanan. Selain itu anda juga bisa mengetahui lokasi anda berada di sekitar lokasi kejahatan jalanan atau tidak</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <!--<i class="bi bi-card-checklist"></i>-->
              <h4><a href="#">Telepon Darurat 110</a></h4>
              <p>Telepon darurat dapat dipanggil didalam fitur peta pada menu telepon jika anda merasa lokasi anda tidak aman</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <!--<i class="bi bi-bar-chart"></i>-->
              <h4><a href="#">Animasi Spasio Temporal Kejadian Kejahatan Jalanan</a></h4>
              <p>Anda dapat melihat animasi lokasi kejadian kejahatan jalanan berdasarkan lokasi dan waktu yang berjalan</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <!--<i class="bi bi-binoculars"></i>-->
              <h4><a href="#">Data Tabular Kejadian Kejahatan Jalanan di Daerah Istimewa Yogyakarta</a></h4>
              <p>Anda dapat melihat data kejadian kejahatan jalanan beserta informasi terkait dalam bentuk tabel
              </p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <!--<i class="bi bi-brightness-high"></i>-->
              <h4><a href="#">Data Kontak Kantor Polisi</a></h4>
              <p>Anda dapat melihat data kantor polisi yang ada di Daerah Istimewa Yogyakarta beserta informasi terkait</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <!--<i class="bi bi-calendar4-week"></i>-->
              <h4><a href="#">Data Kontak Rumah Sakit</a></h4>
              <p>Anda dapat melihat data rumah sakit yang ada di Daerah Istimewa Yogyakarta beserta informasi terkait</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <!--<i class="bi bi-briefcase"></i>-->
              <h4><a href="#">Edukasi</a></h4>
              <p>Anda dapat mempelajari terkait pengertian dan jenis kejahatan jalanan dalam fitur edukasi</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <!--<i class="bi bi-briefcase"></i>-->
              <h4><a href="#">Status Data</a></h4>
              <p>Status data menunjukkan apakah data tersebut teridentifikasi dengan baik atau tidak akibat kekurangan informasi terkait data yang dikumpulkan. Status data dapat dilihat di dalam menu peta maupun data tabular</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Uji Sistem Informasi di Sini</h3>
            <p>Dalam rangka mengoptimalkan fungsionalitas dan tampilan sistem informasi, maka pengguna yang telah memanfaatkan sistem informasi ini dapat mengisi kuesioner pada tombol <b>Isi Kuesioner</b></p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://forms.gle/nrEt9GJNGHD6hCgM9">Isi Kuesioner</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pertanyaan dan Jawaban</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Apa saja yang bisa saya dapatkan dari sistem informasi ini? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Anda dapat mengetahui informasi lokasi dan waktu kejahatan jalanan, data tabular kejahatan jalanan, data kontak rumah sakit dan kantor polisi, dan edukasi terkait dengan kejahatan jalanan.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Apa tujuan dari dibuatnya sistem informasi ini? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Tujuan umum dari pembuatan sistem informasi ini adalah menyajikan informasi spasial mengenai persebaran titik-titik rawan kriminalitas jalanan di Daerah Istimewa Yogyakarta. Sedangkan, tujuan khususnya adalah mengintegrasikan data tekstual dengan data geografis sebaran lokasi kriminalitas jalanan, memudahkan pengguna dalam mempertimbangkan pemilihan jalur dan waktu perjalanan yang aman, dan memberikan informasi spasio temporal mengenai perkembangan kriminalitas jalanan berdasarkan data kejadian tahunan.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Data yang ditampilkan bersumber dari mana? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Data yang ditampilkan bersumber dari polres pada tiap kabupaten di Daerah Istimewa Yogyakarta.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Apa itu status data? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Status data menunjukkan bagaimana kualitas data tabular diintegrasikan dengan data geografis. Data yang informasinya kurang lengkap diberikan keterangan "Tidak teridentifikasi dengan baik", sedangkan data yang informasinya lengkap diberikan keterangan "Teridentifikasi".
                </p>
              </div>
            </li>

            <!--<li data-aos="fade-up" data-aos-delay="500">-->
            <!--  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem-->
            <!--    dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>-->
            <!--  <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">-->
            <!--    <p>-->
            <!--      Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada-->
            <!--      nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis-->
            <!--      tellus in metus vulputate eu scelerisque.-->
            <!--    </p>-->
            <!--  </div>-->
            <!--</li>-->

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Fakultas Teknik Universitas Gadjah Mada. <br> Jl. Grafika No.2, Bulaksumur, Yogyakarta, 55281<br><br>
              <strong>Phone:</strong> +6281575473924<br>
              <strong>Email:</strong> kholiftia2001@gmail.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Tentang Kami</h3>
            <p>Laboratorium Geoinformatika dan Infrastruktur Informasi Geospasial, Teknik Geodesi, Fakultas Teknik, Universitas Gadjah Mada</p>
            <!--<div class="social-links mt-3">-->
            <!--  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>-->
            <!--  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>-->
            <!--  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>-->
            <!--  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>-->
            <!--  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>-->
            <!--</div>-->
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright 2023 <strong><span>Kholiftia Mu'arifah | Laboratorium Geoinformatika dan Infrastruktur Informasi Geospasial</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('sigali/') ?>assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url('sigali/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('sigali/') ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url('sigali/') ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('sigali/') ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('sigali/') ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('sigali/') ?>assets/js/main.js"></script>

</body>

</html>