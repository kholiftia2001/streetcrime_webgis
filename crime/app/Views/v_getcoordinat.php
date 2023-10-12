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
            font-family: "Arial", sans-serif;
            background-color: rgb(255, 255, 255);
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
            padding: 5px;
            border-radius: 10px;
            border: 1px solid #cccccc;
            bottom: 12px;
            left: -50px;
            min-width: 280px;
        }

        .ol-popup:after,
        .ol-popup:before {
            top: 100%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .ol-popup:after {
            border-top-color: white;
            border-width: 10px;
            left: 48px;
            margin-left: -10px;
        }

        .ol-popup:before {
            border-top-color: #cccccc;
            border-width: 11px;
            left: 48px;
            margin-left: -11px;
        }

        .ol-popup-closer {
            position: absolute;
            top: 8px;
            right: 8px;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            z-index: 2;
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center" style="height: 30px; background-color: #025464;">
        <div class="container d-flex align-items-center justify-content-between">
            <h4 class="logo" style="font-size: 16px; text-decoration: none; border-left: none; margin-right: auto; text-transform: none;">
                <a href="index.html">Input Lokasi</a>
            </h4>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?= base_url('Home') ?>">Halaman Utama</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('Home#about') ?>">Tentang Sistem</a></li>
                    <li class="dropdown"><a href="#"><span>Fitur</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url('Home/peta') ?>">Peta</a></li>
                            <li><a href="<?= base_url('Home/tabel') ?>">Data tabular</a></li>
                            <li class="dropdown"><a><span>Informasi kontak</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="<?= base_url('Home/kontak') ?>">Kontak Polsek</a></li>
                                    <li><a href="<?= base_url('Home/kontak') ?>">Kontak rumah sakit</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url('Home/edukasi') ?>">Edukasi</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="<?= base_url('Home#contact') ?>">Hubungi Kami</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header>

    <div class="row">
        <div class="col-sm-8">
            <div id="map" style="width: 100%; height:100vh"></div>
        </div>
        <div id="popup" class="ol-popup">
            <span id="popup-closer" class="ol-popup-closer">&times;</span>
            <div id="popup-content"></div>
        </div>

        <div class="col-sm-4" style="position: relative; top:30px">
            <h2>Get Coordinat</h2>
            <hr>
            <div class="row">

                <div class="form-group">
                    <label>Latitude</label>
                    <input class="form-control" name="latitude" id="Latitude">
                </div>

                <div class="form-group">
                    <label>Longitude</label>
                    <input class="form-control" name="longitude" id="Longitude">
                </div>
            </div>
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

            //group layer
            var baseGroup = new ol.layer.Group({
                title: 'Base Maps',
                fold: true,
                layers: [osmTile, noneTile]
            });
            map.addLayer(baseGroup);

            // Buat sumber vektor dari GeoJSON
            var batasSource = new ol.source.Vector({
                url: '<?= base_url('sigali/') ?>data/data.geojson',
                format: new ol.format.GeoJSON(),
            });

            // Buat layer vektor
            var batasLayer = new ol.layer.Vector({
                title: 'Batas Administrasi',
                source: batasSource,
                style: function(feature) {
                    // Gaya default
                    var defaultStyle = new ol.style.Style({
                        fill: new ol.style.Fill({
                            color: 'rgba(5, 88, 139, 0.1)' // Warna isian default
                        }),
                        stroke: new ol.style.Stroke({
                            color: 'rgba(5, 88, 139, 0.4)', // Warna garis default
                            width: 1 // Lebar garis default
                        })
                    });

                    // Gaya ketika fitur diklik
                    var selectedStyle = new ol.style.Style({
                        fill: new ol.style.Fill({
                            color: '#E57C23' // Warna isian saat diklik
                        }),
                        stroke: new ol.style.Stroke({
                            color: '#E57C23', // Warna garis saat diklik
                            width: 1 // Lebar garis saat diklik
                        })
                    });

                    // Periksa apakah fitur saat ini diklik atau tidak
                    if (feature.get('clicked')) {
                        return selectedStyle;
                    } else {
                        return defaultStyle;
                    }
                }
            });

            map.addLayer(batasLayer);

            var overlay = new ol.Overlay({
                element: document.getElementById('popup'),
                autoPan: true,
                autoPanAnimation: {
                    duration: 150
                }
            });
            map.addOverlay(overlay);

            var popupContent = document.getElementById('popup-content');
            var popupCloser = document.getElementById('popup-closer');

            var popupProperties = ['KAL_KEL', 'KEC_KAPN', 'KAB_KOTA'];
            var propertyAliases = {
                KAL_KEL: 'Kalurahan',
                KEC_KAPN: 'Kecamatan',
                KAB_KOTA: 'Kabupaten'
            };

            var selectedFeature = null; // Menyimpan referensi fitur yang sedang dipilih

            map.on('singleclick', function(evt) {
                overlay.setPosition(undefined);
                map.forEachFeatureAtPixel(evt.pixel, function(feature) {
                    var coordinates = evt.coordinate;
                    var properties = feature.getProperties();
                    var content = '<ul>';
                    for (var property in properties) {
                        if (properties.hasOwnProperty(property) && popupProperties.includes(property)) {
                            var alias = propertyAliases[property] || property;
                            content += '<li><b>' + alias + ':</b> ' + properties[property] + '</li>';
                        }
                    }
                    content += '</ul>';
                    popupContent.innerHTML = content;
                    overlay.setPosition(coordinates);

                    // Cek apakah ada fitur sebelumnya yang sedang dipilih
                    if (selectedFeature && selectedFeature !== feature) {
                        // Reset properti 'clicked' pada fitur sebelumnya
                        selectedFeature.set('clicked', false);
                        // Perbarui gaya pada fitur sebelumnya menjadi default
                        selectedFeature.setStyle(null);
                    }

                    // Setel properti 'clicked' pada fitur yang diklik
                    feature.set('clicked', true);
                    // Perbarui gaya pada fitur yang diklik
                    feature.setStyle(batasLayer.getStyle());

                    // Simpan referensi fitur yang sedang dipilih
                    selectedFeature = feature;
                });
            });

            popupCloser.onclick = function() {
                overlay.setPosition(undefined);
                popupCloser.blur();

                // Reset properti 'clicked' pada fitur yang dipilih
                if (selectedFeature) {
                    selectedFeature.set('clicked', false);
                    selectedFeature.setStyle(null);
                    selectedFeature = null;
                }

                return false;
            };
        </script>
</body>

</html>