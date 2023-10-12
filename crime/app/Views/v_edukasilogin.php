<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sijaga | <?= $judul ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('sigali/') ?>assets/images/edu.png" rel="icon">
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

  <style>
    section.content {
      margin-bottom: 0;
    }
  </style>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center" style="height: 30px; background-color: #025464;">
    <div class=" container d-flex align-items-center justify-content-between">

      <h1 class="logo" style="font-size: 14px; text-decoration: none; border-left: none; margin-right: auto; text-transform: none;"><a href="<?= base_url('Home') ?>">Edukasi</a></h1>

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

  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="font-family:arial, 'helvetica neue', helvetica, sans-serif">

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">
    <title>New message 2</title><!--[if (mso 16)]><style type="text/css">     a {text-decoration: none;}     </style><![endif]--><!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--><!--[if gte mso 9]><xml> <o:OfficeDocumentSettings> <o:AllowPNG></o:AllowPNG> <o:PixelsPerInch>96</o:PixelsPerInch> </o:OfficeDocumentSettings> </xml><![endif]--><!--[if !mso]><!-- -->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap&subset=gujarati,latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"><!--<![endif]-->
    <style type="text/css">
      .rollover div {
        font-size: 0;
      }

      .rollover:hover .rollover-first {
        max-height: 0px !important;
        display: none !important;
      }

      .rollover:hover .rollover-second {
        max-height: none !important;
        display: block !important;
      }

      #outlook a {
        padding: 0;
      }

      .es-button {
        mso-style-priority: 100 !important;
        text-decoration: none !important;
      }

      a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
      }

      .es-desk-hidden {
        display: none;
        float: left;
        overflow: hidden;
        width: 0;
        max-height: 0;
        line-height: 0;
        mso-hide: all;
      }

      @media only screen and (max-width:600px) {

        p,
        ul li,
        ol li,
        a {
          line-height: 150% !important
        }

        h1,
        h2,
        h3,
        h1 a,
        h2 a,
        h3 a {
          line-height: 120%
        }

        h1 {
          font-size: 30px !important;
          text-align: left
        }

        h2 {
          font-size: 24px !important;
          text-align: left
        }

        h3 {
          font-size: 20px !important;
          text-align: left
        }

        .es-header-body h1 a,
        .es-content-body h1 a,
        .es-footer-body h1 a {
          font-size: 30px !important;
          text-align: left
        }

        .es-header-body h2 a,
        .es-content-body h2 a,
        .es-footer-body h2 a {
          font-size: 24px !important;
          text-align: left
        }

        .es-header-body h3 a,
        .es-content-body h3 a,
        .es-footer-body h3 a {
          font-size: 20px !important;
          text-align: left
        }

        .es-menu td a {
          font-size: 14px !important
        }

        .es-header-body p,
        .es-header-body ul li,
        .es-header-body ol li,
        .es-header-body a {
          font-size: 14px !important
        }

        .es-content-body p,
        .es-content-body ul li,
        .es-content-body ol li,
        .es-content-body a {
          font-size: 14px !important
        }

        .es-footer-body p,
        .es-footer-body ul li,
        .es-footer-body ol li,
        .es-footer-body a {
          font-size: 12px !important
        }

        .es-infoblock p,
        .es-infoblock ul li,
        .es-infoblock ol li,
        .es-infoblock a {
          font-size: 12px !important
        }

        *[class="gmail-fix"] {
          display: none !important
        }

        .es-m-txt-c,
        .es-m-txt-c h1,
        .es-m-txt-c h2,
        .es-m-txt-c h3 {
          text-align: center !important
        }

        .es-m-txt-r,
        .es-m-txt-r h1,
        .es-m-txt-r h2,
        .es-m-txt-r h3 {
          text-align: right !important
        }

        .es-m-txt-l,
        .es-m-txt-l h1,
        .es-m-txt-l h2,
        .es-m-txt-l h3 {
          text-align: left !important
        }

        .es-m-txt-r img,
        .es-m-txt-c img,
        .es-m-txt-l img {
          display: inline !important
        }

        .es-button-border {
          display: inline-block !important
        }

        a.es-button,
        button.es-button {
          font-size: 16px !important;
          display: inline-block !important
        }

        .es-adaptive table,
        .es-left,
        .es-right {
          width: 100% !important
        }

        .es-content table,
        .es-header table,
        .es-footer table,
        .es-content,
        .es-footer,
        .es-header {
          width: 100% !important;
          max-width: 600px !important
        }

        .es-adapt-td {
          display: block !important;
          width: 100% !important
        }

        .adapt-img {
          width: 100% !important;
          height: auto !important
        }

        .es-m-p0 {
          padding: 0px !important
        }

        .es-m-p0r {
          padding-right: 0px !important
        }

        .es-m-p0l {
          padding-left: 0px !important
        }

        .es-m-p0t {
          padding-top: 0px !important
        }

        .es-m-p0b {
          padding-bottom: 0 !important
        }

        .es-m-p20b {
          padding-bottom: 20px !important
        }

        .es-mobile-hidden,
        .es-hidden {
          display: none !important
        }

        tr.es-desk-hidden,
        td.es-desk-hidden,
        table.es-desk-hidden {
          width: auto !important;
          overflow: visible !important;
          float: none !important;
          max-height: inherit !important;
          line-height: inherit !important
        }

        tr.es-desk-hidden {
          display: table-row !important
        }

        table.es-desk-hidden {
          display: table !important
        }

        td.es-desk-menu-hidden {
          display: table-cell !important
        }

        .es-menu td {
          width: 1% !important
        }

        table.es-table-not-adapt,
        .esd-block-html table {
          width: auto !important
        }

        table.es-social {
          display: inline-block !important
        }

        table.es-social td {
          display: inline-block !important
        }

        .es-desk-hidden {
          display: table-row !important;
          width: auto !important;
          overflow: visible !important;
          max-height: inherit !important
        }
      }
    </style>
  </head>

  <body style="width:100%;font-family:arial, 'helvetica neue', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
    <div class="es-wrapper-color" style="background-color:#FFFFFF"><!--[if gte mso 9]><v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t"> <v:fill type="tile" color="#ffffff" origin="0.5, 0" position="0.5, 0"></v:fill> </v:background><![endif]-->
      <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#FFFFFF">
        <tr>
          <td valign="top" style="padding:0;Margin:0">
            <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
              <tr>
                <td align="center" style="padding:0;Margin:0">
                  <table class="es-content-body" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:650px">
                    <tr>
                      <td align="left" style="Margin:0;padding-bottom:20px;padding-left:20px;padding-right:20px;padding-top:30px">
                        <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                          <tr>
                            <td align="center" valign="top" style="padding:0;Margin:0;width:610px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="center" style="padding:0;Margin:0;padding-bottom:15px">
                                    <br>
                                    <h1 style="Margin:0;line-height:35px;mso-line-height-rule:exactly;font-family:'Baloo Bhai', cursive;font-size:29px;font-style:normal;font-weight:bold;color:#333333">Mengenal Kejahatan Jalanan</h1>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="center" style="padding:0;Margin:0">
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px">Konten edukasi ini bertujuan untuk memberikan pemahaman tentang kejahatan jalanan, serta bagaimana kita dapat mengenali ancaman yang mungkin dihadapi dalam kehidupan sehari-hari. Dengan meningkatkan kesadaran tentang kejahatan jalanan, kita dapat mengambil langkah-langkah pencegahan yang tepat untuk menjaga diri dan orang-orang di sekitar kita tetap aman.</p>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="center" style="padding:20px;Margin:0;font-size:0">
                                    <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                      <tr>
                                        <td style="padding:0;Margin:0;border-bottom:1px solid #cccccc;background:unset;height:1px;width:100%;margin:0px"></td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#6fa8dc" style="padding:20px;Margin:0;background-color:#E8AA42;border-radius:15px"><!--[if mso]><table style="width:610px" cellpadding="0" cellspacing="0"><tr><td style="width:295px" valign="top"><![endif]-->
                        <table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                          <tr>
                            <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:295px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="left" style="padding:0;Margin:0">
                                    <h3 style="Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:'Baloo Bhai', cursive;font-size:18px;font-style:normal;font-weight:normal;color:#333333"><u><strong>Apa itu "kejahatan jalanan"?</strong></u></h3>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#000000;font-size:14px">"Kejahatan jalanan" merujuk pada tindakan kriminal yang terjadi di tempat umum atau di sekitar area publik seperti jalan, trotoar, taman, atau fasilitas umum lainnya.</p>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table><!--[if mso]></td><td style="width:20px"></td>
<td style="width:295px" valign="top"><![endif]-->
                        <table cellpadding="0" cellspacing="0" class="es-right" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
                          <tr>
                            <td align="left" style="padding:0;Margin:0;width:295px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="center" style="padding:0;Margin:0;font-size:0px"><img class="adapt-img" src="<?= base_url('sigali/') ?>images/basecrime.png" alt style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" width="295" height="189"></td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table><!--[if mso]></td></tr></table><![endif]-->
                      </td>
                    </tr>
                    <tr>
                      <td align="left" style="padding:20px;Margin:0">
                        <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                          <tr>
                            <td align="center" valign="top" style="padding:0;Margin:0;width:610px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="center" style="padding:20px;Margin:0;font-size:0">
                                    <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                      <tr>
                                        <td style="padding:0;Margin:0;border-bottom:1px solid #cccccc;background:unset;height:1px;width:100%;margin:0px"></td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="left" style="padding:20px;Margin:0">
                        <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                          <tr>
                            <td align="center" valign="top" style="padding:0;Margin:0;width:610px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td style="padding:0;Margin:0">
                                    <h3 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'Baloo Bhai', cursive;font-size:18px;font-style:normal;font-weight:normal;color:#333333"><u><strong>Jenis-Jenis Kejahatan Jalanan</strong></u></h3>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#000000;font-size:14px;text-align:justify">Berikut ini adalah jenis kejahatan jalanan di Indonesia berdasarkan KUHP (Kitab Undang-Undang Hukum Pidana) :</p>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="left" style="padding:20px;Margin:0"><!--[if mso]><table style="width:610px" cellpadding="0" cellspacing="0"><tr><td style="width:210px" valign="top"><![endif]-->
                        <table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                          <tr>
                            <td class="es-m-p0r es-m-p20b" align="center" style="padding:0;Margin:0;width:190px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="center" style="padding:0;Margin:0">
                                    <h4 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'Baloo Bhai', cursive;color:#333333;font-size:18px"><strong>Pencurian</strong></h4>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px">(Pasal 362-372 KUHP)</p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px"><br></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px">Tindakan mengambil atau menguasai barang milik orang lain dengan tanpa hak atau izin.</p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px"><br></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px"><br></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px;text-align:center"><u><strong>Jenis :</strong></u></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px;text-align:center"><strong>1)</strong>&nbsp;<strong>Pencurian dengan pemberatan</strong> (Pasal 362 KUHP)</p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px;text-align:center"><strong>2) Pencurian biasa</strong> (Pasal 363 KUHP)</p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px;text-align:center"><strong>3) Pencurian dengan kekerasan atau ancaman kekerasan</strong> (Pasal 365 KUHP)</p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px;text-align:center"><strong>4) Pencurian kendaraan bermotor</strong> (Pasal 363A KUHP)</p>
                                  </td>
                                </tr>
                              </table>
                            </td>
                            <td class="es-hidden" style="padding:0;Margin:0;width:20px"></td>
                          </tr>
                        </table><!--[if mso]></td>
<td style="width:190px" valign="top"><![endif]-->
                        <table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                          <tr>
                            <td class="es-m-p20b" align="center" style="padding:0;Margin:0;width:190px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="center" style="padding:0;Margin:0">
                                    <h4 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'Baloo Bhai', cursive;color:#333333;font-size:18px"><strong>Pemerasan</strong></h4>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px">(Pasal 368-369 KUHP)</p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px"><br></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px">Tindakan memaksa orang lain memberikan sesuatu dengan ancaman kekerasan atau tindakan yang merugikan.</p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px"><br></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#000000;font-size:14px"><u><strong>Jenis :</strong></u></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#000000;font-size:14px"><strong>1) Pemerasan dengan kekerasan atau ancaman kekerasan </strong>(Pasal 368 KUHP)<strong><br>&nbsp; &nbsp;2) Pemerasan tanpa kekerasan atau ancaman kekerasan </strong>(Pasal 369 KUHP)<br><strong></strong></p>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table><!--[if mso]></td><td style="width:20px"></td>
<td style="width:190px" valign="top"><![endif]-->
                        <table cellpadding="0" cellspacing="0" class="es-right" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
                          <tr>
                            <td align="center" style="padding:0;Margin:0;width:190px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="center" style="padding:0;Margin:0">
                                    <h4 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'Baloo Bhai', cursive;color:#333333;font-size:18px"><strong>Perampokan</strong></h4>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px">(Pasal 365-368 KUHP)</p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px"><br></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px">Tindakan mengambil atau menguasai barang milik orang lain dengan menggunakan kekerasan atau ancaman kekerasan.</p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px"><br></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#000000;font-size:14px"><u><strong>Jenis :</strong></u></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#000000;font-size:14px"><strong>1) Perampokan dengan kekerasan atau ancaman kekerasan </strong>(Pasal 365 KUHP)<br><b>&nbsp; &nbsp;2) Perampokan dengan pembunuhan </b>(Pasal 365 KUHP)<br><b>&nbsp; &nbsp;3) Perampokan dengan pemberatan (</b>Pasal 365 KUHP)<br><b>&nbsp; &nbsp;4) Perampokan sederhana </b>(Pasal 365 KUHP)<br><strong></strong></p>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table><!--[if mso]></td></tr></table><![endif]-->
                      </td>
                    </tr>
                    <tr>
                      <td align="left" style="padding:20px;Margin:0">
                        <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                          <tr>
                            <td align="center" valign="top" style="padding:0;Margin:0;width:610px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="left" style="padding:0;Margin:0">
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#FFFFFF;font-size:14px">Text</p>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="left" style="padding:20px;Margin:0"><!--[if mso]><table style="width:610px" cellpadding="0" cellspacing="0"><tr><td style="width:210px" valign="top"><![endif]-->
                        <table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                          <tr>
                            <td class="es-m-p0r es-m-p20b" align="center" style="padding:0;Margin:0;width:190px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="center" style="padding:0;Margin:0">
                                    <h4 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'Baloo Bhai', cursive;color:#333333;font-size:18px"><b>Penganiayaan</b></h4>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px">(Pasal 351-353 KUHP)</p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px"><br></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px">Tindakan melakukan kekerasan atau penganiayaan terhadap orang lain di tempat umum.</p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px"><br></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#000000;font-size:14px"><u><strong>Jenis :</strong></u></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#000000;font-size:14px"><strong>1) Penganiayaan dengan kekerasan atau ancaman kekerasan </strong>(Pasal 351 KUHP)<br><b>&nbsp; &nbsp;2) Penganiayaan berat </b>(Pasal 352 KUHP)<br><b>&nbsp; &nbsp;3) Penganiayaan ringan </b>(Pasal 353 KUHP)</p>
                                  </td>
                                </tr>
                              </table>
                            </td>
                            <td class="es-hidden" style="padding:0;Margin:0;width:20px"></td>
                          </tr>
                        </table><!--[if mso]></td>
<td style="width:190px" valign="top"><![endif]-->
                        <table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                          <tr>
                            <td class="es-m-p20b" align="center" style="padding:0;Margin:0;width:190px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="center" style="padding:0;Margin:0;font-size:0px"><img class="adapt-img" src="<?= base_url('sigali/') ?>images/borgol2.png" alt style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" width="190" height="190"></td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table><!--[if mso]></td><td style="width:20px"></td>
<td style="width:190px" valign="top"><![endif]-->
                        <table cellpadding="0" cellspacing="0" class="es-right" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
                          <tr>
                            <td align="center" style="padding:0;Margin:0;width:190px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="center" style="padding:0;Margin:0">
                                    <h4 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'Baloo Bhai', cursive;color:#333333;font-size:18px"><strong>Penculikan</strong></h4>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px">(Pasal 333-340 KUHP)</p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px"><br></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px">Tindakan melarikan seseorang dengan menggunakan kekerasan atau ancaman kekerasan.</p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px"><br></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px"><br></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#000000;font-size:14px"><u><strong>Jenis :</strong></u></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#000000;font-size:14px"><strong>&nbsp;1) Penculikan dengan maksud untuk merampas hak kebebasan </strong>(Pasal 333 KUHP)<br><b>&nbsp; &nbsp;2) Penculikan dengan maksud memaksa </b>(Pasal 340 KUHP)</p>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table><!--[if mso]></td></tr></table><![endif]-->
                      </td>
                    </tr>

                    <tr>
                      <td align="left" style="Margin:0;padding-top:20px;padding-left:20px;padding-right:20px;padding-bottom:30px">
                        <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                          <tr>
                            <td align="center" valign="top" style="padding:0;Margin:0;width:610px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="center" style="padding:20px;Margin:0;font-size:0">
                                    <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                      <tr>
                                        <td style="padding:0;Margin:0;border-bottom:1px solid #cccccc;background:unset;height:1px;width:100%;margin:0px"></td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="left" style="padding:20px;Margin:0">
                        <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                          <tr>
                            <td align="center" valign="top" style="padding:0;Margin:0;width:610px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="center" style="padding:0;Margin:0">
                                    <h3 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'Baloo Bhai', cursive;font-size:18px;font-style:normal;font-weight:normal;color:#333333"><u><b>Mengenali Ancaman di Lingkungan Sehari-hari</b></u></h3>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="left" style="padding:20px;Margin:0"><!--[if mso]><table style="width:610px" cellpadding="0" cellspacing="0"><tr><td style="width:295px" valign="top"><![endif]-->
                        <table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                          <tr>
                            <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:295px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="center" style="padding:0;Margin:0;font-size:0px"><img class="adapt-img" src="<?= base_url('sigali/') ?>images/alert.png" alt style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" width="295" height="295"></td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table><!--[if mso]></td><td style="width:20px"></td>
<td style="width:295px" valign="top"><![endif]-->
                        <table cellpadding="0" cellspacing="0" class="es-right" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
                          <tr>
                            <td align="left" style="padding:0;Margin:0;width:295px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="left" style="padding:0;Margin:0">
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:17px;color:#333333;font-size:14px;text-align:left"><strong>&nbsp; &nbsp; &nbsp;Pada Kendaraan Umum</strong></p>
                                    <ul>
                                      <li style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:17px;Margin-bottom:15px;margin-left:0;color:#000000;font-size:14px">
                                        <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:17px;color:#000000;font-size:14px">Mengenali situasi yang berpotensi berbahaya di dalam bus, kereta, atau taksi.</p>
                                      </li>
                                      <li style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:17px;Margin-bottom:15px;margin-left:0;color:#000000;font-size:14px">
                                        <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:17px;color:#000000;font-size:14px">Menjaga keamanan barang bawaan saat menggunakan kendaraan umum.</p>
                                      </li>
                                    </ul>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:17px;color:#000000;font-size:14px"><strong>&nbsp; &nbsp; Di Jalan Raya</strong></p>
                                    <ul>
                                      <li style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:17px;Margin-bottom:15px;margin-left:0;color:#000000;font-size:14px">
                                        <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:17px;color:#000000;font-size:14px">Memahami risiko saat berjalan kaki atau mengendarai sepeda di jalan.</p>
                                      </li>
                                      <li style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:17px;Margin-bottom:15px;margin-left:0;color:#000000;font-size:14px">
                                        <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:17px;color:#000000;font-size:14px">Menggunakan jalur yang aman dan mematuhi aturan lalu lintas.</p>
                                      </li>
                                    </ul>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:17px;color:#000000;font-size:14px">&nbsp; &nbsp; &nbsp;<strong><span style="background-color:transparent;text-align:center">Di Area Publik</span></strong></p>
                                    <ul>
                                      <li style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:17px;Margin-bottom:15px;margin-left:0;color:#000000;font-size:14px">
                                        <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:17px;color:#000000;font-size:14px">Mengetahui potensi ancaman saat berada di taman, lapangan, atau area publik lainnya.</p>
                                      </li>
                                      <li style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:17px;Margin-bottom:15px;margin-left:0;color:#000000;font-size:14px">
                                        <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:17px;color:#000000;font-size:14px">Strategi untuk menghindari situasi berbahaya.</p>
                                      </li>
                                    </ul>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table><!--[if mso]></td></tr></table><![endif]-->
                      </td>
                    </tr>
                    <tr>
                      <td align="left" style="padding:20px;Margin:0">
                        <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                          <tr>
                            <td align="center" valign="top" style="padding:0;Margin:0;width:610px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="center" style="padding:20px;Margin:0;font-size:0">
                                    <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                      <tr>
                                        <td style="padding:0;Margin:0;border-bottom:1px solid #cccccc;background:unset;height:1px;width:100%;margin:0px"></td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="left" style="Margin:0;padding-bottom:15px;padding-left:20px;padding-right:20px;padding-top:30px">
                        <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                          <tr>
                            <td align="center" valign="top" style="padding:0;Margin:0;width:610px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="center" class="es-m-txt-c" style="padding:0;Margin:0">
                                    <h3 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'Baloo Bhai', cursive;font-size:18px;font-style:normal;font-weight:normal;color:#333333"><u><b>Langkah-langkah Pencegahan</b></u></h3>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
            <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
              <tr>
                <td align="center" style="padding:0;Margin:0">
                  <table class="es-footer-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:650px">
                    <tr>
                      <td align="left" style="padding:20px;Margin:0"><!--[if mso]><table style="width:610px" cellpadding="0" cellspacing="0"><tr><td style="width:210px" valign="top"><![endif]-->
                        <table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                          <tr>
                            <td class="es-m-p0r es-m-p20b" align="center" style="padding:0;Margin:0;width:190px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="center" style="padding:0;Margin:0">
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px"><strong>Kesadaran Diri dan Lingkungan</strong></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px"><br></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#000000;font-size:14px">1. Mengamati sekitar dan mengenali tanda-tanda kejahatan.</p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#000000;font-size:14px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. Berperan sebagai saksi dan melapor jika melihat tindakan mencurigakan.</p>
                                  </td>
                                </tr>
                              </table>
                            </td>
                            <td class="es-hidden" style="padding:0;Margin:0;width:20px"></td>
                          </tr>
                        </table><!--[if mso]></td>
<td style="width:190px" valign="top"><![endif]-->
                        <table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                          <tr>
                            <td class="es-m-p20b" align="center" style="padding:0;Margin:0;width:190px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="center" style="padding:0;Margin:0">
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px"><strong>Keterampilan Keamanan Diri</strong></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px"><br></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px">1. Menjaga sikap percaya diri dan tetap waspada.</p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#000000;font-size:14px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. Teknik-teknik pertahanan diri dasar.</p>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table><!--[if mso]></td><td style="width:20px"></td>
<td style="width:190px" valign="top"><![endif]-->
                        <table cellpadding="0" cellspacing="0" class="es-right" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
                          <tr>
                            <td align="center" style="padding:0;Margin:0;width:190px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="center" style="padding:0;Margin:0">
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px"><strong>Kerja sama dengan Pihak Berwenang</strong></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px"><br></p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#000000;font-size:14px">1. Mengetahui nomor darurat dan kontak pihak berwenang setempat.</p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#000000;font-size:14px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. Melaporkan kejahatan yang terjadi atau berpotensi terjadi.</p>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table><!--[if mso]></td></tr></table><![endif]-->
                      </td>
                    </tr>
                    <tr>
                      <td align="left" style="padding:20px;Margin:0">
                        <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                          <tr>
                            <td align="center" valign="top" style="padding:0;Margin:0;width:610px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="center" style="padding:20px;Margin:0;font-size:0">
                                    <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                      <tr>
                                        <td style="padding:0;Margin:0;border-bottom:1px solid #cccccc;background:unset;height:1px;width:100%;margin:0px"></td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="left" style="padding:20px;Margin:0">
                        <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                          <tr>
                            <td align="center" valign="top" style="padding:0;Margin:0;width:610px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="left" style="padding:0;Margin:0">
                                    <h3 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'Baloo Bhai', cursive;font-size:18px;font-style:normal;font-weight:normal;color:#333333;text-align:center"><b>Kesimpulan</b></h3>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="center" style="padding:0;Margin:0;padding-top:15px">
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:21px;color:#333333;font-size:14px">Dengan mengenali kejahatan jalanan dan meningkatkan kesadaran, kita dapat mengambil langkah-langkah pencegahan yang efektif untuk melindungi diri dan orang-orang di sekitar kita. Konten edukasi ini diharapkan dapat memberikan pemahaman yang lebih baik tentang kejahatan jalanan serta mendorong tindakan yang proaktif dalam menciptakan lingkungan yang lebih aman bagi semua orang.</p>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
            <table cellpadding="0" cellspacing="0" class="es-content" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
              <tr>
                <td align="center" style="padding:0;Margin:0">
                  <table class="es-content-body" align="center" cellpadding="0" cellspacing="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px">
                    <tr>
                      <td align="left" style="padding:20px;Margin:0">
                        <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                          <tr>
                            <td align="center" valign="top" style="padding:0;Margin:0;width:560px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                  <td align="left" style="padding:0;Margin:0">
                                    <h4 style="Margin:0;line-height:17px;mso-line-height-rule:exactly;font-family:'Baloo Bhai', cursive;color:#333333;font-size:14px;text-align:center"><b>Daftar Pustaka</b></h4>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:18px;color:#000000;font-size:12px">Indonesia [Undang - Undang, Peraturan, dsb.]. (2007). KUHP dan KUHAP . Bandung: Citra Umbara.</p>
                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Montserrat, sans-serif;line-height:18px;color:#000000;font-size:12px">Makaampoh, M. F. (2013). Kedudukan dan Tugas Polri Untuk Memberantas Aksi Premanisme Serta Kaitannya Dengan Tindak Pidana Kekerasan Dalam KUHP. Lex et Societatis, 1(2), 71–83.</p>
                                    <br>
                                    <br>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </div>
  </body>

  </html>


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