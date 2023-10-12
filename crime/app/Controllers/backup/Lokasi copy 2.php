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
        $lokasi = $this->ModelLokasi->getAllData();
        $data = [
            'judul' => 'Edukasi',
            'page' => 'v_edukasilogin',
            'lokasi' => $lokasi,
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
            'no' => [
                'label' => 'no',
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
                'no' => $this->request->getPost('no'),
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
            return redirect()->to('Lokasi/inputLokasi')->withInput();
        }
    }

    public function insertDataKota()
    {
        if ($this->validate([
            'no' => [
                'label' => 'no',
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
                'no' => $this->request->getPost('no'),
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
            return redirect()->to('Lokasi/inputLokasi')->withInput();
        }
    }

    public function insertDataBantul()
    {
        if ($this->validate([
            'no' => [
                'label' => 'no',
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
                'no' => $this->request->getPost('no'),
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
            return redirect()->to('Lokasi/inputLokasi')->withInput();
        }
    }

    public function insertDataGunkid()
    {
        if ($this->validate([
            'no' => [
                'label' => 'no',
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
                'no' => $this->request->getPost('no'),
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
            return redirect()->to('Lokasi/inputLokasi')->withInput();
        }
    }

    public function insertDataKulprog()
    {
        if ($this->validate([
            'no' => [
                'label' => 'no',
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
                'no' => $this->request->getPost('no'),
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
            return redirect()->to('Lokasi/inputLokasi')->withInput();
        }
    }

    //FUNGSI EDIT
    public function editLokasiSleman($id_lokasi)
    {
        $lokasi = $this->ModelLokasi->getSlemanById($id_lokasi);
        $selectedRegion = $this->request->getGet('sleman');
        $data = [
            'judul' => 'Edit Lokasi Sleman',
            'page' => 'lokasi/v_editlokasi',
            'lokasi' => $lokasi,
            'selectedRegion' => $selectedRegion
        ];
        return view('lokasi/v_editlokasi', $data);
    }

    public function editLokasiKota($id_lokasi)
    {
        $lokasi = $this->ModelLokasi->getKotaById($id_lokasi);
        $data = [
            'judul' => 'Edit Lokasi Kota',
            'page' => 'lokasi/v_editlokasi',
            'lokasi' => $lokasi,
            'selectedRegion' => 'jogja'
        ];
        return view('lokasi/v_editlokasi', $data);
    }

    public function editLokasiBantul($id_lokasi)
    {
        $lokasi = $this->ModelLokasi->getBantulById($id_lokasi);
        $data = [
            'judul' => 'Edit Lokasi Bantul',
            'page' => 'lokasi/v_editlokasi',
            'lokasi' => $lokasi,
            'selectedRegion' => 'bantul'
        ];
        return view('lokasi/v_editlokasi', $data);
    }

    public function editLokasiGunungkidul($id_lokasi)
    {
        $lokasi = $this->ModelLokasi->getGunkidById($id_lokasi);
        $data = [
            'judul' => 'Edit Lokasi Gunung Kidul',
            'page' => 'lokasi/v_editlokasi',
            'lokasi' => $lokasi,
            'selectedRegion' => 'gunungkidul'
        ];
        return view('lokasi/v_editlokasi', $data);
    }

    public function editLokasiKulonprogo($id_lokasi)
    {
        $lokasi = $this->ModelLokasi->getKulprogById($id_lokasi);
        $data = [
            'judul' => 'Edit Lokasi Kulon Progo',
            'page' => 'lokasi/v_editlokasi',
            'lokasi' => $lokasi,
            'selectedRegion' => 'kulonprogo'
        ];
        return view('lokasi/v_editlokasi', $data);
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
            return redirect()->to('Lokasi/dataLokasi');
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
            return redirect()->to('Lokasi/dataLokasi');
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
            return redirect()->to('Lokasi/dataLokasi');
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
            return redirect()->to('Lokasi/dataLokasi');
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
            return redirect()->to('Lokasi/dataLokasi');
        } else {
            //jika tidak lolos validasi
            return redirect()->to('Lokasi/editLokasiKulonprogo/' . $id_lokasi)->withInput();
        }
    }

    //FUNGSI DELETE
    public function deleteLokasiSleman($id_lokasi)
    {
        $this->ModelLokasi->deleteDataSleman(['no' => $id_lokasi]);
        helper('session');
        //notifikasi jika data berhasil dihapus
        session()->setFlashdata('pesan', 'Data Lokasi Berhasil Dihapus!');
        return redirect()->to('Lokasi/dataLokasi');
    }
    public function deleteLokasiKota($id_lokasi)
    {
        $this->ModelLokasi->deleteDataKota(['no' => $id_lokasi]);
        helper('session');
        //notifikasi jika data berhasil dihapus
        session()->setFlashdata('pesan', 'Data Lokasi Berhasil Dihapus!');
        return redirect()->to('Lokasi/dataLokasi');
    }
    public function deleteLokasiBantul($id_lokasi)
    {
        $this->ModelLokasi->deleteDataBantul(['no' => $id_lokasi]);
        helper('session');
        //notifikasi jika data berhasil dihapus
        session()->setFlashdata('pesan', 'Data Lokasi Berhasil Dihapus!');
        return redirect()->to('Lokasi/dataLokasi');
    }
    public function deleteLokasiKulprog($id_lokasi)
    {
        $this->ModelLokasi->deleteDataKulprog(['no' => $id_lokasi]);
        helper('session');
        //notifikasi jika data berhasil dihapus
        session()->setFlashdata('pesan', 'Data Lokasi Berhasil Dihapus!');
        return redirect()->to('Lokasi/dataLokasi');
    }
}
