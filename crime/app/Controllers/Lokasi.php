<?php

namespace App\Controllers;

use App\Models\ModelLokasi;
use App\Models\KontakRS;
use App\Models\KontakPS;

class Lokasi extends BaseController
{
    public function __construct()
    {
        $this->ModelLokasi = new ModelLokasi();
        $this->KontakRS = new KontakRS();
        $this->KontakPS = new KontakPS();
    }

    public function index()
    {
        $data = [
            'judul' => 'Halaman Admin',
            'page' => 'v_afterlogin'
        ];
        return view('v_afterlogin', $data);
    }

    public function kontakpslogin()
    {
        $lokasi = $this->KontakPS->getAllData();
        $data = [
            'judul' => 'Kontak Polsek',
            'page' => 'v_kontakpslogin',
            'lokasi' => $lokasi,
        ];
        return view('v_kontakpslogin', $data);
    }

    public function kontakrslogin()
    {
        $lokasi = $this->KontakRS->getAllData();
        $data = [
            'judul' => 'Kontak Rumah Sakit',
            'page' => 'v_kontakrslogin',
            'lokasi' => $lokasi,
        ];
        return view('v_kontakrslogin', $data);
    }

    public function petalogin()
    {
        $sleman = $this->ModelLokasi->getSlemanData();
        $kota = $this->ModelLokasi->getJogjaData();
        $bantul = $this->ModelLokasi->getBantulData();
        $kulprog = $this->ModelLokasi->getKulprogData();
        $gunkid = $this->ModelLokasi->getGunkidData();

        $data = [
            'judul' => 'Pemetaan Lokasi',
            'lokasi_sleman' => $sleman,
            'lokasi_kota' => $kota,
            'lokasi_bantul' => $bantul,
            'lokasi_kulprog' => $kulprog,
            'lokasi_gunkid' => $gunkid,
            'page' => 'v_petalogin'
        ];

        return view('v_petalogin', $data);
    }

    public function spatiotemporallogin()
    {
        $sleman = $this->ModelLokasi->getSlemanData();
        $kota = $this->ModelLokasi->getJogjaData();
        $bantul = $this->ModelLokasi->getBantulData();
        $kulprog = $this->ModelLokasi->getKulprogData();
        $gunkid = $this->ModelLokasi->getGunkidData();

        $data = [
            'judul' => 'Spatio-Temporal',
            'lokasi_sleman' => $sleman,
            'lokasi_kota' => $kota,
            'lokasi_bantul' => $bantul,
            'lokasi_kulprog' => $kulprog,
            'lokasi_gunkid' => $gunkid,
            'page' => 'v_spatiotemporallogin'
        ];

        return view('v_spatiotemporallogin', $data);
    }

    public function datalogin()
    {
        $sleman = $this->ModelLokasi->getSlemanData();
        $kota = $this->ModelLokasi->getJogjaData();
        $bantul = $this->ModelLokasi->getBantulData();
        $kulprog = $this->ModelLokasi->getKulprogData();
        $gunkid = $this->ModelLokasi->getGunkidData();
        $data = [
            'judul' => 'Data Lokasi',
            'page' => 'v_datalogin',
            'lokasi_sleman' => $sleman,
            'lokasi_kota' => $kota,
            'lokasi_bantul' => $bantul,
            'lokasi_kulprog' => $kulprog,
            'lokasi_gunkid' => $gunkid,
        ];
        return view('v_datalogin', $data);
    }

    public function edukasilogin()
    {
        $data = [
            'judul' => 'Edukasi',
            'page' => 'v_edukasilogin'
        ];
        return view('v_edukasilogin', $data);
    }

    //FUNGSI DATA LOKASI
    public function dataLokasi()
    {
        $sleman = $this->ModelLokasi->getSlemanData();
        $kota = $this->ModelLokasi->getJogjaData();
        $bantul = $this->ModelLokasi->getBantulData();
        $kulprog = $this->ModelLokasi->getKulprogData();
        $gunkid = $this->ModelLokasi->getGunkidData();
        $data = [
            'judul' => 'Data Lokasi',
            'page' => 'lokasi/v_datalokasi',
            'lokasi_sleman' => $sleman,
            'lokasi_kota' => $kota,
            'lokasi_bantul' => $bantul,
            'lokasi_kulprog' => $kulprog,
            'lokasi_gunkid' => $gunkid,
        ];
        return view('lokasi/v_datalokasi', $data);
    }

    public function dataLokasiSleman()
    {
        $sleman = $this->ModelLokasi->getSlemanData();
        $data = [
            'judul' => 'Data Lokasi Sleman',
            'page' => 'lokasi/v_datalokasisleman',
            'lokasi_sleman' => $sleman,
        ];
        return view('lokasi/v_datalokasisleman', $data);
    }

    public function dataLokasiKota()
    {
        $kota = $this->ModelLokasi->getJogjaData();
        $data = [
            'judul' => 'Data Lokasi Kota',
            'page' => 'lokasi/v_datalokasikota',
            'lokasi_kota' => $kota,
        ];
        return view('lokasi/v_datalokasikota', $data);
    }

    public function dataLokasiBantul()
    {
        $bantul = $this->ModelLokasi->getBantulData();
        $data = [
            'judul' => 'Data Lokasi Bantul',
            'page' => 'lokasi/v_datalokasibantul',
            'lokasi_bantul' => $bantul,
        ];
        return view('lokasi/v_datalokasibantul', $data);
    }

    public function dataLokasiGunkid()
    {
        $gunkid = $this->ModelLokasi->getGunkidData();
        $data = [
            'judul' => 'Data Lokasi Gunung Kidul',
            'page' => 'lokasi/v_datalokasigunkid',
            'lokasi_gunkid' => $gunkid,
        ];
        return view('lokasi/v_datalokasigunkid', $data);
    }

    public function dataLokasiKulprog()
    {
        $kulprog = $this->ModelLokasi->getKulprogData();
        $data = [
            'judul' => 'Data Lokasi Kulon Progo',
            'page' => 'lokasi/v_datalokasikulprog',
            'lokasi_kulprog' => $kulprog,
        ];
        return view('lokasi/v_datalokasikulprog', $data);
    }

    //FUNGSI INPUT LOKASI
    public function inputLokasi()
    {
        $sleman = $this->ModelLokasi->getSlemanData();
        $kota = $this->ModelLokasi->getJogjaData();
        $bantul = $this->ModelLokasi->getBantulData();
        $kulprog = $this->ModelLokasi->getKulprogData();
        $gunkid = $this->ModelLokasi->getGunkidData();
        $data = [
            'judul' => 'Input Lokasi',
            'page' => 'lokasi/v_inputlokasi',
            'lokasi_sleman' => $sleman,
            'lokasi_kota' => $kota,
            'lokasi_bantul' => $bantul,
            'lokasi_kulprog' => $kulprog,
            'lokasi_gunkid' => $gunkid,
        ];
        return view('lokasi/v_inputlokasi', $data);
    }

    //FUNGSI INSERT DATA
    public function insertDataSleman()
    {
        if ($this->validate([
            'tindak_pidana' => [
                'label' => 'Tindak Pidana',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tanggal' => [
                'label' => 'Tanggal Kejadian',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'hari' => [
                'label' => 'Hari',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'bulan' => [
                'label' => 'Bulan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tahun' => [
                'label' => 'Tahun',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'waktu' => [
                'label' => 'Jam',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tkp' => [
                'label' => 'Tempat Kejadian Perkara',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'latitude' => [
                'label' => 'Latitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'longitude' => [
                'label' => 'Longitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'status' => [
                'label' => 'Status Data',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ]
        ])) {
            //jika lolos validasi
            $data = [
                'tindak_pidana' => $this->request->getPost('tindak_pidana'),
                'tanggal' => $this->request->getPost('tanggal'),
                'hari' => $this->request->getPost('hari'),
                'bulan' => $this->request->getPost('bulan'),
                'tahun' => $this->request->getPost('tahun'),
                'waktu' => $this->request->getPost('waktu'),
                'tkp' => $this->request->getPost('tkp'),
                'latitude' => $this->request->getPost('latitude'),
                'longitude' => $this->request->getPost('longitude'),
                'status' => $this->request->getPost('status'),
            ];
            //kirim data ke function insertData di modelLokasi
            $this->ModelLokasi->insertDataSleman($data);
            //notifikasi jika data berhasil disimpan
            session()->setFlashdata('pesan', 'Data Lokasi Berhasil Ditambahkan!');
            return redirect()->to('Lokasi/inputLokasi');
        } else {
            //jika tidak lolos validasi
            session()->setFlashdata('errors', 'Data yang Dimasukkan Tidak Lengkap! Silakan coba lagi.');
            return redirect()->to('Lokasi/inputLokasi')->withInput();
        }
    }

    public function insertDataKota()
    {
        if ($this->validate([
            'tindak_pidana' => [
                'label' => 'Tindak Pidana',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tanggal' => [
                'label' => 'Tanggal Kejadian',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'hari' => [
                'label' => 'Hari',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'bulan' => [
                'label' => 'Bulan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tahun' => [
                'label' => 'Tahun',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'waktu' => [
                'label' => 'Jam',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tkp' => [
                'label' => 'Tempat Kejadian Perkara',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'latitude' => [
                'label' => 'Latitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'longitude' => [
                'label' => 'Longitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'status' => [
                'label' => 'Status Data',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ]
        ])) {
            //jika lolos validasi
            $data = [
                'tindak_pidana' => $this->request->getPost('tindak_pidana'),
                'tanggal' => $this->request->getPost('tanggal'),
                'hari' => $this->request->getPost('hari'),
                'bulan' => $this->request->getPost('bulan'),
                'tahun' => $this->request->getPost('tahun'),
                'waktu' => $this->request->getPost('waktu'),
                'tkp' => $this->request->getPost('tkp'),
                'latitude' => $this->request->getPost('latitude'),
                'longitude' => $this->request->getPost('longitude'),
                'status' => $this->request->getPost('status'),
            ];
            //kirim data ke function insertData di modelLokasi
            $this->ModelLokasi->insertDataKota($data);
            //notifikasi jika data berhasil disimpan
            session()->setFlashdata('pesan', 'Data Lokasi Berhasil Ditambahkan!');
            return redirect()->to('Lokasi/inputLokasi');
        } else {
            //jika tidak lolos validasi
            session()->setFlashdata('errors', 'Data yang Dimasukkan Tidak Lengkap! Silakan coba lagi.');
            return redirect()->to('Lokasi/inputLokasi')->withInput();
        }
    }

    public function insertDataBantul()
    {
        if ($this->validate([
            'tindak_pidana' => [
                'label' => 'Tindak Pidana',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tanggal' => [
                'label' => 'Tanggal Kejadian',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'hari' => [
                'label' => 'Hari',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'bulan' => [
                'label' => 'Bulan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tahun' => [
                'label' => 'Tahun',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'waktu' => [
                'label' => 'Jam',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tkp' => [
                'label' => 'Tempat Kejadian Perkara',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'latitude' => [
                'label' => 'Latitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'longitude' => [
                'label' => 'Longitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'status' => [
                'label' => 'Status Data',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ]
        ])) {
            //jika lolos validasi
            $data = [
                'tindak_pidana' => $this->request->getPost('tindak_pidana'),
                'tanggal' => $this->request->getPost('tanggal'),
                'hari' => $this->request->getPost('hari'),
                'bulan' => $this->request->getPost('bulan'),
                'tahun' => $this->request->getPost('tahun'),
                'waktu' => $this->request->getPost('waktu'),
                'tkp' => $this->request->getPost('tkp'),
                'latitude' => $this->request->getPost('latitude'),
                'longitude' => $this->request->getPost('longitude'),
                'status' => $this->request->getPost('status'),
            ];
            //kirim data ke function insertData di modelLokasi
            $this->ModelLokasi->insertDataBantul($data);
            //notifikasi jika data berhasil disimpan
            session()->setFlashdata('pesan', 'Data Lokasi Berhasil Ditambahkan!');
            return redirect()->to('Lokasi/inputLokasi');
        } else {
            //jika tidak lolos validasi
            session()->setFlashdata('errors', 'Data yang Dimasukkan Tidak Lengkap! Silakan coba lagi.');
            return redirect()->to('Lokasi/inputLokasi')->withInput();
        }
    }

    public function insertDataGunkid()
    {
        if ($this->validate([
            'tindak_pidana' => [
                'label' => 'Tindak Pidana',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tanggal' => [
                'label' => 'Tanggal Kejadian',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'hari' => [
                'label' => 'Hari',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'bulan' => [
                'label' => 'Bulan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tahun' => [
                'label' => 'Tahun',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'waktu' => [
                'label' => 'Jam',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tkp' => [
                'label' => 'Tempat Kejadian Perkara',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'latitude' => [
                'label' => 'Latitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'longitude' => [
                'label' => 'Longitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'status' => [
                'label' => 'Status Data',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ]
        ])) {
            //jika lolos validasi
            $data = [
                'tindak_pidana' => $this->request->getPost('tindak_pidana'),
                'tanggal' => $this->request->getPost('tanggal'),
                'hari' => $this->request->getPost('hari'),
                'bulan' => $this->request->getPost('bulan'),
                'tahun' => $this->request->getPost('tahun'),
                'waktu' => $this->request->getPost('waktu'),
                'tkp' => $this->request->getPost('tkp'),
                'latitude' => $this->request->getPost('latitude'),
                'longitude' => $this->request->getPost('longitude'),
                'status' => $this->request->getPost('status'),
            ];
            //kirim data ke function insertData di modelLokasi
            $this->ModelLokasi->insertDataGunkid($data);
            //notifikasi jika data berhasil disimpan
            session()->setFlashdata('pesan', 'Data Lokasi Berhasil Ditambahkan!');
            return redirect()->to('Lokasi/inputLokasi');
        } else {
            //jika tidak lolos validasi
            session()->setFlashdata('errors', 'Data yang Dimasukkan Tidak Lengkap! Silakan coba lagi.');
            return redirect()->to('Lokasi/inputLokasi')->withInput();
        }
    }

    public function insertDataKulprog()
    {
        if ($this->validate([
            'tindak_pidana' => [
                'label' => 'Tindak Pidana',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tanggal' => [
                'label' => 'Tanggal Kejadian',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'hari' => [
                'label' => 'Hari',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'bulan' => [
                'label' => 'Bulan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tahun' => [
                'label' => 'Tahun',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'waktu' => [
                'label' => 'Jam',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tkp' => [
                'label' => 'Tempat Kejadian Perkara',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'latitude' => [
                'label' => 'Latitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'longitude' => [
                'label' => 'Longitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'status' => [
                'label' => 'Status Data',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ]
        ])) {
            //jika lolos validasi
            $data = [
                'tindak_pidana' => $this->request->getPost('tindak_pidana'),
                'tanggal' => $this->request->getPost('tanggal'),
                'hari' => $this->request->getPost('hari'),
                'bulan' => $this->request->getPost('bulan'),
                'tahun' => $this->request->getPost('tahun'),
                'waktu' => $this->request->getPost('waktu'),
                'tkp' => $this->request->getPost('tkp'),
                'latitude' => $this->request->getPost('latitude'),
                'longitude' => $this->request->getPost('longitude'),
                'status' => $this->request->getPost('status'),
            ];
            //kirim data ke function insertData di modelLokasi
            $this->ModelLokasi->insertDataKulprog($data);
            //notifikasi jika data berhasil disimpan
            session()->setFlashdata('pesan', 'Data Lokasi Berhasil Ditambahkan!');
            return redirect()->to('Lokasi/inputLokasi');
        } else {
            //jika tidak lolos validasi
            session()->setFlashdata('errors', 'Data yang Dimasukkan Tidak Lengkap! Silakan coba lagi.');
            return redirect()->to('Lokasi/inputLokasi')->withInput();
        }
    }

    //FUNGSI EDIT
    public function editLokasiSleman($id_lokasi)
    {
        $lokasi = $this->ModelLokasi->getSlemanById($id_lokasi);
        $data = [
            'judul' => 'Edit Lokasi Sleman',
            'page' => 'lokasi/v_editlokasi',
            'lokasi' => $lokasi
        ];
        return view('lokasi/v_editlokasisleman', $data);
    }

    public function editLokasiKota($id_lokasi)
    {
        $lokasi = $this->ModelLokasi->getKotaById($id_lokasi);
        $data = [
            'judul' => 'Edit Lokasi Kota',
            'page' => 'lokasi/v_editlokasi',
            'lokasi' => $lokasi
        ];
        return view('lokasi/v_editlokasikota', $data);
    }

    public function editLokasiBantul($id_lokasi)
    {
        $lokasi = $this->ModelLokasi->getBantulById($id_lokasi);
        $data = [
            'judul' => 'Edit Lokasi Bantul',
            'page' => 'lokasi/v_editlokasi',
            'lokasi' => $lokasi
        ];
        return view('lokasi/v_editlokasibantul', $data);
    }

    public function editLokasiGunungkidul($id_lokasi)
    {
        $lokasi = $this->ModelLokasi->getGunkidById($id_lokasi);
        $data = [
            'judul' => 'Edit Lokasi Gunung Kidul',
            'page' => 'lokasi/v_editlokasi',
            'lokasi' => $lokasi
        ];
        return view('lokasi/v_editlokasigunkid', $data);
    }

    public function editLokasiKulonprogo($id_lokasi)
    {
        $lokasi = $this->ModelLokasi->getKulprogById($id_lokasi);
        $data = [
            'judul' => 'Edit Lokasi Kulon Progo',
            'page' => 'lokasi/v_editlokasi',
            'lokasi' => $lokasi
        ];
        return view('lokasi/v_editlokasikulprog', $data);
    }


    //FUNGSI UPDATE
    public function updateDataSleman($id_lokasi)
    {
        if ($this->validate([
            'no' => [
                'label' => 'Nomor Pidana',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tindak_pidana' => [
                'label' => 'Tindak Pidana',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tanggal' => [
                'label' => 'Tanggal Kejadian',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'hari' => [
                'label' => 'Hari',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'bulan' => [
                'label' => 'Bulan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tahun' => [
                'label' => 'Tahun',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'waktu' => [
                'label' => 'Jam',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tkp' => [
                'label' => 'Tempat Kejadian Perkara',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'latitude' => [
                'label' => 'Latitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'longitude' => [
                'label' => 'Longitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'status' => [
                'label' => 'Status Data',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ]
        ])) {
            //jika lolos validasi
            $data = [
                'no' => $id_lokasi,
                'tindak_pidana' => $this->request->getPost('tindak_pidana'),
                'tanggal' => $this->request->getPost('tanggal'),
                'hari' => $this->request->getPost('hari'),
                'bulan' => $this->request->getPost('bulan'),
                'tahun' => $this->request->getPost('tahun'),
                'waktu' => $this->request->getPost('waktu'),
                'tkp' => $this->request->getPost('tkp'),
                'latitude' => $this->request->getPost('latitude'),
                'longitude' => $this->request->getPost('longitude'),
                'status' => $this->request->getPost('status'),
            ];
            //kirim data ke function insertData di modelLokasi
            $this->ModelLokasi->updateDataSleman($data);
            //notifikasi jika data berhasil disimpan
            session()->setFlashdata('pesan', 'Data Lokasi Berhasil Diperbaharui!');
            return redirect()->to('Lokasi/dataLokasiSleman');
        } else {
            //jika tidak lolos validasi
            return redirect()->to('Lokasi/editLokasiSleman/' . $id_lokasi)->withInput();
        }
    }

    public function updateDataJogja($id_lokasi)
    {
        if ($this->validate([
            'no' => [
                'label' => 'Nomor Pidana',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tindak_pidana' => [
                'label' => 'Tindak Pidana',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tanggal' => [
                'label' => 'Tanggal Kejadian',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'hari' => [
                'label' => 'Hari',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'bulan' => [
                'label' => 'Bulan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tahun' => [
                'label' => 'Tahun',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'waktu' => [
                'label' => 'Jam',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tkp' => [
                'label' => 'Tempat Kejadian Perkara',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'latitude' => [
                'label' => 'Latitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'longitude' => [
                'label' => 'Longitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'status' => [
                'label' => 'Status Data',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ]
        ])) {
            //jika lolos validasi
            $data = [
                'no' => $id_lokasi,
                'tindak_pidana' => $this->request->getPost('tindak_pidana'),
                'tanggal' => $this->request->getPost('tanggal'),
                'hari' => $this->request->getPost('hari'),
                'bulan' => $this->request->getPost('bulan'),
                'tahun' => $this->request->getPost('tahun'),
                'waktu' => $this->request->getPost('waktu'),
                'tkp' => $this->request->getPost('tkp'),
                'latitude' => $this->request->getPost('latitude'),
                'longitude' => $this->request->getPost('longitude'),
                'status' => $this->request->getPost('status'),
            ];
            //kirim data ke function insertData di modelLokasi
            $this->ModelLokasi->updateDataKota($data);
            //notifikasi jika data berhasil disimpan
            session()->setFlashdata('pesan', 'Data Lokasi Berhasil Diperbaharui!');
            return redirect()->to('Lokasi/dataLokasiKota');
        } else {
            //jika tidak lolos validasi
            return redirect()->to('Lokasi/editLokasiKota/' . $id_lokasi)->withInput();
        }
    }

    public function updateDataBantul($id_lokasi)
    {
        if ($this->validate([
            'no' => [
                'label' => 'Nomor Pidana',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tindak_pidana' => [
                'label' => 'Tindak Pidana',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tanggal' => [
                'label' => 'Tanggal Kejadian',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'hari' => [
                'label' => 'Hari',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'bulan' => [
                'label' => 'Bulan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tahun' => [
                'label' => 'Tahun',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'waktu' => [
                'label' => 'Jam',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tkp' => [
                'label' => 'Tempat Kejadian Perkara',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'latitude' => [
                'label' => 'Latitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'longitude' => [
                'label' => 'Longitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'status' => [
                'label' => 'Status Data',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ]
        ])) {
            //jika lolos validasi
            $data = [
                'no' => $id_lokasi,
                'tindak_pidana' => $this->request->getPost('tindak_pidana'),
                'tanggal' => $this->request->getPost('tanggal'),
                'hari' => $this->request->getPost('hari'),
                'bulan' => $this->request->getPost('bulan'),
                'tahun' => $this->request->getPost('tahun'),
                'waktu' => $this->request->getPost('waktu'),
                'tkp' => $this->request->getPost('tkp'),
                'latitude' => $this->request->getPost('latitude'),
                'longitude' => $this->request->getPost('longitude'),
                'status' => $this->request->getPost('status'),
            ];
            //kirim data ke function insertData di modelLokasi
            $this->ModelLokasi->updateDataBantul($data);
            //notifikasi jika data berhasil disimpan
            session()->setFlashdata('pesan', 'Data Lokasi Berhasil Diperbaharui!');
            return redirect()->to('Lokasi/dataLokasiBantul');
        } else {
            //jika tidak lolos validasi
            return redirect()->to('Lokasi/editLokasiBantul/' . $id_lokasi)->withInput();
        }
    }

    public function updateDataGunungkidul($id_lokasi)
    {
        if ($this->validate([
            'no' => [
                'label' => 'Nomor Pidana',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tindak_pidana' => [
                'label' => 'Tindak Pidana',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tanggal' => [
                'label' => 'Tanggal Kejadian',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'hari' => [
                'label' => 'Hari',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'bulan' => [
                'label' => 'Bulan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tahun' => [
                'label' => 'Tahun',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'waktu' => [
                'label' => 'Jam',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tkp' => [
                'label' => 'Tempat Kejadian Perkara',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'latitude' => [
                'label' => 'Latitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'longitude' => [
                'label' => 'Longitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'status' => [
                'label' => 'Status Data',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ]
        ])) {
            //jika lolos validasi
            $data = [
                'no' => $id_lokasi,
                'tindak_pidana' => $this->request->getPost('tindak_pidana'),
                'tanggal' => $this->request->getPost('tanggal'),
                'hari' => $this->request->getPost('hari'),
                'bulan' => $this->request->getPost('bulan'),
                'tahun' => $this->request->getPost('tahun'),
                'waktu' => $this->request->getPost('waktu'),
                'tkp' => $this->request->getPost('tkp'),
                'latitude' => $this->request->getPost('latitude'),
                'longitude' => $this->request->getPost('longitude'),
                'status' => $this->request->getPost('status'),
            ];
            //kirim data ke function insertData di modelLokasi
            $this->ModelLokasi->updateDataGunkid($data);
            //notifikasi jika data berhasil disimpan
            session()->setFlashdata('pesan', 'Data Lokasi Berhasil Diperbaharui!');
            return redirect()->to('Lokasi/dataLokasiGunkid');
        } else {
            //jika tidak lolos validasi
            return redirect()->to('Lokasi/editLokasiGunungkidul/' . $id_lokasi)->withInput();
        }
    }

    public function updateDataKulonprogo($id_lokasi)
    {
        if ($this->validate([
            'no' => [
                'label' => 'Nomor Pidana',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tindak_pidana' => [
                'label' => 'Tindak Pidana',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tanggal' => [
                'label' => 'Tanggal Kejadian',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'hari' => [
                'label' => 'Hari',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'bulan' => [
                'label' => 'Bulan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tahun' => [
                'label' => 'Tahun',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'waktu' => [
                'label' => 'Jam',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'tkp' => [
                'label' => 'Tempat Kejadian Perkara',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'latitude' => [
                'label' => 'Latitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'longitude' => [
                'label' => 'Longitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ],
            'status' => [
                'label' => 'Status Data',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !'
                ]
            ]
        ])) {
            //jika lolos validasi
            $data = [
                'no' => $id_lokasi,
                'tindak_pidana' => $this->request->getPost('tindak_pidana'),
                'tanggal' => $this->request->getPost('tanggal'),
                'hari' => $this->request->getPost('hari'),
                'bulan' => $this->request->getPost('bulan'),
                'tahun' => $this->request->getPost('tahun'),
                'waktu' => $this->request->getPost('waktu'),
                'tkp' => $this->request->getPost('tkp'),
                'latitude' => $this->request->getPost('latitude'),
                'longitude' => $this->request->getPost('longitude'),
                'status' => $this->request->getPost('status'),
            ];
            //kirim data ke function insertData di modelLokasi
            $this->ModelLokasi->updateDataKulprog($data);
            //notifikasi jika data berhasil disimpan
            session()->setFlashdata('pesan', 'Data Lokasi Berhasil Diperbaharui!');
            return redirect()->to('Lokasi/dataLokasiKulprog');
        } else {
            //jika tidak lolos validasi
            return redirect()->to('Lokasi/editLokasiKulonprogo/' . $id_lokasi)->withInput();
        }
    }

    // FUNGSI DELETE
    public function deleteLokasiSleman($id_lokasi)
    {
        $this->ModelLokasi->deleteDataSleman(['no' => $id_lokasi]);
        helper('session');
        //notifikasi jika data berhasil dihapus
        session()->setFlashdata('pesan', 'Data Lokasi Berhasil Dihapus!');
        return redirect()->to('Lokasi/dataLokasiSleman');
    }
    public function deleteLokasiKota($id_lokasi)
    {
        $this->ModelLokasi->deleteDataKota(['no' => $id_lokasi]);
        helper('session');
        //notifikasi jika data berhasil dihapus
        session()->setFlashdata('pesan', 'Data Lokasi Berhasil Dihapus!');
        return redirect()->to('Lokasi/dataLokasiKota');
    }
    public function deleteLokasiBantul($id_lokasi)
    {
        $this->ModelLokasi->deleteDataBantul(['no' => $id_lokasi]);
        helper('session');
        //notifikasi jika data berhasil dihapus
        session()->setFlashdata('pesan', 'Data Lokasi Berhasil Dihapus!');
        return redirect()->to('Lokasi/dataLokasiBantul');
    }
    public function deleteLokasiGunkid($id_lokasi)
    {
        $this->ModelLokasi->deleteDataGunkid(['no' => $id_lokasi]);
        helper('session');
        //notifikasi jika data berhasil dihapus
        session()->setFlashdata('pesan', 'Data Lokasi Berhasil Dihapus!');
        return redirect()->to('Lokasi/dataLokasiGunkid');
    }
    public function deleteLokasiKulprog($id_lokasi)
    {
        $this->ModelLokasi->deleteDataKulprog(['no' => $id_lokasi]);
        helper('session');
        //notifikasi jika data berhasil dihapus
        session()->setFlashdata('pesan', 'Data Lokasi Berhasil Dihapus!');
        return redirect()->to('Lokasi/dataLokasiKulprog');
    }
}
