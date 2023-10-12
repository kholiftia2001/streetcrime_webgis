<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigali | <?= $judul ?></title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link rel="icon" type="image/x-icon" href="<?= base_url('sigali/') ?>assets\images\map.png" />
    <link rel="stylesheet" href="<?= base_url('sigali/') ?>resources/ol/ol.css">
    <link rel="stylesheet" href="<?= base_url('sigali/') ?>resources/ol-ext/ol-ext.css">
    <link rel="stylesheet" href="<?= base_url('sigali/') ?>resources/layerswitcher/ol-layerswitcher.css">
    <link rel="stylesheet" href="<?= base_url('sigali/') ?>resources/fontawsome/css/all.css">
    <!-- <link rel="stylesheet" href="<?= base_url('sigali/') ?>style.css"> -->

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

    <style>
        .ol-popup {
            position: absolute;
            background-color: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-family: Arial, sans-serif;
            font-size: 14px;
            width: 250px;
        }

        .ol-popup-closer {
            position: absolute;
            top: 5px;
            right: 8px;
            color: #999;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        #popup-content {
            margin-bottom: 5px;
        }

        #popup-content label {
            font-weight: bold;
        }

        #popup-content span {
            margin-left: 5px;
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center" style="height: 30px; background-color: #025464;">
        <div class="container d-flex align-items-center justify-content-between">
            <h4 class="logo" style="font-size: 16px; text-decoration: none; border-left: none; margin-right: auto; text-transform: none;">
                <a href="index.html">Pemetaan Lokasi Kejahatan Jalanan</a>
            </h4>

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
    </header>

    <div class="row">
        <div class="col-sm-12">
            <div id="map" style="width: 100%; height:100vh"></div>
        </div>
    </div>

    <div id="popup" class="ol-popup">
        <span id="popup-closer" class="ol-popup-closer">&times;</span>
        <div id="popup-content"></div>
    </div>


    <script>
        var mapView = new ol.View({
            center: ol.proj.fromLonLat([110.52722800210873, -7.874263320317942]),
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

        // Group layer
        var baseGroup = new ol.layer.Group({
            title: 'Base Maps',
            fold: true,
            layers: [osmTile, noneTile]
        });
        map.addLayer(baseGroup);

        // Add points
        <?php foreach ($lokasi as $value) { ?>
            var point = new ol.Feature({
                geometry: new ol.geom.Point(ol.proj.fromLonLat([<?= $value['longitude'] ?>, <?= $value['latitude'] ?>])),
                lokasi: "<?= $value['nama_lokasi'] ?>",
                waktu: '<?= $value['tanggal_kejadian'] ?>',
                link: "<?= $value['link'] ?>"
            });

            var pointStyle = new ol.style.Style({
                image: new ol.style.Circle({
                    radius: 4,
                    fill: new ol.style.Fill({
                        color: 'white'
                    }),
                    stroke: new ol.style.Stroke({
                        color: 'black',
                        width: 1
                    })
                })
            });

            point.setStyle(pointStyle);

            var pointLayer = new ol.layer.Vector({
                source: new ol.source.Vector({
                    features: [point]
                }),
            });

            map.addLayer(pointLayer);
        <?php } ?>

        // Create overlay for the popup
        var popupOverlay = new ol.Overlay({
            element: document.getElementById('popup'),
            autoPan: true,
            autoPanAnimation: {
                duration: 250
            }
        });
        map.addOverlay(popupOverlay);

        // Get popup element references
        var popupCloser = document.getElementById('popup-closer');
        var popupContent = document.getElementById('popup-content');

        // Close popup when close button is clicked
        popupCloser.onclick = function() {
            popupOverlay.setPosition(undefined);
            popupCloser.blur();
            return false;
        };

        // Function to display the popup
        function displayPopup(coordinate, content) {
            popupContent.innerHTML = content;
            popupOverlay.setPosition(coordinate);
        }

        map.on('click', function(evt) {
            var feature = map.forEachFeatureAtPixel(evt.pixel, function(feature) {
                return feature;
            });

            if (feature) {
                var coordinate = feature.getGeometry().getCoordinates();
                var content = 'Lokasi : ' + feature.get('lokasi') + '<br>' +
                    'Waktu : ' + feature.get('waktu') + '<br>' +
                    'Sumber : ' + feature.get('link')
                displayPopup(coordinate, content);
            } else {
                popupOverlay.setPosition(undefined);
            }
        });
    </script>

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