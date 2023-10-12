<?php

namespace App\Controllers;

use App\Models\ModelLokasi;
use App\Models\KontakRS;
use App\Models\KontakPS;

class Home extends BaseController
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
            'judul' => 'Halaman Utama',
            'page' => 'v_template'
        ];
        return view('v_template', $data);
    }

    public function peta()
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
            'page' => 'v_peta'
        ];

        return view('v_peta', $data);
    }

    public function kontakrs()
    {
        $lokasi = $this->KontakRS->getAllData();
        $data = [
            'judul' => 'Kontak Rumah Sakit',
            'page' => 'v_kontakrs',
            'lokasi' => $lokasi,
        ];
        return view('v_kontakrs', $data);
    }

    public function kontakps()
    {
        $lokasi = $this->KontakPS->getAllData();
        $data = [
            'judul' => 'Kontak Kantor Polisi',
            'page' => 'v_kontakps',
            'lokasi' => $lokasi,
        ];
        return view('v_kontakps', $data);
    }

    public function edukasi()
    {
        $data = [
            'judul' => 'Edukasi',
            'page' => 'v_edukasi'
        ];
        return view('v_edukasi', $data);
    }

    public function spatiotemporal()
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
            'page' => 'v_spatiotemporal'
        ];

        return view('v_spatiotemporal', $data);
    }

    public function data()
    {
        $sleman = $this->ModelLokasi->getSlemanData();
        $kota = $this->ModelLokasi->getJogjaData();
        $bantul = $this->ModelLokasi->getBantulData();
        $kulprog = $this->ModelLokasi->getKulprogData();
        $gunkid = $this->ModelLokasi->getGunkidData();
        $data = [
            'judul' => 'Data Lokasi',
            'lokasi_sleman' => $sleman,
            'lokasi_kota' => $kota,
            'lokasi_bantul' => $bantul,
            'lokasi_kulprog' => $kulprog,
            'lokasi_gunkid' => $gunkid,
            'page' => 'v_data',
        ];
        return view('v_data', $data);
    }
}
