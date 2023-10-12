<?php
$regions = array(
    'default' => '-- Pilih Wilayah --',
    'sleman' => 'Sleman',
    'jogja' => 'Yogyakarta',
    'bantul' => 'Bantul',
    'kulonprogo' => 'Kulon Progo',
    'gunungkidul' => 'Gunung Kidul'
);

$selectedRegion = isset($_GET['region']) && array_key_exists($_GET['region'], $regions) ? $_GET['region'] : 'default'; // Default to "-- Pilih Wilayah --"

$lokasi = [
    'sleman' => $lokasi_sleman,
    'jogja' => $lokasi_kota,
    'bantul' => $lokasi_bantul,
    'kulonprogo' => $lokasi_kulprog,
    'gunungkidul' => $lokasi_gunkid
];

$judul = $regions[$selectedRegion];
$lokasiRegion = isset($lokasi[$selectedRegion]) ? $lokasi[$selectedRegion] : [];

$activeRegion = isset($_GET['region']) && array_key_exists($_GET['region'], $regions) ? $_GET['region'] : 'default';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sijaga | <?= $judul ?></title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="<?= base_url('sigali/') ?>css/stylestables.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

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
        /* Gaya menu dan header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #025464;
        }

        /* Gaya konten tabel */
        .card {
            width: 100%;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Media queries untuk tabel pada layar kecil */
        @media (max-width: 768px) {
            .card-body {
                overflow-x: auto;
            }
        }

        /* Gaya menu wilayah */
        .region-menu ul {
            list-style: none;
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            /* Agar item dapat berbaris pada layar kecil */
        }

        .region-menu li {
            margin: 0;
            padding: 0;
            flex: 0 0 33.33%;
            /* Menampilkan 3 item per baris pada layar kecil */
            max-width: 33.33%;
            /* Lebar maksimal item pada layar kecil */
        }

        .region-menu a {
            display: inline-block;
            padding: 10px 15px;
            border-radius: 5px;
            color: #fff;
            text-decoration: none;
            background-color: #3498db;
            /* Warna latar belakang */
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        /* Media queries untuk menu wilayah pada layar kecil */
        @media (max-width: 768px) {
            .region-menu ul {
                justify-content: center;
                /* Tengahkan item pada layar kecil */
            }

            .region-menu li {
                flex: 0 0 100%;
                /* Menampilkan 1 item per baris pada layar sangat kecil */
                max-width: 100%;
                /* Lebar maksimal item pada layar sangat kecil */
            }
        }

        .status-text {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            padding: 3px;
            /* Atur padding sesuai kebutuhan */
            border-radius: 5px;
            color: black;
            font-size: 12px;
            text-align: center;
        }
    </style>

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center" style="height: 30px; background-color: #025464;">
        <div class=" container d-flex align-items-center justify-content-between">

            <h1 class="logo" style="font-size: 14px; text-decoration: none; border-left: none; margin-right: auto; text-transform: none;"><a href="<?= base_url('Home') ?>">Data Lokasi Kejahatan Jalanan</a></h1>

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
    </header><!-- End Header -->

    <div>
        <div id="layoutSidenav_content" style="padding-top: 40px;">
            <main>
                <div class="container-fluid px-4">
                    <!-- Tampilkan menu untuk memilih wilayah -->
                    <!-- Tampilkan menu untuk memilih wilayah -->
                    <div class="region-menu">
                        <label for="region-dropdown">Pilih Wilayah:</label>
                        <select id="region-dropdown" class="form-select" onchange="location = this.value;">
                            <?php foreach ($regions as $regionKey => $regionName) : ?>
                                <option value="?region=<?php echo $regionKey; ?>" <?php echo ($regionKey === $activeRegion) ? 'selected' : ''; ?>>
                                    <?php echo $regionName; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>



                    <?php
                    if (isset($_GET['region']) && array_key_exists($_GET['region'], $regions)) {
                        // Tampilkan tabel jika wilayah dipilih
                        echo '<h4 class="mb-30 mt-4">Daftar Lokasi Rekam Jejak Kejahatan Jalanan - ' . $regions[$selectedRegion] . '</h4>';
                        echo '<div class="card mb-4">';
                        echo '<div class="card-header">';
                        echo '<i class="fas fa-table me-1"></i> Data Lokasi';
                        echo '</div>';
                        echo '<div class="card-body">';

                        if (session()->getFlashdata('pesan')) {
                            echo '<div class="alert alert-success">';
                            echo session()->getFlashdata('pesan');
                            echo '</div>';
                        }

                        // Tampilkan tabel berdasarkan $lokasiRegion
                        echo '<table id="datatablesSimple">';
                        echo '<thead>';
                        echo '<tr>';
                        echo '<th>No</th>';
                        echo '<th>Tindak Pidana</th>';
                        echo '<th>TKP</th>';
                        echo '<th>Waktu</th>';
                        echo '<th>Jam</th>';
                        echo '<th>Posisi</th>';
                        echo '<th>Tahun</th>';
                        echo '<th>Status</th>';
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';

                        $no = 1;
                        foreach ($lokasiRegion as $key => $value) {
                            echo '<tr>';
                            echo '<td>' . $no++ . '</td>';
                            echo '<td>' . $value['tindak_pidana'] . '</td>';
                            echo '<td>' . $value['tkp'] . '</td>';
                            echo '<td>' . $value['tanggal'] . '</td>';
                            echo '<td>' . $value['waktu'] . '</td>';
                            echo '<td>' . $value['latitude'] . ', ' . $value['longitude'] . '</td>';
                            echo '<td>' . $value['tahun'] . '</td>';

                            // Menentukan warna latar belakang berdasarkan nilai status
                            $statusColor = '';
                            if ($value['status'] === 'Teridentifikasi') {
                                $statusColor = 'green';
                            } elseif ($value['status'] === 'Tidak teridentifikasi dengan baik') {
                                $statusColor = 'yellow';
                            }

                            // Menerapkan gaya inline pada kolom status dan menambahkan atribut title
                            echo '<td><div class="status-text" style="background-color: ' . $statusColor . '">' . $value['status'] . '</div></td>';

                            echo '</tr>';
                        }

                        echo '</tbody>';
                        echo '</table>';
                        echo '</div>';
                        echo '</div>';
                    } else {
                        // Tampilkan konten default di sini
                        echo '<p>Silakan pilih wilayah untuk menampilkan data lokasi.</p>';
                    }
                    ?>

                </div>
                <div class="card mb-4">
                    <!-- ... (bagian card sebelumnya) ... -->
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('sigali/') ?>js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('sigali/') ?>js/datatables-simple-demo.js"></script>
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