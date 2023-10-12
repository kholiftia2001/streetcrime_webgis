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
        .search-container {
            position: absolute;
            top: 50px;
            left: 10px;
            z-index: 1000;
        }

        .search-input {
            padding: 5px;
            width: 300px;
            border-radius: 5px;
        }

        .search-button {
            padding: 5px 10px;
            margin-left: 5px;
            border-radius: 5px;
            background-color: #337ab7;
            color: #fff;
            cursor: pointer;
        }

        /* CSS untuk popup */
        .ol-popup {
            position: absolute;
            width: 300px;
            background-color: #fff;
            padding: 10px;
            border-radius: 4px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
            font-family: Arial, sans-serif;
            font-size: 14px;
            z-index: 1000;
        }

        /* Tombol untuk menutup popup */
        .ol-popup-closer {
            text-decoration: none;
            position: absolute;
            top: 2px;
            right: 8px;
            color: #c3c3c3;
            font-size: 14px;
        }

        /* Stil link dalam popup */
        .ol-popup-content a {
            color: #007bff;
            text-decoration: none;
        }

        /* Stil ketika link dihover */
        .ol-popup-content a:hover {
            text-decoration: underline;
        }

        /* Sembunyikan popup jika tidak aktif */
        .ol-popup {
            display: none;
        }
    </style>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center" style="height: 30px; background-color: #025464;">
        <div class="container d-flex align-items-center justify-content-between">
            <h4 class="logo" style="font-size: 16px; text-decoration: none; border-left: none; margin-right: auto; text-transform: none;">
                <a href="index.html">Data Lokasi Kejahatan Jalanan</a>
            </h4>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?= base_url('lokasi') ?>">Halaman Utama</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang Sistem</a></li>
                    <li class="dropdown"><a href="#"><span>Fitur</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url('lokasi/petalogin') ?>">Peta</a></li>
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
                    <li class="dropdown"><a href="#"><span>EDIT</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url('Lokasi/inputLokasi') ?>">Input Lokasi</a></li>
                            <li><a href="<?= base_url('Lokasi/dataLokasi') ?>">Data Lokasi</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="<?= base_url('auth/logout') ?>">Logout</a></li>
                </ul>
        </div>
    </header>


    <div class="row">
        <div class="search-container">
            <input type="text" id="search-input" class="search-input" placeholder="Cari lokasi...">
            <button id="search-button" class="search-button">Cari</button>
        </div>

        <div class="col-sm-7">
            <div id="map" style="width: 100%; height:100%; position: relative; top:40px"></div>
        </div>


        <div class="col-sm-4" style="position: relative; top:40px; font-size: 14px;">
            <h2 style="font-size: 18px; text-align: center;"><b>Input Data Sleman</b></h2>
            <hr>
            <div class="row">
                <?php
                if (session()->getFlashdata('pesan')) {
                    echo '<div class="alert alert-success">';
                    echo session()->getFlashdata('pesan');
                    echo '</div>';
                }
                ?>

                <?php $errors = validation_errors() ?>
                <?php echo form_open_multipart('Lokasi/insertDataSleman') ?>

                <div class="form-group">
                    <label>No</label>
                    <input class="form-control" name="no">
                    <p class="text-danger"><?= isset($errors['no']) ? validation_show_error('no') : '' ?></p>
                </div>

                <div class="form-group">
                    <label>Tindak Pidana</label>
                    <input class="form-control" name="tindak_pidana">
                    <p class="text-danger"><?= isset($errors['tindak_pidana']) ? validation_show_error('tindak_pidana') : '' ?></p>
                </div>

                <div class="form-group">
                    <label>Tanggal Kejadian</label>
                    <input class="form-control" name="tanggal">
                    <p class="text-danger"><?= isset($errors['tanggal']) ? validation_show_error('tanggal') : '' ?></p>
                </div>

                <div class="form-group">
                    <label>Hari</label>
                    <input class="form-control" name="hari">
                    <p class="text-danger"><?= isset($errors['hari']) ? validation_show_error('hari') : '' ?></p>
                </div>

                <div class="form-group">
                    <label>Bulan</label>
                    <input class="form-control" name="bulan">
                    <p class="text-danger"><?= isset($errors['bulan']) ? validation_show_error('bulan') : '' ?></p>
                </div>

                <div class="form-group">
                    <label>Tahun</label>
                    <input class="form-control" name="tahun">
                    <p class="text-danger"><?= isset($errors['tahun']) ? validation_show_error('tahun') : '' ?></p>
                </div>

                <div class="form-group">
                    <label>Jam</label>
                    <input class="form-control" name="waktu">
                    <p class="text-danger"><?= isset($errors['waktu']) ? validation_show_error('waktu') : '' ?></p>
                </div>

                <div class="form-group">
                    <label>Tempat Kejadian Perkara</label>
                    <input class="form-control" name="tkp">
                    <p class="text-danger"><?= isset($errors['tkp']) ? validation_show_error('tkp') : '' ?></p>
                </div>

                <div class="form-group">
                    <label>Latitude</label>
                    <input class="form-control" name="latitude" id="Latitude">
                    <p class="text-danger"><?= isset($errors['latitude']) ? validation_show_error('latitude') : '' ?></p>
                </div>

                <div class="form-group">
                    <label>Longitude</label>
                    <input class="form-control" name="longitude" id="Longitude">
                    <p class="text-danger"><?= isset($errors['longitude']) ? validation_show_error('longitude') : '' ?></p>
                </div>

                <div class="form-group">
                    <label>Status Data</label>
                    <input class="form-control" name="status">
                    <p class="text-danger"><?= isset($errors['status']) ? validation_show_error('status') : '' ?></p>
                </div>

            </div>

            <br>
            <button type="submit" class="btn btn-primary" style="font-size: 14px;">Simpan</button>
            <button type="reset" class="btn btn-success" style="font-size: 14px;">Reset</button>

            <?php echo form_close() ?>

        </div>
    </div>

    <div class="col-sm-4" style="position: relative; top:40px; font-size: 14px;">
        <h2 style="font-size: 18px; text-align: center;"><b>Input Data Yogyakarta</b></h2>
        <hr>
        <div class="row">
            <?php
            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success">';
                echo session()->getFlashdata('pesan');
                echo '</div>';
            }
            ?>

            <?php $errors = validation_errors() ?>
            <?php echo form_open_multipart('Lokasi/insertDataKota') ?>

            <div class="form-group">
                <label>No</label>
                <input class="form-control" name="no">
                <p class="text-danger"><?= isset($errors['no']) ? validation_show_error('no') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Tindak Pidana</label>
                <input class="form-control" name="tindak_pidana">
                <p class="text-danger"><?= isset($errors['tindak_pidana']) ? validation_show_error('tindak_pidana') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Tanggal Kejadian</label>
                <input class="form-control" name="tanggal">
                <p class="text-danger"><?= isset($errors['tanggal']) ? validation_show_error('tanggal') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Hari</label>
                <input class="form-control" name="hari">
                <p class="text-danger"><?= isset($errors['hari']) ? validation_show_error('hari') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Bulan</label>
                <input class="form-control" name="bulan">
                <p class="text-danger"><?= isset($errors['bulan']) ? validation_show_error('bulan') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Tahun</label>
                <input class="form-control" name="tahun">
                <p class="text-danger"><?= isset($errors['tahun']) ? validation_show_error('tahun') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Jam</label>
                <input class="form-control" name="waktu">
                <p class="text-danger"><?= isset($errors['waktu']) ? validation_show_error('waktu') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Tempat Kejadian Perkara</label>
                <input class="form-control" name="tkp">
                <p class="text-danger"><?= isset($errors['tkp']) ? validation_show_error('tkp') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Latitude</label>
                <input class="form-control" name="latitude" id="Latitude">
                <p class="text-danger"><?= isset($errors['latitude']) ? validation_show_error('latitude') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Longitude</label>
                <input class="form-control" name="longitude" id="Longitude">
                <p class="text-danger"><?= isset($errors['longitude']) ? validation_show_error('longitude') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Status Data</label>
                <input class="form-control" name="status">
                <p class="text-danger"><?= isset($errors['status']) ? validation_show_error('status') : '' ?></p>
            </div>

        </div>

        <br>
        <button type="submit" class="btn btn-primary" style="font-size: 14px;">Simpan</button>
        <button type="reset" class="btn btn-success" style="font-size: 14px;">Reset</button>

        <?php echo form_close() ?>

    </div>
    </div>

    <div class="col-sm-4" style="position: relative; top:40px; font-size: 14px;">
        <h2 style="font-size: 18px; text-align: center;"><b>Input Data Bantul</b></h2>
        <hr>
        <div class="row">
            <?php
            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success">';
                echo session()->getFlashdata('pesan');
                echo '</div>';
            }
            ?>

            <?php $errors = validation_errors() ?>
            <?php echo form_open_multipart('Lokasi/insertDataBantul') ?>

            <div class="form-group">
                <label>No</label>
                <input class="form-control" name="no">
                <p class="text-danger"><?= isset($errors['no']) ? validation_show_error('no') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Tindak Pidana</label>
                <input class="form-control" name="tindak_pidana">
                <p class="text-danger"><?= isset($errors['tindak_pidana']) ? validation_show_error('tindak_pidana') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Tanggal Kejadian</label>
                <input class="form-control" name="tanggal">
                <p class="text-danger"><?= isset($errors['tanggal']) ? validation_show_error('tanggal') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Hari</label>
                <input class="form-control" name="hari">
                <p class="text-danger"><?= isset($errors['hari']) ? validation_show_error('hari') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Bulan</label>
                <input class="form-control" name="bulan">
                <p class="text-danger"><?= isset($errors['bulan']) ? validation_show_error('bulan') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Tahun</label>
                <input class="form-control" name="tahun">
                <p class="text-danger"><?= isset($errors['tahun']) ? validation_show_error('tahun') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Jam</label>
                <input class="form-control" name="waktu">
                <p class="text-danger"><?= isset($errors['waktu']) ? validation_show_error('waktu') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Tempat Kejadian Perkara</label>
                <input class="form-control" name="tkp">
                <p class="text-danger"><?= isset($errors['tkp']) ? validation_show_error('tkp') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Latitude</label>
                <input class="form-control" name="latitude" id="Latitude">
                <p class="text-danger"><?= isset($errors['latitude']) ? validation_show_error('latitude') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Longitude</label>
                <input class="form-control" name="longitude" id="Longitude">
                <p class="text-danger"><?= isset($errors['longitude']) ? validation_show_error('longitude') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Status Data</label>
                <input class="form-control" name="status">
                <p class="text-danger"><?= isset($errors['status']) ? validation_show_error('status') : '' ?></p>
            </div>

        </div>

        <br>
        <button type="submit" class="btn btn-primary" style="font-size: 14px;">Simpan</button>
        <button type="reset" class="btn btn-success" style="font-size: 14px;">Reset</button>

        <?php echo form_close() ?>

    </div>
    </div>

    <div class="col-sm-4" style="position: relative; top:40px; font-size: 14px;">
        <h2 style="font-size: 18px; text-align: center;"><b>Input Data Gunung Kidul</b></h2>
        <hr>
        <div class="row">
            <?php
            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success">';
                echo session()->getFlashdata('pesan');
                echo '</div>';
            }
            ?>

            <?php $errors = validation_errors() ?>
            <?php echo form_open_multipart('Lokasi/insertDataGunkid') ?>

            <div class="form-group">
                <label>No</label>
                <input class="form-control" name="no">
                <p class="text-danger"><?= isset($errors['no']) ? validation_show_error('no') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Tindak Pidana</label>
                <input class="form-control" name="tindak_pidana">
                <p class="text-danger"><?= isset($errors['tindak_pidana']) ? validation_show_error('tindak_pidana') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Tanggal Kejadian</label>
                <input class="form-control" name="tanggal">
                <p class="text-danger"><?= isset($errors['tanggal']) ? validation_show_error('tanggal') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Hari</label>
                <input class="form-control" name="hari">
                <p class="text-danger"><?= isset($errors['hari']) ? validation_show_error('hari') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Bulan</label>
                <input class="form-control" name="bulan">
                <p class="text-danger"><?= isset($errors['bulan']) ? validation_show_error('bulan') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Tahun</label>
                <input class="form-control" name="tahun">
                <p class="text-danger"><?= isset($errors['tahun']) ? validation_show_error('tahun') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Jam</label>
                <input class="form-control" name="waktu">
                <p class="text-danger"><?= isset($errors['waktu']) ? validation_show_error('waktu') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Tempat Kejadian Perkara</label>
                <input class="form-control" name="tkp">
                <p class="text-danger"><?= isset($errors['tkp']) ? validation_show_error('tkp') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Latitude</label>
                <input class="form-control" name="latitude" id="Latitude">
                <p class="text-danger"><?= isset($errors['latitude']) ? validation_show_error('latitude') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Longitude</label>
                <input class="form-control" name="longitude" id="Longitude">
                <p class="text-danger"><?= isset($errors['longitude']) ? validation_show_error('longitude') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Status Data</label>
                <input class="form-control" name="status">
                <p class="text-danger"><?= isset($errors['status']) ? validation_show_error('status') : '' ?></p>
            </div>

        </div>

        <br>
        <button type="submit" class="btn btn-primary" style="font-size: 14px;">Simpan</button>
        <button type="reset" class="btn btn-success" style="font-size: 14px;">Reset</button>

        <?php echo form_close() ?>

    </div>
    </div>

    <div class="col-sm-4" style="position: relative; top:40px; font-size: 14px;">
        <h2 style="font-size: 18px; text-align: center;"><b>Input Data Kulon Progo</b></h2>
        <hr>
        <div class="row">
            <?php
            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success">';
                echo session()->getFlashdata('pesan');
                echo '</div>';
            }
            ?>

            <?php $errors = validation_errors() ?>
            <?php echo form_open_multipart('Lokasi/insertDataKulprog') ?>

            <div class="form-group">
                <label>No</label>
                <input class="form-control" name="no">
                <p class="text-danger"><?= isset($errors['no']) ? validation_show_error('no') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Tindak Pidana</label>
                <input class="form-control" name="tindak_pidana">
                <p class="text-danger"><?= isset($errors['tindak_pidana']) ? validation_show_error('tindak_pidana') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Tanggal Kejadian</label>
                <input class="form-control" name="tanggal">
                <p class="text-danger"><?= isset($errors['tanggal']) ? validation_show_error('tanggal') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Hari</label>
                <input class="form-control" name="hari">
                <p class="text-danger"><?= isset($errors['hari']) ? validation_show_error('hari') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Bulan</label>
                <input class="form-control" name="bulan">
                <p class="text-danger"><?= isset($errors['bulan']) ? validation_show_error('bulan') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Tahun</label>
                <input class="form-control" name="tahun">
                <p class="text-danger"><?= isset($errors['tahun']) ? validation_show_error('tahun') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Jam</label>
                <input class="form-control" name="waktu">
                <p class="text-danger"><?= isset($errors['waktu']) ? validation_show_error('waktu') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Tempat Kejadian Perkara</label>
                <input class="form-control" name="tkp">
                <p class="text-danger"><?= isset($errors['tkp']) ? validation_show_error('tkp') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Latitude</label>
                <input class="form-control" name="latitude" id="Latitude">
                <p class="text-danger"><?= isset($errors['latitude']) ? validation_show_error('latitude') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Longitude</label>
                <input class="form-control" name="longitude" id="Longitude">
                <p class="text-danger"><?= isset($errors['longitude']) ? validation_show_error('longitude') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Status Data</label>
                <input class="form-control" name="status">
                <p class="text-danger"><?= isset($errors['status']) ? validation_show_error('status') : '' ?></p>
            </div>

        </div>

        <br>
        <button type="submit" class="btn btn-primary" style="font-size: 14px;">Simpan</button>
        <button type="reset" class="btn btn-success" style="font-size: 14px;">Reset</button>

        <?php echo form_close() ?>

    </div>
    </div>

    <div id="popup-container" class="ol-popup">
        <a href="#" id="popup-closer" class="ol-popup-closer"></a>
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

        //group layer
        var baseGroup = new ol.layer.Group({
            title: 'Base Maps',
            fold: true,
            layers: [osmTile, noneTile]
        });
        map.addLayer(baseGroup);

        // Create an empty source for points
        var pointSource = new ol.source.Vector();

        <?php foreach ($lokasi_sleman as $value) { ?>
            var point = new ol.Feature({
                geometry: new ol.geom.Point(ol.proj.fromLonLat([<?= $value['longitude'] ?>, <?= $value['latitude'] ?>])),
                lokasi: "<?= $value['tkp'] ?>",
                waktu: '<?= $value['tanggal'] ?>',
                tahun: "<?= $value['tahun'] ?>"
            });

            pointSource.addFeature(point);
        <?php } ?>

        // Create the layer for points using the source
        var pointLayer = new ol.layer.Vector({
            title: 'Lokasi kejahatan jalanan',
            source: pointSource
        });
        map.addLayer(pointLayer); // Add the point layer to the map

        // Create the default style for points
        var defaultPointStyle = new ol.style.Style({
            image: new ol.style.Circle({
                radius: 6,
                fill: new ol.style.Fill({
                    color: 'blue'
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

        var popupOverlay = new ol.Overlay({
            element: document.getElementById('popup-container'), // 'popup-container' adalah ID dari elemen div yang berisi konten popup
            autoPan: true,
            autoPanAnimation: {
                duration: 250,
            },
        });
        map.addOverlay(popupOverlay);

        map.on('click', function(evt) {
            var feature = map.forEachFeatureAtPixel(evt.pixel, function(feature) {
                return feature;
            });

            if (feature) {
                var coordinate = feature.getGeometry().getCoordinates();
                var content = '<strong>Lokasi:</strong> ' + feature.get('lokasi') + '<br>' +
                    '<strong>Waktu:</strong> ' + feature.get('waktu') + '<br>' +
                    '<a href="' + feature.get('link') + '" target="_blank">Lihat lebih lanjut</a>';

                popupOverlay.setPosition(coordinate);
                document.getElementById('popup-content').innerHTML = content;
                popupOverlay.getElement().style.display = 'block';
                feature.set('clicked', true);
            } else {
                popupOverlay.getElement().style.display = 'none';
            }
        });

        // Tambahkan kode berikut di bawah untuk melakukan pencarian di OSM API
        var searchInput = document.getElementById('search-input');
        var searchButton = document.getElementById('search-button');
        var suggestionList = document.getElementById('suggestion-list');

        $(searchInput).autocomplete({
            source: function(request, response) {
                var query = request.term;
                var url = 'https://nominatim.openstreetmap.org/search?format=json&q=' + encodeURIComponent(query);

                fetch(url)
                    .then(function(response) {
                        return response.json();
                    })
                    .then(function(data) {
                        var suggestions = data.map(function(item) {
                            return item.display_name;
                        });
                        response(suggestions);
                    })
                    .catch(function(error) {
                        console.log('Terjadi kesalahan pada permintaan pencarian: ', error);
                    });
            },
            minLength: 2
        });

        searchButton.addEventListener('click', function() {
            var query = searchInput.value;
            var url = 'https://nominatim.openstreetmap.org/search?format=json&q=' + encodeURIComponent(query);

            fetch(url)
                .then(function(response) {
                    return response.json();
                })
                .then(function(data) {
                    if (data.length > 0) {
                        var result = data[0];
                        var lon = parseFloat(result.lon);
                        var lat = parseFloat(result.lat);

                        map.getView().setCenter(ol.proj.fromLonLat([lon, lat]));
                        map.getView().setZoom(15);
                    } else {
                        console.log('Hasil pencarian tidak ditemukan');
                    }
                })
                .catch(function(error) {
                    console.log('Terjadi kesalahan pada permintaan pencarian: ', error);
                });
        });

        // Menambahkan event listener untuk mengambil koordinat saat klik di peta
        map.on('click', function(event) {
            var coordinate = event.coordinate;
            var lonLat = ol.proj.toLonLat(coordinate);
            var longitude = lonLat[0];
            var latitude = lonLat[1];

            // Menampilkan koordinat pada input Latitude dan Longitude
            document.getElementById('Latitude').value = latitude;
            document.getElementById('Longitude').value = longitude;
        });
    </script>
</body>

</html>