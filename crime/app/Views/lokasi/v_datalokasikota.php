<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SIJAGA | <?= $judul ?></title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="<?= base_url('sigali/') ?>css/stylestables.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

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

        /* Gaya status circle */
        /* .status-circle {
            display: block;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin: 0 auto;
            cursor: pointer;
        } */
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
        <div class="container d-flex align-items-center justify-content-between">
            <h4 class="logo" style="font-size: 16px; text-decoration: none; border-left: none; margin-right: auto; text-transform: none;">
                <a href="index.html">Data Lokasi Kejahatan Jalanan Kota Yogyakarta</a>
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
    </header>

    <div id="layoutSidenav_content" style="position: relative; top:30px">
        <main>
            <div class="container-fluid px-4">
                <h4 class="mb-30 mt-4">Data Lokasi Kejahatan Jalanan Kota Yogyakarta</h4>

            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Lokasi
                </div>
                <div class="card-body">
                    <?php
                    if (session()->getFlashdata('pesan')) {
                        echo '<div class="alert alert-success">';
                        echo session()->getFlashdata('pesan');
                        echo '</div>';
                    }
                    ?>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tindak Pidana</th>
                                <th>Tempat Kejadian Perkara</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Posisi Geografis</th>
                                <th>Tahun</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1;
                            foreach ($lokasi_kota as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['tindak_pidana'] ?></td>
                                    <td><?= $value['tkp'] ?></td>
                                    <td><?= $value['tanggal'] ?></td>
                                    <td><?= $value['waktu'] ?></td>
                                    <td><?= $value['latitude'] ?>, <?= $value['longitude'] ?></td>
                                    <td><?= $value['tahun'] ?></td>

                                    <?php
                                    // Menentukan warna latar belakang berdasarkan nilai status
                                    // Menentukan warna latar belakang berdasarkan nilai status
                                    $statusColor = '';
                                    if ($value['status'] === 'Teridentifikasi') {
                                        $statusColor = 'green';
                                    } elseif ($value['status'] === 'Tidak teridentifikasi dengan baik') {
                                        $statusColor = 'yellow';
                                    }

                                    // Menerapkan gaya inline pada kolom status
                                    echo '<td><div class="status-text" style="background-color: ' . $statusColor . '">' . $value['status'] . '</div></td>';
                                    ?>

                                    <td>
                                        <a href=" <?= base_url('lokasi/editLokasiKota/' . $value['no']) ?>" class=" btn btn-warning" style="font-size: 14px;">Sunting</a>
                                        <a href="<?= base_url('lokasi/deleteLokasiKota/' . $value['no']) ?>" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data?')" style="font-size: 14px;">Hapus !</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
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