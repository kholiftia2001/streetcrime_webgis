<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sijaga | <?= $judul ?></title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link rel="icon" type="image/x-icon" href="<?= base_url('sigali/') ?>assets\images\map.png" />
    <link rel="stylesheet" href="<?= base_url('sigali/') ?>resources/ol/ol.css">
    <link rel="stylesheet" href="<?= base_url('sigali/') ?>resources/ol-ext/ol-ext.css">
    <link rel="stylesheet" href="<?= base_url('sigali/') ?>resources/layerswitcher/ol-layerswitcher.css">
    <link rel="stylesheet" href="<?= base_url('sigali/') ?>resources/fontawsome/css/all.css">

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
    <link href="<?= base_url('sigali/') ?>style.css" rel="stylesheet">
    <link href="<?= base_url('sigali/') ?>assets/css/style.css" rel="stylesheet">

    <script src="<?= base_url('sigali/') ?>resources/ol/ol.js"></script>
    <script src="<?= base_url('sigali/') ?>resources/ol-ext/ol-ext.js"></script>
    <script src="<?= base_url('sigali/') ?>resources/layerswitcher/ol-layerswitcher.js"></script>
    <script src="<?= base_url('sigali/') ?>resources/fontawsome/js/all.js"></script>
    <script src="<?= base_url('sigali/') ?>resources/chart/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/nouislider"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.3/rangeslider.min.js"></script>
    <!-- <script src="<?= base_url('sigali/') ?>main.js"></script> -->
    <!-- Vendor JS Files -->
    <script src="<?= base_url('sigali/') ?>assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url('sigali/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('sigali/') ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('sigali/') ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('sigali/') ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('sigali/') ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('sigali/') ?>assets/js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    
    <style>
        #map {
        position: fixed;
        width: 100vw;
        height: 95%;
        /* Mengurangi tinggi navbar (30px) dari tinggi viewport (100vh) */
        top: 5%;
        }
        
        /* Popup container */
        .popup {
            position: absolute;
            background: white;
            padding: 10px;
            min-height: 0px;
            min-width: 200px;
            max-width: 300px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.5;
            /* Tambahkan properti berikut untuk membuat popup mengikuti konten */
            height: auto;
            max-height: none;
            overflow: auto;
        }

        /* Popup content */
        .popup-content {
            margin-bottom: 5px;
        }

        /* Popup closer (close button) */
        .popup-closer {
            position: absolute;
            top: 0px;
            right: 0px;
            width: 16px;
            height: 16px;
            cursor: pointer;
        }

        /* Change cursor to pointer when hovering over the closer */
        .popup-closer:hover {
            background-color: #fbaeae;
        }

        /* Konten tambahan yang disembunyikan */
        .more-content {
            display: none;
            margin-top: 10px;
        }

        /* Tombol "Lihat Lebih Banyak" */
        .show-more {
            display: block;
            margin-top: 10px;
            text-decoration: underline;
            cursor: pointer;
        }

        /* Tombol "Sembunyikan Konten" */
        .hide-content {
            display: block;
            margin-top: 5px;
            color: blue;
            cursor: pointer;
        }

        .navibar {
            position: absolute;
            top: 150px;
            left: 60px;
            height: 260px;
            width: 150px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            z-index: 1;
        }

        .filter-container {
            flex-grow: 1;
        }

        #h31 {
            position: absolute;
            font-family: "Arial", sans-serif;
            top: 15px;
            font-size: 12px;
        }

        #h32 {
            position: absolute;
            font-family: "Arial", sans-serif;
            top: 68px;
            font-size: 12px;
        }

        #h33 {
            position: absolute;
            font-family: "Arial", sans-serif;
            top: 125px;
            font-size: 12px;
        }

        #h34 {
            position: absolute;
            font-family: "Arial", sans-serif;
            top: 180px;
            font-size: 12px;
        }

        .navibar select {
            padding: 5px;
            font-size: 12px;
        }

        #bulan-filter {
            position: absolute;
            top: 90px;
            font-size: 12px;
            cursor: pointer;
        }

        #year-filter {
            position: absolute;
            top: 35px;
            font-size: 12px;
            cursor: pointer;
        }

        #hari-filter {
            position: absolute;
            top: 145px;
            font-size: 12px;
            cursor: pointer;
        }

        #kabupaten-filter {
            position: absolute;
            top: 200px;
            width:110px;
            font-size: 12px;
            cursor: pointer;
        }

        #filtered-count {
            position: absolute;
            top: 235px;
            font-size: 12px;
            font-weight: bold;
            font-family: arial;
        }

        .hidden {
            display: none;
        }

        #toggle-filter-button {
            position: absolute;
            top: 150px;
            left: 10px;
            width: 40px;
            height: 40px;
            padding: 15px 15px;
            background-color: #E57C23;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            background-image: url('<?= base_url('sigali/') ?>assets/images/filter24.png');
            background-repeat: no-repeat;
            background-position: center;
            z-index: 1;
        }

        #toggle-filter-button:hover {
            background-color: #025464;
        }

        #toggle-filter-button:focus {
            outline: none;
        }

        /* Gaya default untuk .chart-container */
        .chart-container {
            position: absolute;
            background-color: white;
            border-radius: 10px;
            float: right;
            right: 10px;
            bottom: 40px;
            width: 30%;
            padding: 20px;
            max-height: 600px;
            z-index: 3;
            display:none;
        }

        /* Gaya tambahan untuk tampilan ponsel */
        @media (max-width: 767px) {
            .chart-container {
                width: 80%;
                /* Mengisi seluruh lebar layar pada ponsel */
                right: 15;
                /* Pindahkan ke kanan penuh pada ponsel */
                bottom: 40px;
                /* Pindahkan ke bawah penuh pada ponsel */
                max-height: 40%;
                /* Isi seluruh tinggi layar pada ponsel */
                border-radius: 10px;
                /* Hapus border-radius pada ponsel jika diperlukan */
                display:none;
            }
        }

        #tahunSelect {
            width: 60%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            font-size: 14px;
        }

        /* Style for the toggle chart button */
        #toggleChartButton {
            position: absolute;
            bottom: 45px;
            right: 15px;
            width: 40px;
            height: 40px;
            padding: 15px 15px;
            background-color: #E57C23;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            background-image: url('<?= base_url('sigali/') ?>assets/images/chart30.png');
            background-repeat: no-repeat;
            background-position: center;
            z-index: 4;
        }

        #toggleChartButton:hover {
            background-color: #0055A8;
            /* Hover color */
        }
        
        .select {
            position: absolute;
            bottom: 45px;
            left: 120px;
            height: 200px;
            width: 120px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            z-index: 1;
        }

        .select-container {
            flex-grow: 1;
        }

        #h35 {
            position: absolute;
            font-family: "Arial", sans-serif;
            top: 15px;
            font-size: 12px;
        }

        .select select {
            padding: 5px;
            font-size: 12px;
        }

        #tahun-filter {
            position: absolute;
            top: 35px;
            font-size: 12px;
            cursor: pointer;
        }
        
        .hidden {
            display: none;
        }

        #selected-count {
            position: absolute;
            top: 175px;
            font-size: 12px;
            font-weight: bold;
            font-family: arial;
        }

        #toggle-select-button {
            position: absolute;
            bottom: 40px;
            left: 10px;
              width: 100px;
              height: 25px;
              border-radius: 5px;
              background-color: #025464;
              border: none;
              cursor: pointer;
              z-index: 4;
              display: flex; /* Menggunakan display: flex; */
              align-items: center; /* Pusatkan secara vertikal */
              justify-content: center; /* Pusatkan secara horizontal */
              font-size: 12px;
              color: #fff; /* Mengatur warna teks menjadi putih */
        }

        #toggle-select-button:hover {
            background-color: #025464;
        }

        #toggle-select-button:focus {
            outline: none;
        }
        
        #legend {
          position: absolute;
          top: 100px;
          right:60px;
          z-index: 3;
          width: 200px;
          height: 325px;
          border-radius:10px;
          font-size:12px;
          background-color: white;
          display: none;
        }
        
        .legend-item {
            position:relative;
            top:15px;
            left:10px;
          display: flex; /* Menggunakan display flex untuk mengatur tata letak */
          align-items: center; /* Pusatkan elemen secara vertikal */
        }
        
        .legend-symbol {
          width: 10px;
          height: 10px;
          margin-right: 10px; /* Jarak antara symbol dan label */
          /*background-color: blue;*/
          border-radius: 50%;
        }
        
        .legend-label {
          flex-grow: 1; /* Biarkan label mengisi sisa ruang yang tersedia */
        }
        
        /* Style for the toggle chart button */
        #toggleLegendButton {
            position: absolute;
            top: 120px;
            right: 12px;
            width: 40px;
            height: 40px;
            padding: 15px 15px;
            background-color: #E57C23;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            background-image: url('<?= base_url('sigali/') ?>assets/images/info30.png');
            background-repeat: no-repeat;
            background-position: center;
            z-index: 4;
        }

        #toggleLegendButton:hover {
            background-color: #0055A8;
            /* Hover color */
        }

        .layer-switcher .panel {
            position: fixed;
            right: 55px;
            margin: 0;
            /*border: 2px solid rgba(201, 201, 201, 1);*/
            border-radius: 10px;
            background-color: white;
            display: none;
            max-height: inherit;    
            height: 100%;
            width: 100%;
            max-height: 400px;   
            max-width: 250px;
            /* box-sizing: border-box; */
            overflow-y: auto;
            z-index:2;
          }
          
          /* CSS untuk elemen kontrol */
            .map-control {
              position: absolute;
            top: 170px;
            right: 11px;
            width: 40px;
            height: 40px;
            padding: 15px 15px;
            background-color: #E57C23;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            background-image: url('<?= base_url('sigali/') ?>assets/images/compass24.png');
            background-repeat: no-repeat;
            background-position: center;
            z-index: 4;
            }
            
            /* Gaya tombol kontrol */
            .map-control button {
              padding: 5px 10px;
              font-size: 14px;
              cursor: pointer;
            }
            
            #panduan-button {
              position: absolute;
              top: 20px;
              right: 75px;
              width: 80px;
              height: 30px;
              border-radius: 5px;
              background-color: #025464;
              border: none;
              cursor: pointer;
              z-index: 4;
              display: flex; /* Menggunakan display: flex; */
              align-items: center; /* Pusatkan secara vertikal */
              justify-content: center; /* Pusatkan secara horizontal */
              font-size: 16px;
              color: #fff; /* Mengatur warna teks menjadi putih */
            }

            
            .popup-panduan {
              display: none;
              position: fixed;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              background-color: rgba(0, 0, 0, 0.7);
              z-index: 6;
            }
            
            .popup-content-panduan {
              background-color: #fff;
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
              padding: 20px;
              border-radius:10px;
              text-align: center;
            }
            
            .close-button-panduan {
              position: absolute;
              top: 10px;
              right: 10px;
              font-size: 20px;
              cursor: pointer;
            }
            

            .legendhm {
                position: absolute;
                bottom: -4px;
                right: 40px;
              display: flex;
              justify-content: center;
              align-items: center;
              /*background-color: white;*/
              padding: 10px;
              z-index: 3;
            }
            
            .gradient {
              width: 100px;
              height: 20px;
              background: linear-gradient(to right, red, orange, yellow);
            }
            
            .image-container {
                height: 400px; /* Tinggi yang diinginkan untuk div container */
                width: 300px; /* Lebar yang diinginkan untuk div container */
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden; /* Mengatasi gambar yang lebih besar */
            }
            
            .image-container img {
                max-height: 100%; /* Gambar akan menyesuaikan tinggi div */
                max-width: 100%; /* Gambar akan menyesuaikan lebar div */
            }

            .welcome-popup-overlay {
                position: fixed; /* Pastikan elemen ini memiliki posisi tetap */
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.7); /* Latar belakang semi-transparan */
                display: flex; /* Menggunakan display flex untuk pemosisian tengah */
                justify-content: center; /* Posisi tengah secara horizontal */
                align-items: center; /* Posisi tengah secara vertikal */
                z-index: 9999; /* Z-index tinggi untuk tampil di atas elemen lain */
            }
            
            .welcome-popup {
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0px 0px 10px 0px #000;
                text-align: center;
                max-width: 80%;
                position: relative; /* Tambahkan properti posisi relatif */
            }
            
            .close-button-welcome {
                position: absolute;
                top: 10px;
                right: 10px;
                cursor: pointer;
            }
    </style>
</head>

<body>
    <header id="header" class="fixed-top d-flex align-items-center" style="height: 5%; background-color: #025464;">
        <div class=" container d-flex align-items-center justify-content-between">

            <h1 class="logo" style="font-size: 14px; text-decoration: none; border-left: none; margin-right: auto; text-transform: none;"><a href="<?= base_url('Home') ?>">Pemetaan Lokasi Kejahatan Jalanan</a></h1>

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto" href="<?= base_url('Home') ?>">Halaman Utama</a></li>
              <li><a class="nav-link scrollto" href="<?= base_url('Home #about') ?>">Tentang Sistem</a></li>
              <li class="dropdown"><a href="#"><span>Fitur</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="<?= base_url('Home/peta') ?>">Peta</a></li>
                  <li><a href="<?= base_url('Home/spatiotemporal') ?>">Spatio-Temporal</a></li>
                  <li><a href="<?= base_url('Home/data') ?>">Data tabular</a></li>
                  <li class="dropdown"><a><span>Informasi kontak</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="<?= base_url('Home/kontakps') ?>">Kontak Polsek</a></li>
                      <li><a href="<?= base_url('Home/kontakrs') ?>">Kontak Rumah Sakit</a></li>
                    </ul>
                  </li>
                  <li><a href="<?= base_url('Home/edukasi') ?>">Edukasi</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="<?= base_url('Home #why-us') ?>">Tips & Trik</a></li>
              <li><a class="nav-link scrollto" href="<?= base_url('Home #services') ?>">Layanan</a></li>
              <li><a class="nav-link scrollto" href="<?= base_url('Home #footer') ?>">Hubungi Kami</a></li>
              <li><a class="nav-link scrollto" href="<?= base_url('auth/login') ?>">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

        </div>
    </header>

    <div id="map">
        <div id="welcome-popup-overlay" class="welcome-popup-overlay">
    <div id="welcome-popup" class="welcome-popup">
        <span class="close-button-welcome" onclick="closeWelcomePopup()">&times;</span>
        <h5 style="font-size:18px"><b><u>Perhatian</u></b></h5>
        <p style="font-size:13px">Data yang ditampilkan adalah persebaran lokasi kejahatan jalanan di Daerah Istimewa Yogyakarta yang bersumber dari Kantor Kepolisian Resor untuk keperluan penelitian dan akademis. Harap informasi yang disajikan tidak disalahgunakan.
        <br><br>Untuk melihat persebaran lokasi kejahatan jalanan tiap kalurahan, silakan aktifkan layer batas administrasi. Panduan lengkap dapat diakses pada menu <b>Panduan</b>.</p>
    </div>
    </div>
        
        <!--<div id="map" style="width: 100%; height: 400px;"></div>-->
        
        <button id="compass-button" class="map-control" onclick="resetMapOrientation()"></button>
          
        <button id="toggleChartButton" onclick="toggleChartVisibility()"></button>
        
        <button id="panduan-button">Panduan</button>

        <div id="panduan-popup" class="popup-panduan">
            <div class="popup-content-panduan">
                <span class="close-button-panduan" onclick="closePopup()">&times;</span>
                <h4>Panduan Penggunaan</h4>
                <p>Berikut ini adalah panduan penggunaan <br> sistem informasi</p>
                <!-- Isi panduan Anda di sini -->
                <div class="image-container">
                    <img src="<?= base_url('sigali/') ?>assets/images/menupanduan.png" alt="Panduan Gambar" />
                </div>
            </div>
        </div>

        <div id="chart" class="chart-container">
            <canvas id="barChart" width="400" height="200"></canvas>
            <label for="tahunSelect" style="font-size: 14px;">Pilih Tahun</label>
            <select id="tahunSelect">
                <option value="">Semua Tahun</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
            </select>
        </div>
        
        <div class="select hidden">
            <h3 id="h35">Data Tahunan</h3>
            <label>
              <input type="checkbox" id="year-2023"> 2023 <br>
              <input type="checkbox" id="year-2022"> 2022 <br>
              <input type="checkbox" id="year-2021"> 2021 <br>
              <input type="checkbox" id="year-2020"> 2020 <br>
              <input type="checkbox" id="year-2019"> 2019 <br>
              <input type="checkbox" id="year-2018"> 2018 <br>
            </label><br>
            <span id="selected-count"></span>
        </div>
        <button id="toggle-select-button" onclick="toggleSelect()">Data Tahunan</button>

        <button id="homeButton"></button>
        <button id="geolocation-button"></button>

        <div class="search-container" style="font-size: 13px;">
            <input type="text" id="searchInput" placeholder="Masukkan kata kunci...">
            <button id="searchButton">Cari...</button>
            <ul id="suggestions"></ul>
        </div>

        <!-- Di dalam elemen <a>, tambahkan class "telepon" -->
        <a href="tel:110" class="telepon" style="position: absolute;
        bottom: 80px; left: 10px;"></a>

        <div class="legendhm">
            <span style="font-size: 11px; position: relative; right:5px;">Intensitas <br> Tinggi  </span>
            <span class="gradient"></span>
            <span style="font-size: 11px; position: relative; left:5px;">  Intensitas <br> Rendah</span>
          </div>

        
        <div class="navibar hidden">
            <h3 id="h31">Filter Tahun</h3>
            <select id="year-filter">
                <option value="">Semua Tahun</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
            </select>
            <h3 id="h32">Filter Bulan</h3>
            <select id="bulan-filter">
                <option value="">Semua Bulan</option>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
            </select>
            <h3 id="h33">Filter Hari</h3>
            <select id="hari-filter">
                <option value="">Semua Hari</option>
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
                <option value="Sabtu">Sabtu</option>
                <option value="Minggu">Minggu</option>
            </select>
            <h3 id="h34">Filter Status Data</h3>
            <select id="kabupaten-filter">
                <option value="">Semua Status</option>
                <option value="Teridentifikasi">Teridentifikasi</option>
                <option value="Tidak teridentifikasi dengan baik">Tidak Teridentifikasi dengan Baik</option>
            </select>
            <span id="filtered-count"></span>
        </div>
        <button id="toggle-filter-button" onclick="toggleFilter()"></button>
        
        <!-- Popup for point features -->
        <div id="point-popup" class="popup">
            <div id="point-popup-content" class="popup-content"></div>
            <a href="#" id="point-popup-closer" class="popup-closer"><i class="fas fa-times"></i></a>
        </div>

        <!-- Popup for administrative boundaries features -->
        <div id="boundary-popup" class="popup">
            <div id="boundary-popup-content" class="popup-content"></div>
            <a href="#" id="boundary-popup-closer" class="popup-closer"><i class="fas fa-times"></i></a>
        </div>
        
        <button id="toggleLegendButton" onclick="toggleLegendVisibility()"></button>
        
        <div id="legend">
          <h5 style="position:relative; top:10px; left: 10px">Legenda Peta</h5>
          <div class="legend-item">Titik Kejahatan Jalanan</div>

          <!-- Legenda untuk titik dari pointLayer -->
          <div class="legend-item">
            <div class="legend-symbol point-symbol" style="background-color: rgb(129, 178, 20);"></div>
            <div class="legend-label">Data kejahatan jalanan 2018</div>
          </div>
        
          <!-- Legenda untuk titik dari pointLayer2 -->
          <div class="legend-item">
            <div class="legend-symbol point-symbol" style="background-color: rgb(137, 95, 171);"></div>
            <div class="legend-label">Data kejahatan jalanan 2019</div>
          </div>
        
          <!-- Legenda untuk titik dari pointLayer3 -->
          <div class="legend-item">
            <div class="legend-symbol point-symbol" style="background-color: rgb(33, 51, 99);"></div>
            <div class="legend-label">Data kejahatan jalanan 2020</div>
          </div>
        
          <!-- Legenda untuk titik dari pointLayer4 -->
          <div class="legend-item">
            <div class="legend-symbol point-symbol" style="background-color: rgb(38, 77, 217);"></div>
            <div class="legend-label">Data kejahatan jalanan 2021</div>
          </div>
        
          <!-- Legenda untuk titik dari pointLayer5 -->
          <div class="legend-item">
            <div class="legend-symbol point-symbol" style="background-color: rgb(33, 156, 144);"></div>
            <div class="legend-label">Data kejahatan jalanan 2022</div>
          </div>
          
          <!-- Legenda untuk titik dari pointLayer5 -->
          <div class="legend-item">
            <div class="legend-symbol point-symbol" style="background-color: rgb(205, 17, 59);"></div>
            <div class="legend-label">Data kejahatan jalanan 2023</div>
          </div>
        
         <br>
          <!-- Legenda untuk poligon -->
          <div class="legend-item">Batas Administrasi</div>

          <!-- Legenda untuk batas kabupaten/kota -->
            <div class="legend-item">
            <div class="legend-symbol boundary-symbol">
                <img src="<?= base_url('sigali/') ?>assets/images/polysleman.png" alt="Kabupaten Sleman" style="position: relative; top: -7px; left: -7px;">
            </div>
            <div class="legend-label">Kabupaten Sleman</div>
            </div>
            
            <div class="legend-item">
            <div class="legend-symbol boundary-symbol">
                <img src="<?= base_url('sigali/') ?>assets/images/polykota.png" alt="Kota Yogyakarta" style="position: relative; top: -7px; left: -7px;">
            </div>
            <div class="legend-label">Kota Yogyakarta</div>
            </div>
            
            <div class="legend-item">
            <div class="legend-symbol boundary-symbol">
                <img src="<?= base_url('sigali/') ?>assets/images/polybantul.png" alt="Kabupaten Bantul" style="position: relative; top: -7px; left: -7px;">
            </div>
            <div class="legend-label">Kabupaten Bantul</div>
            </div>
            
            <div class="legend-item">
            <div class="legend-symbol boundary-symbol">
                <img src="<?= base_url('sigali/') ?>assets/images/polykulprog.png" alt="Kabupaten Kulon Progo" style="position: relative; top: -7px; left: -7px;">
            </div>
            <div class="legend-label">Kabupaten Kulon Progo</div>
            </div>
            
            <div class="legend-item">
            <div class="legend-symbol boundary-symbol">
                <img src="<?= base_url('sigali/') ?>assets/images/polygk.png" alt="Kabupaten Gunung Kidul" style="position: relative; top: -7px; left: -7px;">
            </div>
            <div class="legend-label">Kabupaten Gunung Kidul</div>
            </div>

        <script>
            var mapView = new ol.View({
                center: ol.proj.fromLonLat([110.41986130453297, -7.855509763821387]),
                zoom: 9.5,
            });
            
            var currentResolution = mapView.getResolution();

            // Tampilkan resolusi dalam console atau di elemen HTML yang sesuai
            console.log("Resolusi Peta Saat Ini: " + currentResolution);

            var map = new ol.Map({
                target: 'map',
                view: mapView,
                controls: []
            });
            
            // // Tambahkan kontrol zoom in dan zoom out
            // var zoomControl = new ol.control.Zoom();
            // map.addControl(zoomControl);
            
            // Fungsi untuk membuka popup panduan
            function openPopup() {
              var popup = document.getElementById('panduan-popup');
              popup.style.display = 'block';
            }
            
            // Fungsi untuk menutup popup panduan
            function closePopup() {
              var popup = document.getElementById('panduan-popup');
              popup.style.display = 'none';
            }
            
            // Event listener untuk tombol panduan
            document.getElementById('panduan-button').addEventListener('click', openPopup);


            var noneTile = new ol.layer.Tile({
                title: 'None',
                type: 'base',
                visible: false
            });

            var osmTile = new ol.layer.Tile({
                title: 'Open Street Map',
                visible: true,
                type: 'base',
                source: new ol.source.OSM()
            });
            
            var googleSatelliteTile = new ol.layer.Tile({
                title: 'Google Satellite',
                type: 'base',
                visible: false, // Sesuaikan dengan kebutuhan Anda
                source: new ol.source.XYZ({
                    url: 'https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', // URL tile Google Satellite
                    maxZoom: 20, // Tingkat zoom maksimum
                }),
            });

            //group layer
            var baseGroup = new ol.layer.Group({
                title: 'Base Maps',
                fold: true,
                layers: [osmTile, googleSatelliteTile, noneTile]
            });
            map.addLayer(baseGroup);
            
            // Fungsi untuk mengembalikan orientasi ke utara (compass)
            function resetMapOrientation() {
              map.getView().setRotation(0);
            }
            
            document.getElementById('compass-button').addEventListener('click', resetMapOrientation);

            // Create an empty source for points
            var pointSource = new ol.source.Vector();
            var pointSource2 = new ol.source.Vector();
            var pointSource3 = new ol.source.Vector();
            var pointSource4 = new ol.source.Vector();
            var pointSource5 = new ol.source.Vector();
            
            // Buat objek warna berdasarkan tahun
            var colorByYear = {
                2018: 'rgb(129, 178, 20)',
                2019: 'rgb(137, 95, 171)',
                2020: 'rgb(33, 51, 99)',
                2021: 'rgb(38, 77, 217)', 
                2022: 'rgb(33, 156, 144)',
                2023: 'rgb(205, 17, 59)'
            };
            
            // Fungsi untuk membuat style berdasarkan tahun
            function createPointStyle(year) {
                return new ol.style.Style({
                    image: new ol.style.Circle({
                        radius: 6,
                        fill: new ol.style.Fill({
                            color: colorByYear[year] || 'rgb(64, 66, 69)'  // Jika tahun tidak ada dalam objek, gunakan warna default
                        }),
                        stroke: new ol.style.Stroke({
                            color: 'white',
                            width: 1.5
                        })
                    })
                });
            }
            
            // Function to add points to the source with style based on year
            function addPointsWithStyle(source, data) {
                data.forEach(function(value) {
                    var point = new ol.Feature({
                        geometry: new ol.geom.Point(ol.proj.fromLonLat([value.longitude, value.latitude])),
                        tkp: value.tkp,
                        tindak_pidana: value.tindak_pidana,
                        tahun: value.tahun,
                        bulan: value.bulan,
                        hari: value.hari,
                        tanggal: value.tanggal,
                        jam: value.waktu,
                        status: value.status
                    });
            
                    // Dapatkan style berdasarkan tahun
                    var yearStyle = createPointStyle(value.tahun);
            
                    // Set style untuk fitur
                    point.setStyle(yearStyle);
            
                    source.addFeature(point);
                });
            }
            
            // Fetch data from PHP variables
            var slemanData = <?= json_encode($lokasi_sleman) ?>;
            var kotaData = <?= json_encode($lokasi_kota) ?>;
            var bantulData = <?= json_encode($lokasi_bantul) ?>;
            var kulprogData = <?= json_encode($lokasi_kulprog) ?>;
            var gunkidData = <?= json_encode($lokasi_gunkid) ?>;
            
            // Panggil addPointsWithStyle untuk menambahkan titik ke sumber dengan style yang sesuai
            addPointsWithStyle(pointSource, slemanData);
            addPointsWithStyle(pointSource2, kotaData);
            addPointsWithStyle(pointSource3, bantulData);
            addPointsWithStyle(pointSource4, kulprogData);
            addPointsWithStyle(pointSource5, gunkidData);

            // Create the layer for points using the source
            var pointLayer = new ol.layer.Vector({
                title: 'Kejahatan Jalanan Sleman',
                source: pointSource
            });

            var pointLayer2 = new ol.layer.Vector({
                title: 'Kejahatan Jalanan Kota Jogja',
                source: pointSource2
            });

            var pointLayer3 = new ol.layer.Vector({
                title: 'Kejahatan Jalanan Bantul',
                source: pointSource3
            });

            var pointLayer4 = new ol.layer.Vector({
                title: 'Kejahatan Jalanan Kulon Progo',
                source: pointSource4
            });

            var pointLayer5 = new ol.layer.Vector({
                title: 'Kejahatan Jalanan Gunung Kidul',
                source: pointSource5
            });

            // BATAS ADMINSTRASI
            // Buat sumber vektor dari GeoJSON
            var batasSource = new ol.source.Vector({
                url: '<?= base_url('sigali/') ?>data/batas_administrasi.geojson',
                format: new ol.format.GeoJSON(),
            });

            // Buat layer vektor
            var batasLayer = new ol.layer.Vector({
                title: 'Batas Administrasi',
                source: batasSource,
                visible: false
            });

            // LAYER GRUP KJ
            var kjGroup = new ol.layer.Group({
                title: 'Kejahatan Jalanan',
                fold: true,
                layers: [pointLayer, pointLayer2, pointLayer3, pointLayer4, pointLayer5]
            });
            map.addLayer(kjGroup);
            
            //MENAMBAHKAN LAYER KE PETA
            map.addLayer(batasLayer);

            // Menetapkan indeks tampilan untuk layer-layer
            kjGroup.setZIndex(1);
            batasLayer.setZIndex(0); // Layer poligon

            // PENGATURAN STYLE
            // Create the default style for points
            // var defaultPointStyle2018 = createPointStyle(2018)
            // var defaultPointStyle2019 = createPointStyle(2019)
            // var defaultPointStyle2020 = createPointStyle(2020)
            // var defaultPointStyle2021 = createPointStyle(2021)
            // var defaultPointStyle2022 = createPointStyle(2022)
            // var defaultPointStyle2023 = createPointStyle(2023)

            // var selectedPointStyle = new ol.style.Style({
            //     image: new ol.style.Circle({
            //         radius: 8,
            //         fill: new ol.style.Fill({
            //             color: 'red'
            //         }),
            //         stroke: new ol.style.Stroke({
            //             color: 'white',
            //             width: 2
            //         })
            //     })
            // });

            // 
            
            // pointLayer.setStyle(function(feature) {
            //     var clicked = feature.get('clicked');
            //     var year = feature.get('tahun');
            
            //     if (clicked) {
            //         return selectedPointStyle;
            //     } else if (year === 2018) {
            //         return defaultPointStyle2018;
            //     } else if (year === 2019) {
            //         return defaultPointStyle2019;
            //     } else if (year === 2020) {
            //         return defaultPointStyle2020;
            //     } else if (year === 2021) {
            //         return defaultPointStyle2021;
            //     } else if (year === 2022) {
            //         return defaultPointStyle2022;
            //     } else if (year === 2023) {
            //         return defaultPointStyle2023;
            //     }
            //     // Mengembalikan default style jika tidak ada kondisi yang sesuai
            //     return selectedPointStyle;
            // });

            // pointLayer2.setStyle(function(feature) {
            //     var clicked = feature.get('clicked');
            //     return clicked ? selectedPointStyle : defaultPointStyle2;
            // });

            // pointLayer3.setStyle(function(feature) {
            //     var clicked = feature.get('clicked');
            //     return clicked ? selectedPointStyle : defaultPointStyle3;
            // });

            // pointLayer4.setStyle(function(feature) {
            //     var clicked = feature.get('clicked');
            //     return clicked ? selectedPointStyle : defaultPointStyle4;
            // });

            // pointLayer5.setStyle(function(feature) {
            //     var clicked = feature.get('clicked');
            //     return clicked ? selectedPointStyle : defaultPointStyle5;
            // });

            // Function to create default boundary style based on KAB_KOTA value
            function createDefaultBoundaryStyle(kabKota) {
                if (kabKota === 'Sleman') {
                    return new ol.style.Style({
                        fill: new ol.style.Fill({
                            color: 'rgba(241, 26, 123, 0.2)'
                        }),
                        stroke: new ol.style.Stroke({
                            color: 'rgba(241, 26, 123, 1)',
                            width: 1
                        })
                    });
                } else if (kabKota === 'Yogyakarta') {
                    return new ol.style.Style({
                        fill: new ol.style.Fill({
                            color: 'rgba(50, 107, 168, 0.2)'
                        }),
                        stroke: new ol.style.Stroke({
                            color: 'rgb(50, 107, 168)',
                            width: 1
                        })
                    });
                } else if (kabKota === 'Bantul') {
                    return new ol.style.Style({
                        fill: new ol.style.Fill({
                            color: 'rgba(142, 168, 50, 0.2)'
                        }),
                        stroke: new ol.style.Stroke({
                            color: 'rgb(142, 168, 50)',
                            width: 1
                        })
                    });
                } else if (kabKota === 'Kulon Progo') {
                    return new ol.style.Style({
                        fill: new ol.style.Fill({
                            color: 'rgba(113, 117, 113, 0.2)'
                        }),
                        stroke: new ol.style.Stroke({
                            color: 'rgb(113, 117, 113)',
                            width: 1
                        })
                    });
                } else if (kabKota === 'Gunungkidul') {
                    return new ol.style.Style({
                        fill: new ol.style.Fill({
                            color: 'rgba(255, 112, 51, 0.2)'
                        }),
                        stroke: new ol.style.Stroke({
                            color: 'rgb(255, 112, 51)',
                            width: 1
                        })
                    });
                } else {
                    // Default style for unknown values
                    return new ol.style.Style({
                        fill: new ol.style.Fill({
                            color: 'rgba(0, 0, 0, 0)'
                        }),
                        stroke: new ol.style.Stroke({
                            color: 'black',
                            width: 1
                        })
                    });
                }
            }

            // Create the selected style for boundaries
            var selectedBoundaryStyle = new ol.style.Style({
                fill: new ol.style.Fill({
                    color: 'rgba(255, 0, 0, 0.1)'
                }),
                stroke: new ol.style.Stroke({
                    color: 'red',
                    width: 2
                })
            });

            // Set the styles for the boundary layer
            batasLayer.setStyle(function(feature) {
                var kabKota = feature.get('KAB_KOTA'); // Get the value of "KAB_KOTA" from the feature properties
                var clicked = feature.get('clicked');

                // Create the default boundary style based on KAB_KOTA
                var defaultBoundaryStyle = createDefaultBoundaryStyle(kabKota);

                return clicked ? selectedBoundaryStyle : defaultBoundaryStyle;
            });

            originalFeatures = pointSource.getFeatures();
            originalFeatures2 = pointSource2.getFeatures();
            originalFeatures3 = pointSource3.getFeatures();
            originalFeatures4 = pointSource4.getFeatures();
            originalFeatures5 = pointSource5.getFeatures();
            
            //SELECT TAHUN
            function filterByYear(selectedYears, pointSource, pointLayer) {
                var filteredFeatures = pointSource.getFeatures().filter(function (feature) {
                    var year = feature.get('tahun');
                    var showFeature = true;
            
                    if (selectedYears.length > 0 && !selectedYears.includes(year)) {
                        showFeature = false;
                    }
            
                    return showFeature;
                });
            
                var filteredSource = new ol.source.Vector({
                    features: filteredFeatures,
                });
            
                pointLayer.setSource(filteredSource);
                
                return filteredFeatures;
            }
        
            function updateFilter1() {
                var selectedYears = [];
                var yearCheckboxes = document.querySelectorAll('input[type="checkbox"]');
                
                yearCheckboxes.forEach(function (checkbox) {
                    if (checkbox.checked) {
                        selectedYears.push(checkbox.id.split('-')[1]);
                    }
                });
                
                // Filter for pointSource 1
                var filteredFeatures = filterByYear(selectedYears, pointSource, pointLayer);
                
                // Repeat the filter process for pointSource 2, 3, 4, and 5
                var filteredFeatures2 = filterByYear(selectedYears, pointSource2, pointLayer2);
                var filteredFeatures3 = filterByYear(selectedYears, pointSource3, pointLayer3);
                var filteredFeatures4 = filterByYear(selectedYears, pointSource4, pointLayer4);
                var filteredFeatures5 = filterByYear(selectedYears, pointSource5, pointLayer5);
                
                // Calculate the total filtered features
                var totalFilteredFeatures = filteredFeatures.length + filteredFeatures2.length + filteredFeatures3.length + filteredFeatures4.length + filteredFeatures5.length;
                
                // Update the filtered count
                var filteredCountElement = document.getElementById('selected-count');
                filteredCountElement.textContent = 'Jumlah Data: ' + totalFilteredFeatures;
            }
            
            var yearCheckboxes = document.querySelectorAll('input[type="checkbox"]');
            yearCheckboxes.forEach(function (checkbox) {
                checkbox.addEventListener('change', updateFilter1);
            });
            
            var pointSources = [pointSource, pointSource2, pointSource3, pointSource4, pointSource5];
            var pointLayers = [pointLayer, pointLayer2, pointLayer3, pointLayer4, pointLayer5];
            
            pointSources.forEach(function (pointSource, index) {
                pointSource.on('change', function() {
                    if (pointSource.getState() === 'ready') {
                        originalFeatures = pointSource.getFeatures();
                        updateFilter1();
                    }
                });
            });

            function toggleSelect() {
                var filterSelect = document.querySelector('.select');
                filterSelect.classList.toggle('hidden');
            }

            // FILTER
            function updateFilter() {
                var selectedYear = document.getElementById('year-filter').value;
                var selectedKabupaten = document.getElementById('kabupaten-filter').value;
                var selectedBulan = document.getElementById('bulan-filter').value;
                var selectedHari = document.getElementById('hari-filter').value;

                var filteredFeatures = pointSource.getFeatures().filter(function(feature) {
                    var year = feature.get('tahun');
                    var kabupaten = feature.get('status');
                    var bulan = feature.get('bulan');
                    var hari = feature.get('hari');

                    var showFeature = true;

                    if (selectedYear && year != selectedYear) {
                        showFeature = false;
                    }

                    if (selectedKabupaten && kabupaten != selectedKabupaten) {
                        showFeature = false;
                    }

                    if (selectedBulan && bulan != selectedBulan) {
                        showFeature = false;
                    }

                    if (selectedHari && hari != selectedHari) {
                        showFeature = false;
                    }

                    return showFeature;
                });

                // Create a new source with filtered features
                var filteredSource = new ol.source.Vector({
                    features: filteredFeatures,
                });

                // Set sumber vektor yang terpisah untuk masing-masing layer
                pointLayer.setSource(new ol.source.Vector({
                    features: filteredFeatures
                }));

                // FILTER2
                var filteredFeatures2 = pointSource2.getFeatures().filter(function(feature) {
                    var year = feature.get('tahun');
                    var kabupaten = feature.get('status');
                    var bulan = feature.get('bulan');
                    var hari = feature.get('hari');

                    var showFeature = true;

                    if (selectedYear && year != selectedYear) {
                        showFeature = false;
                    }

                    if (selectedKabupaten && kabupaten != selectedKabupaten) {
                        showFeature = false;
                    }

                    if (selectedBulan && bulan != selectedBulan) {
                        showFeature = false;
                    }

                    if (selectedHari && hari != selectedHari) {
                        showFeature = false;
                    }

                    return showFeature;
                });

                // Create a new source with filtered features
                var filteredSource2 = new ol.source.Vector({
                    features: filteredFeatures2,
                });

                // Set sumber vektor yang terpisah untuk masing-masing layer
                pointLayer2.setSource(new ol.source.Vector({
                    features: filteredFeatures2
                }));

                // FILTER3
                var filteredFeatures3 = pointSource3.getFeatures().filter(function(feature) {
                    var year = feature.get('tahun');
                    var kabupaten = feature.get('status');
                    var bulan = feature.get('bulan');
                    var hari = feature.get('hari');

                    var showFeature = true;

                    if (selectedYear && year != selectedYear) {
                        showFeature = false;
                    }

                    if (selectedKabupaten && kabupaten != selectedKabupaten) {
                        showFeature = false;
                    }

                    if (selectedBulan && bulan != selectedBulan) {
                        showFeature = false;
                    }

                    if (selectedHari && hari != selectedHari) {
                        showFeature = false;
                    }

                    return showFeature;
                });

                // Create a new source with filtered features
                var filteredSource3 = new ol.source.Vector({
                    features: filteredFeatures3,
                });

                // Set sumber vektor yang terpisah untuk masing-masing layer
                pointLayer3.setSource(new ol.source.Vector({
                    features: filteredFeatures3
                }));

                // FILTER4
                var filteredFeatures4 = pointSource4.getFeatures().filter(function(feature) {
                    var year = feature.get('tahun');
                    var kabupaten = feature.get('status');
                    var bulan = feature.get('bulan');
                    var hari = feature.get('hari');

                    var showFeature = true;

                    if (selectedYear && year != selectedYear) {
                        showFeature = false;
                    }

                    if (selectedKabupaten && kabupaten != selectedKabupaten) {
                        showFeature = false;
                    }

                    if (selectedBulan && bulan != selectedBulan) {
                        showFeature = false;
                    }

                    if (selectedHari && hari != selectedHari) {
                        showFeature = false;
                    }

                    return showFeature;
                });

                // Create a new source with filtered features
                var filteredSource4 = new ol.source.Vector({
                    features: filteredFeatures4,
                });

                // Set sumber vektor yang terpisah untuk masing-masing layer
                pointLayer4.setSource(new ol.source.Vector({
                    features: filteredFeatures4
                }));

                // FILTER5
                var filteredFeatures5 = pointSource5.getFeatures().filter(function(feature) {
                    var year = feature.get('tahun');
                    var kabupaten = feature.get('status');
                    var bulan = feature.get('bulan');
                    var hari = feature.get('hari');

                    var showFeature = true;

                    if (selectedYear && year != selectedYear) {
                        showFeature = false;
                    }

                    if (selectedKabupaten && kabupaten != selectedKabupaten) {
                        showFeature = false;
                    }

                    if (selectedBulan && bulan != selectedBulan) {
                        showFeature = false;
                    }

                    if (selectedHari && hari != selectedHari) {
                        showFeature = false;
                    }

                    return showFeature;
                });

                // Create a new source with filtered features
                var filteredSource5 = new ol.source.Vector({
                    features: filteredFeatures5,
                });

                // Set sumber vektor yang terpisah untuk masing-masing layer
                pointLayer5.setSource(new ol.source.Vector({
                    features: filteredFeatures5
                }));

                //PERHITUNGAN TITIK
                // Update the filtered count
                var filteredCountElement = document.getElementById('filtered-count');
                var totalFilteredFeatures = filteredFeatures.length + filteredFeatures2.length + filteredFeatures3.length + filteredFeatures4.length + filteredFeatures5.length;
                filteredCountElement.textContent = 'Jumlah Data: ' + totalFilteredFeatures;
            }



            var yearFilter = document.getElementById('year-filter');
            var kabupatenFilter = document.getElementById('kabupaten-filter');
            var bulanFilter = document.getElementById('bulan-filter');
            var hariFilter = document.getElementById('hari-filter');

            yearFilter.addEventListener('change', updateFilter);
            kabupatenFilter.addEventListener('change', updateFilter);
            bulanFilter.addEventListener('change', updateFilter);
            hariFilter.addEventListener('change', updateFilter);

            pointSource.on('change', function() {
                if (pointSource.getState() === 'ready') {
                    originalFeatures = pointSource.getFeatures();
                    updateFilter();
                }
            });

            pointSource2.on('change', function() {
                if (pointSource2.getState() === 'ready') {
                    originalFeatures2 = pointSource2.getFeatures();
                    updateFilter();
                }
            });

            pointSource3.on('change', function() {
                if (pointSource3.getState() === 'ready') {
                    originalFeatures3 = pointSource3.getFeatures();
                    updateFilter();
                }
            });

            pointSource4.on('change', function() {
                if (pointSource4.getState() === 'ready') {
                    originalFeatures4 = pointSource4.getFeatures();
                    updateFilter();
                }
            });

            pointSource5.on('change', function() {
                if (pointSource5.getState() === 'ready') {
                    originalFeatures5 = pointSource5.getFeatures();
                    updateFilter();
                }
            });

            function toggleFilter() {
                var filterNavbar = document.querySelector('.navibar');
                filterNavbar.classList.toggle('hidden');
            }

            // FUNGSI PENCARIAN
            var searchInput = document.getElementById('searchInput');
            var suggestionsList = document.getElementById('suggestions');

            searchInput.addEventListener('input', function() {
                var keyword = this.value.toLowerCase();
                var suggestions = [];

                if (keyword.trim() !== '') {
                    pointSource.forEachFeature(function(feature) {
                        var name = feature.get('tkp');
                        if (name && name.toLowerCase().indexOf(keyword) !== -1) {
                            suggestions.push(name);
                        }
                    });

                    pointSource2.forEachFeature(function(feature) {
                        var name = feature.get('tkp');
                        if (name && name.toLowerCase().indexOf(keyword) !== -1) {
                            suggestions.push(name);
                        }
                    });

                    pointSource3.forEachFeature(function(feature) {
                        var name = feature.get('tkp');
                        if (name && name.toLowerCase().indexOf(keyword) !== -1) {
                            suggestions.push(name);
                        }
                    });

                    pointSource4.forEachFeature(function(feature) {
                        var name = feature.get('tkp');
                        if (name && name.toLowerCase().indexOf(keyword) !== -1) {
                            suggestions.push(name);
                        }
                    });

                    pointSource5.forEachFeature(function(feature) {
                        var name = feature.get('tkp');
                        if (name && name.toLowerCase().indexOf(keyword) !== -1) {
                            suggestions.push(name);
                        }
                    });

                    batasSource.forEachFeature(function(feature) {
                        var name = feature.get('alamat');
                        if (name && name.toLowerCase().indexOf(keyword) !== -1) {
                            suggestions.push(name);
                        }
                    });
                }

                showSuggestions(suggestions);
            });

            function showSuggestions(suggestions) {
                suggestionsList.innerHTML = '';

                if (suggestions.length > 0) {
                    suggestions.forEach(function(suggestion) {
                        var li = document.createElement('li');
                        li.textContent = suggestion;
                        suggestionsList.appendChild(li);

                        li.addEventListener('click', function() {
                            searchFeature(this.textContent);
                        });
                    });

                    suggestionsList.style.display = 'block'; // Tampilkan daftar saran
                } else {
                    suggestionsList.style.display = 'none'; // Sembunyikan daftar saran
                }
            }

            function searchFeature(keyword) {
                var pointFeatures = pointSource.getFeatures();
                var pointFeatures2 = pointSource2.getFeatures();
                var pointFeatures3 = pointSource3.getFeatures();
                var pointFeatures4 = pointSource4.getFeatures();
                var pointFeatures5 = pointSource5.getFeatures();
                var boundaryFeatures = batasSource.getFeatures();

                var foundPointFeature = false; // Flag untuk menandakan apakah fitur titik ditemukan
                var foundPointFeature2 = false; // Flag untuk menandakan apakah fitur titik ditemukan
                var foundPointFeature3 = false; // Flag untuk menandakan apakah fitur titik ditemukan
                var foundPointFeature4 = false; // Flag untuk menandakan apakah fitur titik ditemukan
                var foundPointFeature5 = false; // Flag untuk menandakan apakah fitur titik ditemukan
                var foundBoundaryFeature = false; // Flag untuk menandakan apakah fitur batas ditemukan

                pointFeatures.forEach(function(feature) {
                    var name = feature.get('tkp');
                    if (name && name.toLowerCase() === keyword.toLowerCase()) {
                        var geometry = feature.getGeometry();
                        var coordinate = geometry.getCoordinates();
                
                        // Set the desired zoom level
                        var zoomLevel = 17; // Change this to your desired zoom level
                
                        // Center the map on the feature's coordinates with the desired zoom level
                        map.getView().setCenter(coordinate);
                        map.getView().setZoom(zoomLevel);
                
                        // Mengatur warna dan gaya fitur yang dicari
                        feature.setStyle(selectedPointStyle);
                
                        foundPointFeature = true; // Set flag titik ditemukan
                    } else {
                        feature.setStyle(defaultPointStyle); // Reset warna dan gaya fitur yang tidak cocok
                    }
                });


                pointFeatures2.forEach(function(feature) {
                    var name = feature.get('tkp');
                    if (name && name.toLowerCase() === keyword.toLowerCase()) {
                        var geometry = feature.getGeometry();
                        var coordinate = geometry.getCoordinates();
                
                        // Set the desired zoom level
                        var zoomLevel = 17; // Change this to your desired zoom level
                
                        // Center the map on the feature's coordinates with the desired zoom level
                        map.getView().setCenter(coordinate);
                        map.getView().setZoom(zoomLevel);
                
                        // Mengatur warna dan gaya fitur yang dicari
                        feature.setStyle(selectedPointStyle);
                
                        foundPointFeature = true; // Set flag titik ditemukan
                    } else {
                        feature.setStyle(defaultPointStyle2); // Reset warna dan gaya fitur yang tidak cocok
                    }
                });

                pointFeatures3.forEach(function(feature) {
                    var name = feature.get('tkp');
                    if (name && name.toLowerCase() === keyword.toLowerCase()) {
                        var geometry = feature.getGeometry();
                        var coordinate = geometry.getCoordinates();
                
                        // Set the desired zoom level
                        var zoomLevel = 17; // Change this to your desired zoom level
                
                        // Center the map on the feature's coordinates with the desired zoom level
                        map.getView().setCenter(coordinate);
                        map.getView().setZoom(zoomLevel);
                
                        // Mengatur warna dan gaya fitur yang dicari
                        feature.setStyle(selectedPointStyle);
                
                        foundPointFeature = true; // Set flag titik ditemukan
                    } else {
                        feature.setStyle(defaultPointStyle3); // Reset warna dan gaya fitur yang tidak cocok
                    }
                });

                pointFeatures4.forEach(function(feature) {
                    var name = feature.get('tkp');
                    if (name && name.toLowerCase() === keyword.toLowerCase()) {
                        var geometry = feature.getGeometry();
                        var coordinate = geometry.getCoordinates();
                
                        // Set the desired zoom level
                        var zoomLevel = 17; // Change this to your desired zoom level
                
                        // Center the map on the feature's coordinates with the desired zoom level
                        map.getView().setCenter(coordinate);
                        map.getView().setZoom(zoomLevel);
                
                        // Mengatur warna dan gaya fitur yang dicari
                        feature.setStyle(selectedPointStyle);
                
                        foundPointFeature = true; // Set flag titik ditemukan
                    } else {
                        feature.setStyle(defaultPointStyle4); // Reset warna dan gaya fitur yang tidak cocok
                    }
                });

                pointFeatures5.forEach(function(feature) {
                    var name = feature.get('tkp');
                    if (name && name.toLowerCase() === keyword.toLowerCase()) {
                        var geometry = feature.getGeometry();
                        var coordinate = geometry.getCoordinates();
                
                        // Set the desired zoom level
                        var zoomLevel = 17; // Change this to your desired zoom level
                
                        // Center the map on the feature's coordinates with the desired zoom level
                        map.getView().setCenter(coordinate);
                        map.getView().setZoom(zoomLevel);
                
                        // Mengatur warna dan gaya fitur yang dicari
                        feature.setStyle(selectedPointStyle);
                
                        foundPointFeature = true; // Set flag titik ditemukan
                    } else {
                        feature.setStyle(defaultPointStyle5); // Reset warna dan gaya fitur yang tidak cocok
                    }
                });

                // Menghapus semua fitur dari batasLayer
                // batasLayer.getSource().clear();

                boundaryFeatures.forEach(function(feature) {
                    var name = feature.get('alamat');
                    if (name && name.toLowerCase() === keyword.toLowerCase()) {
                        var geometry = feature.getGeometry();
                        var extent = geometry.getExtent();
                        map.getView().fit(extent, {
                            duration: 1000
                        });

                        // Mengatur warna dan gaya fitur yang dicari
                        var kabKota = feature.get('KAB_KOTA'); // Get the value of "KAB_KOTA" from the feature properties
                        var defaultBoundaryStyle = createDefaultBoundaryStyle(kabKota);
                        feature.setStyle(selectedBoundaryStyle);

                        foundBoundaryFeature = true; // Set flag batas ditemukan

                        // Menambahkan fitur yang dicari ke batasLayer
                        batasLayer.getSource().addFeature(feature);

                        // Zoom ke extent fitur batas
                        map.getView().fit(extent, {
                            padding: [50, 50, 50, 50],
                            maxZoom: 18,
                            duration: 1000
                        });
                    } else {
                        var kabKota = feature.get('KAB_KOTA'); // Get the value of "KAB_KOTA" from the feature properties
                        var defaultBoundaryStyle = createDefaultBoundaryStyle(kabKota);
                        feature.setStyle(defaultBoundaryStyle); // Reset warna dan gaya fitur yang tidak cocok
                    }
                });


                // Jika tidak ditemukan fitur titik atau batas, tampilkan daftar saran
                if (!foundPointFeature && !foundBoundaryFeature) {
                    showSuggestions(getSuggestions());
                } else {
                    suggestionsList.style.display = 'none'; // Sembunyikan daftar saran
                }

                searchInput.value = ''; // Menghapus keyword yang tertulis
            }

            var searchButton = document.getElementById('searchButton');
            searchButton.textContent = 'Cari';
            searchButton.addEventListener('click', function() {
                var keyword = searchInput.value.toLowerCase();
                if (keyword.trim() !== '') {
                    searchFeature(keyword);
                }
                searchInput.value = ''; // Menghapus keyword yang tertulis
            });

            // FUNGSI PERHITUNGAN TITIK
            function countPointsInCurrentBoundary(boundaryFeature, pointSource, pointSource2, pointSource3, pointSource4, pointSource5) {
                var boundaryGeometry = boundaryFeature.getGeometry();
                var points1 = pointSource.getFeatures();
                var points2 = pointSource2.getFeatures();
                var points3 = pointSource3.getFeatures();
                var points4 = pointSource4.getFeatures();
                var points5 = pointSource5.getFeatures();

                var pointsCount1 = points1.filter(function(point) {
                    var pointGeometry = point.getGeometry();
                    var pointCoordinate = pointGeometry.getCoordinates();

                    // Periksa apakah titik berinteraksi dengan batas wilayah
                    return boundaryGeometry.intersectsCoordinate(pointCoordinate);
                }).length;

                var pointsCount2 = points2.filter(function(point) {
                    var pointGeometry = point.getGeometry();
                    var pointCoordinate = pointGeometry.getCoordinates();

                    // Periksa apakah titik berinteraksi dengan batas wilayah
                    return boundaryGeometry.intersectsCoordinate(pointCoordinate);
                }).length;

                var pointsCount3 = points3.filter(function(point) {
                    var pointGeometry = point.getGeometry();
                    var pointCoordinate = pointGeometry.getCoordinates();

                    // Periksa apakah titik berinteraksi dengan batas wilayah
                    return boundaryGeometry.intersectsCoordinate(pointCoordinate);
                }).length;

                var pointsCount4 = points4.filter(function(point) {
                    var pointGeometry = point.getGeometry();
                    var pointCoordinate = pointGeometry.getCoordinates();

                    // Periksa apakah titik berinteraksi dengan batas wilayah
                    return boundaryGeometry.intersectsCoordinate(pointCoordinate);
                }).length;

                var pointsCount5 = points5.filter(function(point) {
                    var pointGeometry = point.getGeometry();
                    var pointCoordinate = pointGeometry.getCoordinates();

                    // Periksa apakah titik berinteraksi dengan batas wilayah
                    return boundaryGeometry.intersectsCoordinate(pointCoordinate);
                }).length;

                return {
                    pointsCount1: pointsCount1,
                    pointsCount2: pointsCount2,
                    pointsCount3: pointsCount3,
                    pointsCount4: pointsCount4,
                    pointsCount5: pointsCount5
                };
            }

            // CHART
            // Calculate total data points for each layer
            var totalPoints1 = pointSource.getFeatures().length;
            var totalPoints2 = pointSource2.getFeatures().length;
            var totalPoints3 = pointSource3.getFeatures().length;
            var totalPoints4 = pointSource4.getFeatures().length;
            var totalPoints5 = pointSource5.getFeatures().length;

            // Create an array of layer names and their respective point counts
            var layerData = [{
                    label: 'Sleman',
                    data: totalPoints1
                },
                {
                    label: 'Kota Jogja',
                    data: totalPoints2
                },
                {
                    label: 'Bantul',
                    data: totalPoints3
                },
                {
                    label: 'Kulon Progo',
                    data: totalPoints4
                },
                {
                    label: 'Gunung Kidul',
                    data: totalPoints5
                }
            ];

            // Create a bar chart
            var ctx = document.getElementById('barChart').getContext('2d');
            var kabupatenColors = [
                'rgba(241, 26, 123, 1)', // Warna untuk Sleman
                'rgba(50, 107, 168, 1)', // Warna untuk Kota Jogja
                'rgba(142, 168, 50, 1)', // Warna untuk Bantul
                'rgba(113, 117, 113, 1)',// Warna untuk Kulon Progo
                'rgba(255, 112, 51, 1)'// Warna untuk Gunung Kidul
            ];

            var barChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: layerData.map(function(layer) {
                        return layer.label;
                    }),
                    datasets: [{
                        label: 'Kejahatan Jalanan per Kabupaten',
                        data: layerData.map(function(layer) {
                            return layer.data;
                        }),
                        backgroundColor: kabupatenColors, // Menggunakan array warna
                    }],
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Jumlah',
                            },
                        },
                    },
                    legend: {
                        display: false,
                    },
                },
                maintainAspectRatio: false, // Matikan aspek ratio
                responsive: true, // Aktifkan responsivitas
            });

            // FILTER TAMPILAN CHART
            // Function to filter data based on the selected year
            function filterDataByYear(data, selectedYear) {
                if (selectedYear === 'all') {
                    return data;
                } else {
                    return data.filter(function(value) {
                        return value.tahun === selectedYear;
                    });
                }
            }

            // Event listener for the 'tahun' dropdown
            var tahunSelect = document.getElementById('tahunSelect');
            tahunSelect.addEventListener('change', function() {
                var selectedYear = tahunSelect.value;

                // Check if Kota Yogyakarta has data for the specified years (2020, 2019, 2018)
                if (selectedYear === '2020' || selectedYear === '2019' || selectedYear === '2018') {
                    // Display an alert message
                    alert('Data kejadian kejahatan jalanan untuk Kota Yogyakarta tidak tersedia. Klik "Ok" untuk melanjutkan tampilan grafik');
                }

                // Filter the data based on the selected 'tahun'
                var slemanFilteredData = filterDataByYear(slemanData, selectedYear);
                var kotaFilteredData = filterDataByYear(kotaData, selectedYear);
                var bantulFilteredData = filterDataByYear(bantulData, selectedYear);
                var kulprogFilteredData = filterDataByYear(kulprogData, selectedYear);
                var gunkidFilteredData = filterDataByYear(gunkidData, selectedYear);

                // Calculate the total data points for each layer using the filtered data
                var totalPoints1 = slemanFilteredData.length;
                var totalPoints2 = kotaFilteredData.length;
                var totalPoints3 = bantulFilteredData.length;
                var totalPoints4 = kulprogFilteredData.length;
                var totalPoints5 = gunkidFilteredData.length;

                // Update the chart with the filtered data
                barChart.data.labels = ['Sleman', 'Kota Jogja', 'Bantul', 'Kulon Progo', 'Gunung Kidul'];
                barChart.data.datasets[0].data = [totalPoints1, totalPoints2, totalPoints3, totalPoints4, totalPoints5];
                barChart.update();
            });

            // MENGATUR VISIBILITAS GRAFIK
            function toggleChartVisibility() {
                var chartContainer = document.getElementById('chart');

                // Check the current display style
                if (chartContainer.style.display === 'none' || chartContainer.style.display === '') {
                    chartContainer.style.display = 'block'; // Show the chart container
                } else {
                    chartContainer.style.display = 'none'; // Hide the chart container
                }
            }


            // POPUP
            // Create overlay for point popup
            var pointPopupOverlay = new ol.Overlay({
                element: document.getElementById('point-popup'),
                autoPan: true,
                autoPanAnimation: {
                    duration:150
                }
            });
            map.addOverlay(pointPopupOverlay);

            // Get point popup element references
            var pointPopupCloser = document.getElementById('point-popup-closer');
            var pointPopupContent = document.getElementById('point-popup-content');

            // Close point popup when close button is clicked
            pointPopupCloser.onclick = function() {
                pointPopupOverlay.setPosition(undefined);
                pointPopupCloser.blur();
                // Reset the selected feature's styles to default
                if (selectedFeature) {
                    var layerName = selectedFeature.get('layerName'); // Assuming you have a layer name property
                    selectedFeature.set('clicked', false);
                    selectedFeature.setStyle(defaultPointStyles[layerName]);
                    selectedFeature = null; // Reset the selected feature reference
                }
                return false;
            };

            // Function to display the point popup
            function displayPointPopup(coordinate, content) {
                pointPopupContent.innerHTML = content;
                pointPopupOverlay.setPosition(coordinate);

                // Tambahkan link "Lihat lebih banyak" ke dalam konten popup
                var pointLink = document.createElement('a');
                pointLink.href = content.link; // Menggunakan URL dari atribut 'link' pada fitur titik

                // Tambahkan link ke konten popup
                pointPopupContent.appendChild(pointLink);
            }

            // Create overlay for boundary popup
            var boundaryPopupOverlay = new ol.Overlay({
                element: document.getElementById('boundary-popup'),
                autoPan: true,
                autoPanAnimation: {
                    duration: 150
                }
            });
            map.addOverlay(boundaryPopupOverlay);

            // Get boundary popup element references
            var boundaryPopupCloser = document.getElementById('boundary-popup-closer');
            var boundaryPopupContent = document.getElementById('boundary-popup-content');

            // Function to display the boundary popup
            function displayBoundaryPopup(coordinates, content) {
                boundaryPopupContent.innerHTML = content;
                boundaryPopupOverlay.setPosition(coordinates);
            }

            // Change cursor to pointer when hovering over features
            map.on('pointermove', function(e) {
                if (e.dragging) {
                    return;
                }
                var pixel = map.getEventPixel(e.originalEvent);
                var hit = map.hasFeatureAtPixel(pixel);
                map.getViewport().style.cursor = hit ? 'pointer' : '';
            });

            // ... (bagian sebelumnya)

            //FITUR KLIK
            var selectedFeature = null; // Store the reference to the selected feature

            // Define an object to store default styles for each layer
            var defaultPointStyles = {
                pointLayer,
                pointLayer2,
                pointLayer3,
                pointLayer4,
                pointLayer5,
                // ... Add default styles for other layers if needed
            };

            map.on('singleclick', function(evt) {
                var pointFeature = map.forEachFeatureAtPixel(evt.pixel, function(feature, layer) {
                    if (layer === pointLayer || layer === pointLayer2 || layer === pointLayer3 || layer === pointLayer4 || layer === pointLayer5) {
                        return feature;
                    }
                });

                var boundaryFeature = map.forEachFeatureAtPixel(evt.pixel, function(feature, layer) {
                    if (layer === batasLayer) {
                        return feature;
                    }
                });

                if (pointFeature) {
                    var coordinate = pointFeature.getGeometry().getCoordinates();
                    var content = '<strong>Kasus:</strong> ' + pointFeature.get('tindak_pidana') + '<br>' + '<strong>Lokasi:</strong> ' + pointFeature.get('tkp') + '<br>' +
                        '<strong>Waktu:</strong> ' + pointFeature.get('tanggal') +
                        '<a href="#" class="show-more">Lihat lebih banyak</a>' +
                        '<div class="more-content">' +
                        '<p><strong>Jam:</strong> ' + pointFeature.get('jam') + '</p>' +
                        '<p><strong>Status:</strong> ' + pointFeature.get('status') + '</p>' + '<a href="#" class="hide-content">Sembunyikan</a>' +
                        '</div>';

                    displayPointPopup(coordinate, content);
                    boundaryPopupOverlay.setPosition(undefined); // Hide boundary popup

                    // Set up event listener for the "Lihat lebih banyak" link
                    var showMoreLink = pointPopupContent.querySelector('.show-more');
                    var moreContent = pointPopupContent.querySelector('.more-content');

                    showMoreLink.addEventListener('click', function(event) {
                        event.preventDefault();
                        moreContent.style.display = 'block';
                        showMoreLink.style.display = 'none';
                    });

                    // Set up event listener for the "Sembunyikan" link inside "Lihat lebih banyak" content
                    var hideContentLink = pointPopupContent.querySelector('.hide-content');

                    hideContentLink.addEventListener('click', function(event) {
                        event.preventDefault();
                        moreContent.style.display = 'none';
                        showMoreLink.style.display = 'block';
                    });

                    // Clear the 'clicked' property and styles of the previously selected feature
                    if (selectedFeature) {
                        var layerName = selectedFeature.get('layerName'); // Assuming you have a layer name property
                        selectedFeature.set('clicked', false);
                        selectedFeature.setStyle(defaultPointStyles[layerName]);
                        selectedFeature = null; // Reset the selected feature reference
                    }

                    // Set the 'clicked' property and style for the newly selected point feature
                    pointFeature.set('clicked', false);
                    pointFeature.setStyle(selectedPointStyle);
                    selectedFeature = pointFeature;
                } else if (boundaryFeature) {
                    var coordinates = evt.coordinate;
                    var properties = boundaryFeature.getProperties();
                    var content = '<ul>';
                    for (var property in properties) {
                        if (properties.hasOwnProperty(property) && (property === 'KAL_KEL' || property === 'KEC_KAPN' || property === 'KAB_KOTA' || property === 'luas')) {
                            var alias = property === 'KAL_KEL' ? 'Kalurahan / Kelurahan' : property === 'KEC_KAPN' ? 'Kecamatan' : (property === 'KAB_KOTA' ? 'Kabupaten' : 'Luas');
                            var value = properties[property];

                            // Jika property adalah 'luas', tambahkan teks 'meter persegi'
                            if (property === 'luas') {
                                value += ' meter persegi';
                            }

                            content += '<li><b>' + alias + ':</b> ' + value + '</li>';
                        }
                    }

                    content += '</ul>';

                    // var kal_kel = properties['KAL_KEL']; // Ambil KAL_KEL dari fitur batasLayer
                    var pointsCount = countPointsInCurrentBoundary(boundaryFeature, pointSource, pointSource2, pointSource3, pointSource4, pointSource5);
                    var kal_kel = boundaryFeature.get('KAL_KEL');
                    content += '<p><strong>Jumlah Kasus di Kalurahan ' + kal_kel + ':</strong> ';

                    var nonZeroCounts = [];
                    if (pointsCount.pointsCount1 !== 0) {
                        nonZeroCounts.push(pointsCount.pointsCount1);
                    }

                    if (pointsCount.pointsCount2 !== 0) {
                        nonZeroCounts.push(pointsCount.pointsCount2);
                    }

                    if (pointsCount.pointsCount3 !== 0) {
                        nonZeroCounts.push(pointsCount.pointsCount3);
                    }

                    if (pointsCount.pointsCount4 !== 0) {
                        nonZeroCounts.push(pointsCount.pointsCount4);
                    }

                    if (pointsCount.pointsCount5 !== 0) {
                        nonZeroCounts.push(pointsCount.pointsCount5);
                    }

                    if (nonZeroCounts.length > 0) {
                        content += nonZeroCounts.join(' + ');
                    } else {
                        content += '0 </p>';
                    }

                    // PERHITUNGAN TITIK PER LUAS WILAYAH
                    // Mendapatkan nilai 'luas' dari fitur boundaryFeature
                    var luas = boundaryFeature.get('luas');

                    // Variabel untuk melacak apakah setidaknya satu pointsCount tidak 0
                    var adaPointsCountTidakNol = false;

                    // Menampilkan rasio kasus per unit luas untuk setiap pointsCount yang tidak nol
                    if (pointsCount.pointsCount1 !== 0) {
                        var titikPerUnitLuas1 = pointsCount.pointsCount1 / luas;
                        console.log('Rasio Titik per Unit Luas 1:', titikPerUnitLuas1);
                        content += '<p><strong>Rasio Kasus per Unit Luas :</strong> ' + titikPerUnitLuas1 + '</p>';
                        adaPointsCountTidakNol = true;
                    }

                    if (pointsCount.pointsCount2 !== 0) {
                        var titikPerUnitLuas2 = pointsCount.pointsCount2 / luas;
                        console.log('Rasio Titik per Unit Luas 2:', titikPerUnitLuas2);
                        content += '<p><strong>Rasio Kasus per Unit Luas :</strong> ' + titikPerUnitLuas2 + '</p>';
                        adaPointsCountTidakNol = true;
                    }

                    if (pointsCount.pointsCount3 !== 0) {
                        var titikPerUnitLuas3 = pointsCount.pointsCount3 / luas;
                        console.log('Rasio Titik per Unit Luas 3:', titikPerUnitLuas3);
                        content += '<p><strong>Rasio Kasus per Unit Luas :</strong> ' + titikPerUnitLuas3 + '</p>';
                        adaPointsCountTidakNol = true;
                    }

                    if (pointsCount.pointsCount4 !== 0) {
                        var titikPerUnitLuas4 = pointsCount.pointsCount4 / luas;
                        console.log('Rasio Titik per Unit Luas 4:', titikPerUnitLuas4);
                        content += '<p><strong>Rasio Kasus per Unit Luas :</strong> ' + titikPerUnitLuas4 + '</p>';
                        adaPointsCountTidakNol = true;
                    }

                    if (pointsCount.pointsCount5 !== 0) {
                        var titikPerUnitLuas5 = pointsCount.pointsCount5 / luas;
                        console.log('Rasio Titik per Unit Luas 5:', titikPerUnitLuas5);
                        content += '<p><strong>Rasio Kasus per Unit Luas :</strong> ' + titikPerUnitLuas5 + '</p>';
                        adaPointsCountTidakNol = true;
                    }

                    // Jika setidaknya satu pointsCount tidak 0, tampilkan konten
                    if (adaPointsCountTidakNol) {
                        // Tampilkan konten di sini
                    } else {
                        // Tampilkan 0 jika semua pointsCount adalah 0
                        content += '<p><strong>Rasio Kasus per Unit Luas :</strong> 0</p>';
                    }

                    displayBoundaryPopup(coordinates, content);
                    pointPopupOverlay.setPosition(undefined); // Hide point popup

                    // Clear the 'clicked' property and styles of the previously selected feature
                    if (selectedFeature) {
                        selectedFeature.set('clicked', false);
                        selectedFeature.setStyle(null); // Reset to default point style
                        selectedFeature = boundaryFeature;
                    }

                    // Set the 'clicked' property and style for the newly selected boundary feature
                    boundaryFeature.set('clicked', false);
                    boundaryFeature.setStyle(selectedBoundaryStyle);
                    selectedFeature = boundaryFeature;
                } else {
                    pointPopupOverlay.setPosition(undefined); // Hide point popup
                    boundaryPopupOverlay.setPosition(undefined); // Hide boundary popup

                    // Clear the 'clicked' property and styles of the previously selected feature
                    if (selectedFeature) {
                        var layerName = selectedFeature.get('layerName'); // Assuming you have a layer name property
                        selectedFeature.set('clicked', false);
                        selectedFeature.setStyle(null);
                        selectedFeature = null; // Reset the selected feature reference
                    }
                }
            });

            boundaryPopupCloser.onclick = function() {
                boundaryPopupOverlay.setPosition(undefined);
                boundaryPopupCloser.blur();

                // Clear the 'clicked' property and styles of the selected feature
                if (selectedFeature) {
                    var layerName = selectedFeature.get('layerName'); // Assuming you have a layer name property
                    selectedFeature.set('clicked', false);
                    selectedFeature.setStyle(null);
                    selectedFeature = null; // Reset the selected feature reference
                }
                return false;
            };

            // KUMPULAN BUTTON
            // SKALA
            var scaleControl = new ol.control.ScaleLine({
                // bar: true,
                text: true
            });
            map.addControl(scaleControl);

            // Deklarasikan variabel global untuk lapisan marker dan buffer
var markerLayer;
var bufferLayer;
var geolocationActive = false; // Tambahkan variabel untuk melacak status geolokasi

// GEOLOCATION
var geolocation = new ol.Geolocation({
    trackingOptions: {
        enableHighAccuracy: true
    },
    projection: map.getView().getProjection()
});

var geolocationButton = document.getElementById('geolocation-button');
geolocationButton.addEventListener('click', function() {
    if (!geolocationActive) {
        geolocation.setTracking(true);
        geolocationActive = true;
    } else {
        geolocation.setTracking(false);
        geolocationActive = false;

        // Hapus lapisan marker dan buffer jika ada
        if (markerLayer) {
            map.removeLayer(markerLayer);
            markerLayer = undefined;
        }
        if (bufferLayer) {
            map.removeLayer(bufferLayer);
            bufferLayer = undefined;
        }
    }
});

geolocation.on('change:position', function() {
    // Perbarui posisi marker jika tombol geolokasi dinyalakan
    if (geolocationActive) {
        var coordinates = geolocation.getPosition();

        // Tambahkan lapisan marker dan buffer jika belum ada
        if (!markerLayer) {
            var markerFeature = new ol.Feature(new ol.geom.Point(coordinates));
            var markerSource = new ol.source.Vector({
                features: [markerFeature]
            });
            markerLayer = new ol.layer.Vector({
                source: markerSource,
                style: new ol.style.Style({
                    image: new ol.style.Circle({
                        radius: 7,
                        fill: new ol.style.Fill({
                            color: 'blue'
                        }),
                        stroke: new ol.style.Stroke({
                            color: 'white',
                            width: 3
                        })
                    })
                }),
                zIndex: 1
            });
            map.addLayer(markerLayer);
        }

        // Tambahkan lapisan buffer jika belum ada
        if (!bufferLayer) {
            var bufferFeature = new ol.Feature(
                new ol.geom.Circle(coordinates, 250)
            );
            var bufferSource = new ol.source.Vector({
                features: [bufferFeature]
            });
            bufferLayer = new ol.layer.Vector({
                source: bufferSource,
                style: new ol.style.Style({
                    stroke: new ol.style.Stroke({
                        color: '#5389c2',
                        width: 1
                    }),
                    fill: new ol.style.Fill({
                        color: 'rgba(197, 234, 245, 0.2)'
                    })
                })
            });
            map.addLayer(bufferLayer);
        }

        // Zoom ke titik lokasi dengan animasi
        map.getView().animate({
            center: coordinates,
            zoom: 16
        }, {
            duration: 2000 // Atur durasi animasi sesuai kebutuhan Anda (dalam milidetik)
        });
    }
});

            // LAYER SWITCHER
            var layerSwitcher = new ol.control.LayerSwitcher({
                activationMode: 'click',
                startActive: false,
                groupSelectStyle: 'children'
            });
            map.addControl(layerSwitcher);

            // FULLSCREEN
            var fsButton = document.createElement('button');
            fsButton.innerHTML = '<img src="<?= base_url('sigali/') ?>assets/images/fullscreen.svg" alt="" style="width:20px;height:20px;filter:brightness(0) invert(1);vertical-align:middle"></img>';
            fsButton.className = 'myButton';
            fsButton.style.border = 'none'; /* Tambahkan ini untuk menghilangkan border */

            var fsElement = document.createElement('div');
            fsElement.className = 'fsButtonDiv';
            fsElement.appendChild(fsButton);

            var fsControl = new ol.control.Control({
                element: fsElement
            });

            fsButton.addEventListener("click", () => {
                var mapEle = document.getElementById("map");
                if (mapEle.requestFullscreen) {
                    mapEle.requestFullscreen();
                    fsButton.style.display = 'none';
                    var exitFsButton = document.createElement('button');
                    exitFsButton.innerHTML = '<img src="<?= base_url('sigali/') ?>assets/images/exitfullscreen.svg" alt="" style="width:20px;height:20px;filter:brightness(0) invert(1);vertical-align:middle"></img>';
                    exitFsButton.className = 'myButton';
                    fsElement.replaceChild(exitFsButton, fsButton);

                    exitFsButton.addEventListener("click", () => {
                        if (document.exitFullscreen) {
                            document.exitFullscreen();
                        } else if (document.msExitFullscreen) {
                            document.msExitFullscreen();
                        } else if (document.mozCancelFullScreen) {
                            document.mozCancelFullScreen();
                        } else if (document.webkitExitFullscreen) {
                            document.webkitExitFullscreen();
                        }

                        fsElement.replaceChild(fsButton, exitFsButton);
                    });
                }
            });

            document.addEventListener("fullscreenchange", function() {
                if (!document.fullscreenElement) {
                    fsButton.style.display = 'block';
                }
            });
            map.addControl(fsControl);

            // HOME
            // map.addControl(homeControl);
            var homeButton = document.getElementById('homeButton');
            homeButton.addEventListener('click', () => {
                location.href = "<?= base_url('home/peta') ?>";
            });

            // ANALISIS Data
            // Heatmap / ISO-Area
            var hmSleman = new ol.layer.Heatmap({
                source: pointSource,
                blur: 10,
                radius: 10,
                gradient: ['white', 'yellow', 'red'] // Ganti warna sesuai kebutuhan
            });
            // map.addLayer(hmSleman);
            
            var hmKota = new ol.layer.Heatmap({
                source: pointSource2,
                blur: 10,
                radius: 10,
                gradient: ['white', 'yellow', 'red'] // Ganti warna sesuai kebutuhan
            });
            // map.addLayer(hmKota);
            
            var hmBantul = new ol.layer.Heatmap({
                source: pointSource3,
                blur: 10,
                radius: 10,
                gradient: ['white', 'yellow', 'red'] // Ganti warna sesuai kebutuhan
            });
            // map.addLayer(hmBantul);
            
            var hmKulprog = new ol.layer.Heatmap({
                source: pointSource4,
                blur: 10,
                radius: 10,
                gradient: ['white', 'yellow', 'red'] // Ganti warna sesuai kebutuhan
            });
            // map.addLayer(hmKulprog);
            
            var hmGunkid = new ol.layer.Heatmap({
                source: pointSource5,
                blur: 10,
                radius: 10,
                gradient: ['white', 'yellow', 'red'] // Ganti warna sesuai kebutuhan
            });

            // map.addLayer(hmGunkid);
            var hmGroup = new ol.layer.Group({
                title: 'Heatmap',
                fold: false,
                layers: [hmSleman, hmKota, hmBantul, hmKulprog, hmGunkid]
            });
            map.addLayer(hmGroup);
            
            // LEGEND BUTTON
            // Fungsi untuk menampilkan atau menyembunyikan elemen dengan ID "legend"
            function toggleLegendVisibility() {
                var legendContainer = document.getElementById('legend');

                // Check the current display style
                if (legendContainer.style.display === 'none' || legendContainer.style.display === '') {
                    legendContainer.style.display = 'block'; // Show the chart container
                } else {
                    legendContainer.style.display = 'none'; // Hide the chart container
                }
            }
            
            // WELCOME POPUP
            // Fungsi untuk menampilkan popup selamat datang
            function showWelcomePopup() {
                var overlay = document.getElementById("welcome-popup-overlay");
                overlay.style.display = "flex"; // Tampilkan overlay
            }
            
            // Fungsi untuk menutup popup selamat datang
            function closeWelcomePopup() {
                var overlay = document.getElementById("welcome-popup-overlay");
                overlay.style.display = "none"; // Sembunyikan overlay
            }
            
            // Panggil fungsi showWelcomePopup saat peta pertama kali dimuat
            window.addEventListener("load", showWelcomePopup);
            
            
        </script>


    </div>

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