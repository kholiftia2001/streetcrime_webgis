<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sijaga | <?= $judul ?></title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicons -->
    <link href="<?= base_url('sigali/') ?>assets/images/borgol.png" rel="icon">
    <link href="<?= base_url('sigali/') ?><?= base_url('sigali/') ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('sigali/') ?>assets/js/main.js"></script>

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
            margin-bottom: 0px;
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

        .legend {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

       /* Style the animation controls */
        .animation-controls {
            position: absolute;
            top: 120px;
            left: 10px;
            background-color: white;
            padding: 5px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            z-index: 1;
        }

        .animation-controls button {
            width: 40px;
            height: 40px;
            padding: 15px 15px;
            background-color: #E57C23;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            background-repeat: no-repeat;
            background-position: center;
            z-index: 1;
        }
        
        #play-button :hover {
            background-color: #0055A8;
            /* Hover color */
        }

        #current-month-year {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 4;
            color: white;
            background-color: #025464;
            border-radius: 5px;
            padding: 5px;
            font-size: 13px;
            /* Buat elemen ini sebagai posisi relatif */
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
          }
          
           #legend {
            position: absolute;
            top: 100px;
            right:60px;
            z-index: 3;
            width: 200px;
          height: 230px;
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
        
        #play-button:hover {
            background-color: #0055A8;
            /* Hover color */
        }
        
        #pause-button:hover {
            background-color: #0055A8;
            /* Hover color */
        }
        
        #stop-button:hover {
            background-color: #0055A8;
            /* Hover color */
        }
        
        #chartContainer {
          position:absolute;
          bottom: 100px;
          right: 100px;
          /*background-color: white;*/
          /*border: 1px solid #ddd;*/
          border-radius: 5px;
          /*box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);*/
          padding: 20px;
          margin: 20px auto;
          z-index: 4;
        }

        canvas {
          display: block;
          margin: 0 auto;
        }

       /*.navibar {*/
       /*     position: absolute;*/
       /*     top: 110px;*/
       /*     left: 70px;*/
       /*     height: 200px;*/
       /*     width: 120px;*/
       /*     background-color: rgba(255, 255, 255, 0.9);*/
       /*     padding: 10px;*/
       /*     border-radius: 5px;*/
       /*     box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);*/
       /*     display: flex;*/
       /*     align-items: center;*/
       /*     z-index: 1;*/
       /* }*/

       /* .filter-container {*/
       /*     flex-grow: 1;*/
       /* }*/

       /* #h31 {*/
       /*     position: absolute;*/
       /*     font-family: "Arial", sans-serif;*/
       /*     top: 15px;*/
       /*     font-size: 12px;*/
       /* }*/

       /* #h32 {*/
       /*     position: absolute;*/
       /*     font-family: "Arial", sans-serif;*/
       /*     top: 68px;*/
       /*     font-size: 12px;*/
       /* }*/

       /* #h33 {*/
       /*     position: absolute;*/
       /*     font-family: "Arial", sans-serif;*/
       /*     top: 125px;*/
       /*     font-size: 12px;*/
       /* }*/

       /* #h34 {*/
       /*     position: absolute;*/
       /*     font-family: "Arial", sans-serif;*/
       /*     top: 180px;*/
       /*     font-size: 12px;*/
       /* }*/

       /* .navibar select {*/
       /*     padding: 5px;*/
       /*     font-size: 12px;*/
       /* }*/

       /* #bulan-filter {*/
       /*     position: absolute;*/
       /*     top: 90px;*/
       /*     font-size: 12px;*/
       /*     cursor: pointer;*/
       /* }*/

       /* #year-filter {*/
       /*     position: absolute;*/
       /*     top: 35px;*/
       /*     font-size: 12px;*/
       /*     cursor: pointer;*/
       /* }*/

       /* #hari-filter {*/
       /*     position: absolute;*/
       /*     top: 145px;*/
       /*     font-size: 12px;*/
       /*     cursor: pointer;*/
       /* }*/

       /* #kabupaten-filter {*/
       /*     position: absolute;*/
       /*     top: 200px;*/
       /*     width:110px;*/
       /*     font-size: 12px;*/
       /*     cursor: pointer;*/
       /* }*/

       /* #filtered-count {*/
       /*     position: absolute;*/
       /*     top: 175px;*/
       /*     font-size: 12px;*/
       /*     font-weight: bold;*/
       /*     font-family: arial;*/
       /* }*/

       /* .hidden {*/
       /*     display: none;*/
       /* }*/

       /* #toggle-filter-button {*/
       /*     position: absolute;*/
       /*     top: 110px;*/
       /*     left: 10px;*/
       /*     width: 40px;*/
       /*     height: 40px;*/
       /*     padding: 15px 15px;*/
       /*     background-color: #E57C23;*/
       /*     border: none;*/
       /*     border-radius: 50%;*/
       /*     cursor: pointer;*/
       /*     background-image: url('<?= base_url('sigali/') ?>assets/images/filter24.png');*/
       /*     background-repeat: no-repeat;*/
       /*     background-position: center;*/
       /*     z-index: 1;*/
       /* }*/

       /* #toggle-filter-button:hover {*/
       /*     background-color: #025464;*/
       /* }*/

       /* #toggle-filter-button:focus {*/
       /*     outline: none;*/
       /* }*/

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
       
       
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center" style="height: 5%; background-color: #025464;">
        <div class=" container d-flex align-items-center justify-content-between">

            <h1 class="logo" style="font-size: 14px; text-decoration: none; border-left: none; margin-right: auto; text-transform: none;"><a href="<?= base_url('Home') ?>">Animasi Spasio Temporal</a></h1>

            <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto" href="<?= base_url('Home') ?>">Halaman Utama</a></li>
              <li><a class="nav-link scrollto" href="<?= base_url('Home #about') ?>">Tentang Sistem</a></li>
              <li class="dropdown"><a href="#"><span>Fitur</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="<?= base_url('Home/peta') ?>">Peta</a></li>
                  <li><a href="<?= base_url('Home/spatiotemporal') ?>">Spasio Temporal</a></li>
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
    </header><!-- End Header -->

    <div id="map">
        <div class="animation-controls">
            <button id="play-button" style="background-image: url('<?= base_url('sigali/') ?>assets/images/play24.png');"></button><hr>
            <button id="pause-button" style="background-image: url('<?= base_url('sigali/') ?>assets/images/pause-button.png');"></button><hr>
            <button id="stop-button" style="background-image: url('<?= base_url('sigali/') ?>assets/images/stop24.png');"></button>
        </div>
        <!--<select id="year-filter">-->
            <!--    <option value="">Semua Tahun</option>-->
            <!--    <option value="2023">2023</option>-->
            <!--    <option value="2022">2022</option>-->
            <!--    <option value="2021">2021</option>-->
            <!--    <option value="2020">2020</option>-->
            <!--    <option value="2019">2019</option>-->
            <!--    <option value="2018">2018</option>-->
            <!--</select>-->
        <!--<div class="navibar hidden">-->
        <!--    <h3 id="h31">Filter Tahun</h3>-->
        <!--    <label>-->
        <!--      <input type="checkbox" id="year-2023"> 2023 <br>-->
        <!--      <input type="checkbox" id="year-2022"> 2022 <br>-->
        <!--      <input type="checkbox" id="year-2021"> 2021 <br>-->
        <!--      <input type="checkbox" id="year-2020"> 2020 <br>-->
        <!--      <input type="checkbox" id="year-2019"> 2019 <br>-->
        <!--      <input type="checkbox" id="year-2018"> 2018 <br>-->
        <!--    </label><br>-->
        <!--    <span id="filtered-count"></span>-->
        <!--</div>-->
        <!--<button id="toggle-filter-button" onclick="toggleFilter()"></button>-->

        <!--<div id="animation-bar-container">-->
        <!--    <div id="animation-bar"></div>-->
        <!--</div>-->
        <!--<div id="animation-info"></div>-->
        
        <!--<div id="chartContainer" style="position: absolute; bottom: 40px; left: 5px; height: 150px; width: 80%;"></div>-->
        <!--<div class="animation-chart-controls">-->
        <!--    <button id="playButton" style="background-image: url('<?= base_url('sigali/') ?>assets/images/play24.png');"></button>-->
        <!--    <button id="pauseButton" style="background-image: url('<?= base_url('sigali/') ?>assets/images/pause-button.png');"></button>-->
        <!--    <button id="stopButton" style="background-image: url('<?= base_url('sigali/') ?>assets/images/stop24.png');"></button>-->
        <!--</div>-->

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

        <div id="current-month-year">Bulan dan Tahun: </div>

        <button id="homeButton"></button>
        
        <button id="toggleLegendButton" onclick="toggleLegendVisibility()"></button>
        
        <div id="legend">
          <h5 style="position:relative; top:10px; left: 10px">Legenda Peta</h5>
          <div class="legend-item">Titik Kejahatan Jalanan</div>
          <!-- Legenda untuk titik dari pointLayer -->
          <div class="legend-item">
            <div class="legend-symbol point-symbol" style="background-color:  rgba(64, 66, 69, 1);"></div>
            <div class="legend-label">Lokasi Kejahatan Jalanan</div>
          </div>
        
          <!-- Legenda untuk titik dari pointLayer2 -->
          <!--<div class="legend-item">-->
          <!--  <div class="legend-symbol point-symbol" style="background-color: rgba(50, 107, 168, 1);"></div>-->
          <!--  <div class="legend-label">Kota Yogyakarta</div>-->
          <!--</div>-->
        
          <!-- Legenda untuk titik dari pointLayer3 -->
          <!--<div class="legend-item">-->
          <!--  <div class="legend-symbol point-symbol" style="background-color: rgba(142, 168, 50, 1);"></div>-->
          <!--  <div class="legend-label">Bantul</div>-->
          <!--</div>-->
        
          <!-- Legenda untuk titik dari pointLayer4 -->
          <!--<div class="legend-item">-->
          <!--  <div class="legend-symbol point-symbol" style="background-color: rgba(113, 117, 113, 1);"></div>-->
          <!--  <div class="legend-label">Kulon Progo</div>-->
          <!--</div>-->
        
          <!-- Legenda untuk titik dari pointLayer5 -->
          <!--<div class="legend-item">-->
          <!--  <div class="legend-symbol point-symbol" style="background-color: rgba(255, 112, 51, 1);"></div>-->
          <!--  <div class="legend-label">Gunung Kidul</div>-->
          <!--</div>-->
        
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
                zoom: 10,
            });

            var map = new ol.Map({
                target: 'map',
                view: mapView,
                controls: []
            });

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

            //group layer
            var baseGroup = new ol.layer.Group({
                title: 'Base Maps',
                fold: true,
                layers: [osmTile, noneTile]
            });
            map.addLayer(baseGroup);

            // Create an empty source for points
            var pointSource = new ol.source.Vector();
            var pointSource2 = new ol.source.Vector();
            var pointSource3 = new ol.source.Vector();
            var pointSource4 = new ol.source.Vector();
            var pointSource5 = new ol.source.Vector();

            // Function to add points to the source
            function addPoints(source, data) {
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

                    source.addFeature(point);
                });
            }

            // Fetch data from PHP variables
            var slemanData = <?= json_encode($lokasi_sleman) ?>;
            var kotaData = <?= json_encode($lokasi_kota) ?>;
            var bantulData = <?= json_encode($lokasi_bantul) ?>;
            var kulprogData = <?= json_encode($lokasi_kulprog) ?>;
            var gunkidData = <?= json_encode($lokasi_gunkid) ?>;

            // Add points to the sources
            addPoints(pointSource, slemanData);
            addPoints(pointSource2, kotaData);
            addPoints(pointSource3, bantulData);
            addPoints(pointSource4, kulprogData);
            addPoints(pointSource5, gunkidData);
            
            // function getStyleByYear(feature) {
            //     var year = feature.get('tahun');
            
            //     // Tentukan gaya titik berdasarkan tahun
            //     var style = new ol.style.Style({
            //         image: new ol.style.Circle({
            //             radius: 5,
            //             fill: new ol.style.Fill({
            //                 color: getColorByYear(year), // Fungsi getColorByYear akan mengembalikan warna berdasarkan tahun
            //             }),
            //             stroke: new ol.style.Stroke({
            //                 color: 'rgba(0, 0, 0, 0.7)',
            //                 width: 1,
            //             }),
            //         }),
            //     });
            
            //     return style;
            // }
            
            // function getColorByYear(year) {
            //     // Anda dapat menentukan warna berdasarkan tahun, contoh:
            //     if (year === 2023) {
            //         return 'red'; // Warna untuk tahun 2023
            //     } else if (year === 2022) {
            //         return 'orange'; // Warna untuk tahun 2022
            //     } else if (year === 2021) {
            //         return 'yellow'; // Warna untuk tahun 2021
            //     } else {
            //         return 'blue'; // Warna default atau sesuaikan dengan tahun lain
            //     }
            // }


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
            
            // FILTER            
            // function filterByYear(selectedYears, pointSource, pointLayer) {
            //     var filteredFeatures = pointSource.getFeatures().filter(function (feature) {
            //         var year = feature.get('tahun');
            //         var showFeature = true;
            
            //         if (selectedYears.length > 0 && !selectedYears.includes(year)) {
            //             showFeature = false;
            //         }
            
            //         return showFeature;
            //     });
            
            //     var filteredSource = new ol.source.Vector({
            //         features: filteredFeatures,
            //     });
            
            //     pointLayer.setSource(filteredSource);
                
            //     return filteredFeatures;
            // }
        
            // function updateFilter() {
            //     var selectedYears = [];
            //     var yearCheckboxes = document.querySelectorAll('input[type="checkbox"]');
                
            //     yearCheckboxes.forEach(function (checkbox) {
            //         if (checkbox.checked) {
            //             selectedYears.push(checkbox.id.split('-')[1]);
            //         }
            //     });
                
            //     // Filter for pointSource 1
            //     var filteredFeatures = filterByYear(selectedYears, pointSource, pointLayer);
                
            //     // Repeat the filter process for pointSource 2, 3, 4, and 5
            //     var filteredFeatures2 = filterByYear(selectedYears, pointSource2, pointLayer2);
            //     var filteredFeatures3 = filterByYear(selectedYears, pointSource3, pointLayer3);
            //     var filteredFeatures4 = filterByYear(selectedYears, pointSource4, pointLayer4);
            //     var filteredFeatures5 = filterByYear(selectedYears, pointSource5, pointLayer5);
                
            //     // Calculate the total filtered features
            //     var totalFilteredFeatures = filteredFeatures.length + filteredFeatures2.length + filteredFeatures3.length + filteredFeatures4.length + filteredFeatures5.length;
                
            //     // Update the filtered count
            //     var filteredCountElement = document.getElementById('filtered-count');
            //     filteredCountElement.textContent = 'Jumlah Data: ' + totalFilteredFeatures;
            // }
            
            // var yearCheckboxes = document.querySelectorAll('input[type="checkbox"]');
            // yearCheckboxes.forEach(function (checkbox) {
            //     checkbox.addEventListener('change', updateFilter);
            // });
            
            // var pointSources = [pointSource, pointSource2, pointSource3, pointSource4, pointSource5];
            // var pointLayers = [pointLayer, pointLayer2, pointLayer3, pointLayer4, pointLayer5];
            
            // pointSources.forEach(function (pointSource, index) {
            //     pointSource.on('change', function() {
            //         if (pointSource.getState() === 'ready') {
            //             originalFeatures = pointSource.getFeatures();
            //             updateFilter();
            //         }
            //     });
            // });


            // function toggleFilter() {
            //     var filterNavbar = document.querySelector('.navibar');
            //     filterNavbar.classList.toggle('hidden');
            // }

            //TIMESERIES
            var monthMapping = {
                'Januari': 1,
                'Februari': 2,
                'Maret': 3,
                'April': 4,
                'Mei': 5,
                'Juni': 6,
                'Juli': 7,
                'Agustus': 8,
                'September': 9,
                'Oktober': 10,
                'November': 11,
                'Desember': 12
            };
            
            pointSource.getFeatures().forEach(function(feature) {
                var tahun = feature.get('tahun');
                var bulan = feature.get('bulan');
                var bulanTahun = tahun + '-' + (bulan < 10 ? '0' : '') + bulan;
                feature.set('bulanTahun', bulanTahun);
            });

            pointSource2.getFeatures().forEach(function(feature) {
                var tahun = feature.get('tahun');
                var bulan = feature.get('bulan');
                var bulanTahun = tahun + '-' + (bulan < 10 ? '0' : '') + bulan;
                feature.set('bulanTahun', bulanTahun);
            });

            pointSource3.getFeatures().forEach(function(feature) {
                var tahun = feature.get('tahun');
                var bulan = feature.get('bulan');
                var bulanTahun = tahun + '-' + (bulan < 10 ? '0' : '') + bulan;
                feature.set('bulanTahun', bulanTahun);
            });

            pointSource4.getFeatures().forEach(function(feature) {
                var tahun = feature.get('tahun');
                var bulan = feature.get('bulan');
                var bulanTahun = tahun + '-' + (bulan < 10 ? '0' : '') + bulan;
                feature.set('bulanTahun', bulanTahun);
            });

            pointSource5.getFeatures().forEach(function(feature) {
                var tahun = feature.get('tahun');
                var bulan = feature.get('bulan');
                var bulanTahun = tahun + '-' + (bulan < 10 ? '0' : '') + bulan;
                feature.set('bulanTahun', bulanTahun);
            });

            // Ambil bulan-tahun unik dari data Anda dan urutkan
            var uniqueMonths = [];
            pointSource.getFeatures().forEach(function(feature) {
                var bulanTahun = feature.get('bulanTahun');
                if (uniqueMonths.indexOf(bulanTahun) === -1) {
                    uniqueMonths.push(bulanTahun);
                }
            });
            
            pointSource2.getFeatures().forEach(function(feature) {
                var bulanTahun = feature.get('bulanTahun');
                if (uniqueMonths.indexOf(bulanTahun) === -1) {
                    uniqueMonths.push(bulanTahun);
                }
            });
            
            pointSource3.getFeatures().forEach(function(feature) {
                var bulanTahun = feature.get('bulanTahun');
                if (uniqueMonths.indexOf(bulanTahun) === -1) {
                    uniqueMonths.push(bulanTahun);
                }
            });
            
            pointSource4.getFeatures().forEach(function(feature) {
                var bulanTahun = feature.get('bulanTahun');
                if (uniqueMonths.indexOf(bulanTahun) === -1) {
                    uniqueMonths.push(bulanTahun);
                }
            });
            
            pointSource4.getFeatures().forEach(function(feature) {
                var bulanTahun = feature.get('bulanTahun');
                if (uniqueMonths.indexOf(bulanTahun) === -1) {
                    uniqueMonths.push(bulanTahun);
                }
            });
            
            pointSource5.getFeatures().forEach(function(feature) {
                var bulanTahun = feature.get('bulanTahun');
                if (uniqueMonths.indexOf(bulanTahun) === -1) {
                    uniqueMonths.push(bulanTahun);
                }
            });
            
            uniqueMonths.sort(function(a, b) {
                var monthA = a.split('-')[1];
                var monthB = b.split('-')[1];
                var yearA = a.split('-')[0];
                var yearB = b.split('-')[0];
                
                // Urutkan berdasarkan tahun terlebih dahulu, kemudian bulan
                if (yearA !== yearB) {
                    return yearA - yearB;
                } else {
                    return monthMapping[monthA] - monthMapping[monthB];
                }
            });
            
            // Fungsi untuk menggambar titik berdasarkan bulan-tahun
            function drawPointsByMonthYear(bulanTahun) {
                document.getElementById('current-month-year').textContent = 'Bulan dan Tahun: ' + bulanTahun;
                pointSource.getFeatures().forEach(function(feature) {
                    if (feature.get('bulanTahun') === bulanTahun) {
                        feature.setStyle(null); // Menghapus gaya sebelumnya jika ada
                    } else {
                        feature.setStyle(new ol.style.Style({
                            fill: new ol.style.Fill({
                                color: 'rgba(255, 255, 255, 0)'
                            })
                        }));
                    }
                });
            
                pointSource2.getFeatures().forEach(function(feature) {
                    if (feature.get('bulanTahun') === bulanTahun) {
                        feature.setStyle(null); // Menghapus gaya sebelumnya jika ada
                    } else {
                        feature.setStyle(new ol.style.Style({
                            fill: new ol.style.Fill({
                                color: 'rgba(255, 255, 255, 0)'
                            })
                        }));
                    }
                });
            
                pointSource3.getFeatures().forEach(function(feature) {
                    if (feature.get('bulanTahun') === bulanTahun) {
                        feature.setStyle(null); // Menghapus gaya sebelumnya jika ada
                    } else {
                        feature.setStyle(new ol.style.Style({
                            fill: new ol.style.Fill({
                                color: 'rgba(255, 255, 255, 0)'
                            })
                        }));
                    }
                });
            
                pointSource4.getFeatures().forEach(function(feature) {
                    if (feature.get('bulanTahun') === bulanTahun) {
                        feature.setStyle(null); // Menghapus gaya sebelumnya jika ada
                    } else {
                        feature.setStyle(new ol.style.Style({
                            fill: new ol.style.Fill({
                                color: 'rgba(255, 255, 255, 0)'
                            })
                        }));
                    }
                });
            
                pointSource5.getFeatures().forEach(function(feature) {
                    if (feature.get('bulanTahun') === bulanTahun) {
                        feature.setStyle(null); // Menghapus gaya sebelumnya jika ada
                    } else {
                        feature.setStyle(new ol.style.Style({
                            fill: new ol.style.Fill({
                                color: 'rgba(255, 255, 255, 0)'
                            })
                        }));
                    }
                });
            }
            
            var jumlahDataPerBulan = {}; // Objek untuk menyimpan jumlah data per bulan

            uniqueMonths.forEach(function(bulanTahun) {
                jumlahDataPerBulan[bulanTahun] = 0; // Inisialisasi jumlah data untuk bulan ini menjadi 0
            });
            
            pointSource.getFeatures().forEach(function(feature) {
                var bulanTahun = feature.get('bulanTahun');
                jumlahDataPerBulan[bulanTahun]++;
            });
            
            pointSource2.getFeatures().forEach(function(feature) {
                var bulanTahun = feature.get('bulanTahun');
                jumlahDataPerBulan[bulanTahun]++;
            });
            
            pointSource3.getFeatures().forEach(function(feature) {
                var bulanTahun = feature.get('bulanTahun');
                jumlahDataPerBulan[bulanTahun]++;
            });
            
            pointSource4.getFeatures().forEach(function(feature) {
                var bulanTahun = feature.get('bulanTahun');
                jumlahDataPerBulan[bulanTahun]++;
            });
            
            pointSource5.getFeatures().forEach(function(feature) {
                var bulanTahun = feature.get('bulanTahun');
                jumlahDataPerBulan[bulanTahun]++;
            });
            
            // Anda sekarang memiliki jumlah data per bulan dalam objek jumlahDataPerBulan
            console.log(jumlahDataPerBulan);

            // Variabel untuk mengontrol animasi
            var animationInterval; // Untuk mengatur kecepatan animasi
            var currentIndex = 0; // Indeks saat ini dalam data bulan-tahun
            var monthsLength = uniqueMonths.length; // Jumlah bulan-tahun yang unik
            var isAnimationStopped = true; // Untuk melacak apakah animasi sudah dihentikan
            var isAnimationPaused = false; // Untuk melacak apakah animasi dalam keadaan dijeda
            var wasAnimationPausedBeforeStop = false; // Untuk melacak apakah animasi dalam keadaan dijeda sebelum dihentikan

            // Fungsi untuk memainkan atau melanjutkan animasi
            function playOrResumeAnimation() {
                if (isAnimationStopped || isAnimationPaused) { // Periksa apakah animasi sudah dihentikan atau dalam keadaan dijeda
                    if (isAnimationStopped) { // Jika animasi telah dihentikan, mulai dari awal
                        currentIndex = 0;
                    }
            
                    clearInterval(animationInterval); // Hentikan interval sebelumnya jika ada
                    animationInterval = setInterval(function() {
                        drawPointsByMonthYear(uniqueMonths[currentIndex]);
                        currentIndex++;
            
                        // Reset ke awal jika sudah mencapai akhir
                        if (currentIndex >= monthsLength) {
                            currentIndex = 0;
                        }
                    }, 750); // Kecepatan animasi dalam milidetik (1 detik dalam contoh ini)
            
                    isAnimationStopped = false; // Setel status animasi menjadi tidak dihentikan
                    isAnimationPaused = false; // Setel status animasi menjadi tidak dijeda
            
                    // Periksa apakah animasi dalam keadaan dijeda sebelum dihentikan dan jika ya, lanjutkan dari titik tersebut
                    if (wasAnimationPausedBeforeStop) {
                        currentIndex--; // Kembali ke titik sebelumnya
                        wasAnimationPausedBeforeStop = false; // Setel status animasi dijeda sebelum dihentikan menjadi false
                    }
                }
            }
            
            // Fungsi untuk menjeda animasi
            function pauseAnimation() {
                clearInterval(animationInterval);
                isAnimationPaused = true;
                wasAnimationPausedBeforeStop = true; // Setel status animasi dijeda sebelum dihentikan menjadi true
            }
            
            // Fungsi untuk menghentikan animasi
            function stopAnimation() {
                clearInterval(animationInterval);
                currentIndex = 0;
                isAnimationStopped = true; // Setel status animasi menjadi dihentikan
                isAnimationPaused = false; // Setel status animasi menjadi tidak dijeda
                wasAnimationPausedBeforeStop = false; // Setel status animasi dijeda sebelum dihentikan menjadi false
            
                // Kembalikan semua titik yang dihapus ke tampilan semula
                pointSource.getFeatures().forEach(function(feature) {
                    feature.setStyle(null);
                });
                pointSource2.getFeatures().forEach(function(feature) {
                    feature.setStyle(null);
                });
                pointSource3.getFeatures().forEach(function(feature) {
                    feature.setStyle(null);
                });
                pointSource4.getFeatures().forEach(function(feature) {
                    feature.setStyle(null);
                });
                pointSource5.getFeatures().forEach(function(feature) {
                    feature.setStyle(null);
                });
            }
            
            // Tambahkan event listener untuk tombol-tombol kontrol
            document.getElementById('play-button').addEventListener('click', playOrResumeAnimation);
            document.getElementById('pause-button').addEventListener('click', pauseAnimation);
            document.getElementById('stop-button').addEventListener('click', stopAnimation);

            // PENGATURAN STYLE
            // Create the default style for points
            var defaultPointStyle = new ol.style.Style({
                image: new ol.style.Circle({
                    radius: 6,
                    fill: new ol.style.Fill({
                        color: 'rgb(64, 66, 69)'
                    }),
                    stroke: new ol.style.Stroke({
                        color: 'white',
                        width: 2
                    })
                })
            });

            var defaultPointStyle2 = new ol.style.Style({
                image: new ol.style.Circle({
                    radius: 6,
                    fill: new ol.style.Fill({
                        color: 'rgb(64, 66, 69)'
                    }),
                    stroke: new ol.style.Stroke({
                        color: 'white',
                        width: 2
                    })
                })
            });

            var defaultPointStyle3 = new ol.style.Style({
                image: new ol.style.Circle({
                    radius: 6,
                    fill: new ol.style.Fill({
                        color: 'rgb(64, 66, 69)'
                    }),
                    stroke: new ol.style.Stroke({
                        color: 'white',
                        width: 2
                    })
                })
            });

            var defaultPointStyle4 = new ol.style.Style({
                image: new ol.style.Circle({
                    radius: 6,
                    fill: new ol.style.Fill({
                        color: 'rgb(64, 66, 69)'
                    }),
                    stroke: new ol.style.Stroke({
                        color: 'white',
                        width: 2
                    })
                })
            });

            var defaultPointStyle5 = new ol.style.Style({
                image: new ol.style.Circle({
                    radius: 6,
                    fill: new ol.style.Fill({
                        color: 'rgb(64, 66, 69)'
                    }),
                    stroke: new ol.style.Stroke({
                        color: 'white',
                        width: 2
                    })
                })
            });

            // Create the selected style for points
            var selectedPointStyle = new ol.style.Style({
                image: new ol.style.Circle({
                    radius: 8,
                    fill: new ol.style.Fill({
                        color: 'red'
                    }),
                    stroke: new ol.style.Stroke({
                        color: 'white',
                        width: 2
                    })
                })
            });

            // Set the styles for the point layer
            pointLayer.setStyle(function(feature) {
                var clicked = feature.get('clicked');
                return clicked ? selectedPointStyle : defaultPointStyle;
            });

            pointLayer2.setStyle(function(feature) {
                var clicked = feature.get('clicked');
                return clicked ? selectedPointStyle : defaultPointStyle2;
            });

            pointLayer3.setStyle(function(feature) {
                var clicked = feature.get('clicked');
                return clicked ? selectedPointStyle : defaultPointStyle3;
            });

            pointLayer4.setStyle(function(feature) {
                var clicked = feature.get('clicked');
                return clicked ? selectedPointStyle : defaultPointStyle4;
            });

            pointLayer5.setStyle(function(feature) {
                var clicked = feature.get('clicked');
                return clicked ? selectedPointStyle : defaultPointStyle5;
            });

            // Function to create default boundary style based on KAB_KOTA value
            function createDefaultBoundaryStyle(kabKota) {
                if (kabKota === 'Sleman') {
                    return new ol.style.Style({
                        fill: new ol.style.Fill({
                            color: 'rgba(241, 26, 123, 0.5)'
                        }),
                        stroke: new ol.style.Stroke({
                            color: 'rgba(241, 26, 123, 1)',
                            width: 1
                        })
                    });
                } else if (kabKota === 'Yogyakarta') {
                    return new ol.style.Style({
                        fill: new ol.style.Fill({
                            color: 'rgba(50, 107, 168, 0.5)'
                        }),
                        stroke: new ol.style.Stroke({
                            color: 'rgb(50, 107, 168)',
                            width: 1
                        })
                    });
                } else if (kabKota === 'Bantul') {
                    return new ol.style.Style({
                        fill: new ol.style.Fill({
                            color: 'rgba(142, 168, 50, 0.5)'
                        }),
                        stroke: new ol.style.Stroke({
                            color: 'rgb(142, 168, 50)',
                            width: 1
                        })
                    });
                } else if (kabKota === 'Gunungkidul') {
                    return new ol.style.Style({
                        fill: new ol.style.Fill({
                            color: 'rgba(255, 112, 51, 0.5)'
                        }),
                        stroke: new ol.style.Stroke({
                            color: 'rgb(255, 112, 51)',
                            width: 1
                        })
                    });
                } else if (kabKota === 'Kulon Progo') {
                    return new ol.style.Style({
                        fill: new ol.style.Fill({
                            color: 'rgb(113, 117, 113, 0.5)'
                        }),
                        stroke: new ol.style.Stroke({
                            color: 'rgb(113, 117, 113)',
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

            // POPUP
            // Create overlay for point popup
            var pointPopupOverlay = new ol.Overlay({
                element: document.getElementById('point-popup'),
                autoPan: true,
                autoPanAnimation: {
                    duration: 250
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
                pointLayer: defaultPointStyle,
                pointLayer2: defaultPointStyle2,
                pointLayer3: defaultPointStyle3,
                pointLayer4: defaultPointStyle4,
                pointLayer5: defaultPointStyle5,
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

            //KUMPULAN BUTTON
            // SKALA
            var scaleControl = new ol.control.ScaleLine({
                // bar: true,
                text: true
            });
            map.addControl(scaleControl);

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
                location.href = "<?= base_url('home/spatiotemporal') ?>";
            });
            
            // LEGEND BUTTON
            // MENGATUR VISIBILITAS LEGENDA
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