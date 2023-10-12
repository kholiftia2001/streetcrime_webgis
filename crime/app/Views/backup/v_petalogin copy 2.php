<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIJAGA | <?= $judul ?></title>
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

    <style>
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
                    <li><a class="nav-link scrollto active" href="#hero">Halaman Utama</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang Sistem</a></li>
                    <li class="dropdown"><a href="#"><span>Fitur</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url('Home/peta') ?>">Peta</a></li>
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
                    <li><a class="nav-link scrollto" href="#contact">Hubungi Kami</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header>

    <div id="map">
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

        <button id="homeButton"></button>
        <button id="geolocation-button"></button>

        <div class="search-container" style="font-size: 13px;">
            <input type="text" id="searchInput" placeholder="Masukkan kata kunci...">
            <button id="searchButton">Cari...</button>
            <ul id="suggestions"></ul>
        </div>

        <!-- Di dalam elemen <a>, tambahkan class "telepon" -->
        <a href="tel:+6281575473924" class="telepon"></a>

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
            title: 'Kejahatan Jalanan Bantul',
            source: pointSource4
        });

        var pointLayer5 = new ol.layer.Vector({
            title: 'Kejahatan Jalanan Bantul',
            source: pointSource5
        });

        // BATAS ADMINSTRASI
        // Buat sumber vektor dari GeoJSON
        var batasSource = new ol.source.Vector({
            url: '<?= base_url('sigali/') ?>data/batasprovinsi.geojson',
            format: new ol.format.GeoJSON(),
        });

        // Buat layer vektor
        var batasLayer = new ol.layer.Vector({
            title: 'Batas Administrasi',
            source: batasSource
        });

        //MENAMBAHKAN LAYER KE PETA
        map.addLayer(pointLayer); // Add the point layer to the map
        map.addLayer(pointLayer2); // Add the point layer to the map
        map.addLayer(pointLayer3);
        map.addLayer(pointLayer4);
        map.addLayer(pointLayer5);
        map.addLayer(batasLayer); // Add the boundary layer to the map


        // Menetapkan indeks tampilan untuk layer-layer
        pointLayer.setZIndex(1); // Layer titik
        pointLayer2.setZIndex(1);
        pointLayer3.setZIndex(1);
        pointLayer4.setZIndex(1);
        pointLayer5.setZIndex(1);
        batasLayer.setZIndex(0); // Layer poligon

        // Create the default style for points
        var defaultPointStyle = new ol.style.Style({
            image: new ol.style.Circle({
                radius: 6,
                fill: new ol.style.Fill({
                    color: 'rgb(241, 26, 123)'
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
                    color: 'rgb(50, 107, 168)'
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
                    color: 'rgb(142, 168, 50)'
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
                    color: 'rgb(113, 117, 113)'
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
                    color: 'rgb(255, 112, 51)'
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

        // Create the default style for boundaries
        var defaultBoundaryStyle = new ol.style.Style({
            fill: new ol.style.Fill({
                color: 'rgba(0, 0, 255, 0)'
            }),
            stroke: new ol.style.Stroke({
                color: 'rgb(220, 132, 73)',
                width: 1
            })
        });

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
            var clicked = feature.get('clicked');
            return clicked ? selectedBoundaryStyle : defaultBoundaryStyle;
        });

        // Fungsi Pencarian
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
                    var extent = geometry.getExtent();
                    map.getView().fit(extent, {
                        duration: 1000
                    });

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
                    var extent = geometry.getExtent();
                    map.getView().fit(extent, {
                        duration: 1000
                    });

                    // Mengatur warna dan gaya fitur yang dicari
                    feature.setStyle(selectedPointStyle);

                    foundPointFeature2 = true; // Set flag titik ditemukan
                } else {
                    feature.setStyle(defaultPointStyle2); // Reset warna dan gaya fitur yang tidak cocok
                }
            });

            pointFeatures3.forEach(function(feature) {
                var name = feature.get('tkp');
                if (name && name.toLowerCase() === keyword.toLowerCase()) {
                    var geometry = feature.getGeometry();
                    var extent = geometry.getExtent();
                    map.getView().fit(extent, {
                        duration: 1000
                    });

                    // Mengatur warna dan gaya fitur yang dicari
                    feature.setStyle(selectedPointStyle);

                    foundPointFeature3 = true; // Set flag titik ditemukan
                } else {
                    feature.setStyle(defaultPointStyle3); // Reset warna dan gaya fitur yang tidak cocok
                }
            });

            pointFeatures4.forEach(function(feature) {
                var name = feature.get('tkp');
                if (name && name.toLowerCase() === keyword.toLowerCase()) {
                    var geometry = feature.getGeometry();
                    var extent = geometry.getExtent();
                    map.getView().fit(extent, {
                        duration: 1000
                    });

                    // Mengatur warna dan gaya fitur yang dicari
                    feature.setStyle(selectedPointStyle);

                    foundPointFeature4 = true; // Set flag titik ditemukan
                } else {
                    feature.setStyle(defaultPointStyle4); // Reset warna dan gaya fitur yang tidak cocok
                }
            });

            pointFeatures5.forEach(function(feature) {
                var name = feature.get('tkp');
                if (name && name.toLowerCase() === keyword.toLowerCase()) {
                    var geometry = feature.getGeometry();
                    var extent = geometry.getExtent();
                    map.getView().fit(extent, {
                        duration: 1000
                    });

                    // Mengatur warna dan gaya fitur yang dicari
                    feature.setStyle(selectedPointStyle);

                    foundPointFeature5 = true; // Set flag titik ditemukan
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
                    feature.setStyle(selectedBoundaryStyle);

                    foundBoundaryFeature = true; // Set flag batas ditemukan

                    // Menambahkan fitur yang dicari ke batasLayer
                    batasLayer.getSource().addFeature(feature);
                } else {
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

        // Close boundary popup when close button is clicked
        boundaryPopupCloser.onclick = function() {
            boundaryPopupOverlay.setPosition(undefined);
            boundaryPopupCloser.blur();
            return false;
        };

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
                var content = '<strong>Lokasi:</strong> ' + pointFeature.get('tkp') + '<br>' +
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
                    selectedFeature.set('clicked', false);

                    // Determine the layer of the selected feature
                    var layerName = selectedFeature.get('layerName'); // Assuming you have a layer name property

                    // Set the default style based on the layer
                    selectedFeature.setStyle(defaultPointStyles[layerName]);

                    selectedFeature = null; // Reset the selected feature reference
                }

                // Set the 'clicked' property and style for the newly selected point feature
                pointFeature.set('clicked', true);
                pointFeature.setStyle(selectedPointStyle);
                selectedFeature = pointFeature;
            } else if (boundaryFeature) {
                var coordinates = evt.coordinate;
                var properties = boundaryFeature.getProperties();
                var content = '<ul>';
                for (var property in properties) {
                    if (properties.hasOwnProperty(property) && (property === 'KAL_KEL' || property === 'KEC_KAPN' || property === 'KAB_KOTA')) {
                        var alias = property === 'KAL_KEL' ? 'Kalurahan' : (property === 'KEC_KAPN' ? 'Kecamatan' : 'Kabupaten');
                        content += '<li><b>' + alias + ':</b> ' + properties[property] + '</li>';
                    }
                }
                content += '</ul>';
                displayBoundaryPopup(coordinates, content);
                pointPopupOverlay.setPosition(undefined); // Hide point popup

                // Clear the 'clicked' property and styles of the previously selected feature
                if (selectedFeature) {
                    selectedFeature.set('clicked', false);
                    selectedFeature.setStyle(selectedPointStyle); // Reset to default point style
                    selectedFeature = null;
                }

                // Set the 'clicked' property and style for the newly selected boundary feature
                boundaryFeature.set('clicked', true);
                boundaryFeature.setStyle(selectedBoundaryStyle);
                selectedFeature = boundaryFeature;
            } else {
                pointPopupOverlay.setPosition(undefined); // Hide point popup
                boundaryPopupOverlay.setPosition(undefined); // Hide boundary popup

                // Clear the 'clicked' property and styles of the previously selected feature
                if (selectedFeature) {
                    selectedFeature.set('clicked', false);
                    selectedFeature.setStyle(defaultBoundaryStyle); // Reset to default point style
                    selectedFeature = null;
                }
            }
        });

        boundaryPopupCloser.onclick = function() {
            boundaryPopupOverlay.setPosition(undefined);
            boundaryPopupCloser.blur();

            // Clear the 'clicked' property and styles of the selected feature
            if (selectedFeature) {
                selectedFeature.set('clicked', false);
                selectedFeature.setStyle(defaultBoundaryStyle); // Reset to default point style
                selectedFeature = null;
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

        // GEOLOCATION
        var geolocation = new ol.Geolocation({
            trackingOptions: {
                enableHighAccuracy: true
            },
            projection: map.getView().getProjection()
        });

        var geolocationButton = document.getElementById('geolocation-button');
        geolocationButton.addEventListener('click', function() {
            if (geolocation.getTracking()) {
                geolocation.setTracking(false);
            } else {
                geolocation.setTracking(true);
            }
        });

        geolocation.on('change:position', function() {
            var coordinates = geolocation.getPosition();
            if (coordinates) {
                map.getView().animate({
                    center: coordinates,
                    zoom: 16
                }, {
                    duration: 2000 // Atur durasi animasi sesuai kebutuhan Anda (dalam milidetik)
                });
                geolocation.setTracking(false);

                // Tambahkan animasi pada marker di lokasi pengguna
                var markerFeature = new ol.Feature(new ol.geom.Point(coordinates));
                var markerSource = new ol.source.Vector({
                    features: [markerFeature]
                });
                var markerLayer = new ol.layer.Vector({
                    source: markerSource,
                    style: new ol.style.Style({
                        image: new ol.style.Circle({
                            radius: 7, // Atur ukuran titik sesuai kebutuhan Anda
                            fill: new ol.style.Fill({
                                color: 'blue' // Atur warna titik sesuai kebutuhan Anda
                            }),
                            stroke: new ol.style.Stroke({
                                color: 'white', // Atur warna garis tepi titik sesuai kebutuhan Anda
                                width: 3 // Atur lebar garis tepi titik sesuai kebutuhan Anda
                            })
                        })
                    }),
                    zIndex: 999 // Atur zIndex sesuai kebutuhan Anda untuk memastikan marker selalu tampil di atas lapisan lainnya
                });
                map.addLayer(markerLayer);

                // Tambahkan fitur buffer di sekitar lokasi pengguna
                var bufferFeature = new ol.Feature(
                    new ol.geom.Circle(coordinates, 500) // Ubah 100 dengan jari-jari buffer yang Anda inginkan (dalam meter)
                );
                var bufferSource = new ol.source.Vector({
                    features: [bufferFeature]
                });
                var bufferLayer = new ol.layer.Vector({
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
    </script>
</body>

</html>