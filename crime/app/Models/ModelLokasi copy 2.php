<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLokasi extends Model
{
    //fungsi insert data
    public function insertDataSleman($data)
    {
        $this->db->table('kj_sleman')->insert($data);
    }
    public function insertDataKota($data)
    {
        $this->db->table('kj_jogja')->insert($data);
    }
    public function insertDataBantul($data)
    {
        $this->db->table('kj_bantul')->insert($data);
    }
    public function insertDataGunkid($data)
    {
        $this->db->table('kj_gunung_kidul')->insert($data);
    }
    public function insertDataKulprog($data)
    {
        $this->db->table('kj_kulon_progo')->insert($data);
    }

    //fungsi mengambil seluruh data
    public function getSlemanData()
    {
        return $this->db->table('kj_sleman')
            ->get()->getResultArray();
    }

    //fungsi mengambil seluruh data
    public function getJogjaData()
    {
        return $this->db->table('kj_jogja')
            ->get()->getResultArray();
    }

    //fungsi mengambil seluruh data
    public function getBantulData()
    {
        return $this->db->table('kj_bantul')
            ->get()->getResultArray();
    }

    //fungsi mengambil seluruh data
    public function getKulprogData()
    {
        return $this->db->table('kj_kulon_progo')
            ->get()->getResultArray();
    }

    //fungsi mengambil seluruh data
    public function getGunkidData()
    {
        return $this->db->table('kj_gunung_kidul')
            ->get()->getResultArray();
    }


    //fungsi mengambil data berdasar id
    public function getSlemanById($id_lokasi)
    {
        return $this->db->table('kj_sleman')
            ->where('no', $id_lokasi)
            ->get()->getRowArray();
    }

    public function getKotaById($id_lokasi)
    {
        return $this->db->table('kj_jogja')
            ->where('no', $id_lokasi)
            ->get()->getRowArray();
    }

    public function getBantulById($id_lokasi)
    {
        return $this->db->table('kj_bantul')
            ->where('no', $id_lokasi)
            ->get()->getRowArray();
    }

    public function getGunkidById($id_lokasi)
    {
        return $this->db->table('kj_gunung_kidul')
            ->where('no', $id_lokasi)
            ->get()->getRowArray();
    }

    public function getKulprogById($id_lokasi)
    {
        return $this->db->table('kj_kulon_progo')
            ->where('no', $id_lokasi)
            ->get()->getRowArray();
    }

    //fungsi update data
    public function updateDataSleman($id_lokasi, $data)
    {
        $this->db->table('kj_sleman')
            ->where('no', $id_lokasi)
            ->update($data);
    }
    public function updateDataKota($id_lokasi, $data)
    {
        $this->db->table('kj_jogja')
            ->where('no', $id_lokasi)
            ->update($data);
    }
    public function updateDataBantul($id_lokasi, $data)
    {
        $this->db->table('kj_bantul')
            ->where('no', $id_lokasi)
            ->update($data);
    }
    public function updateDataGunkid($id_lokasi, $data)
    {
        $this->db->table('kj_gunung_kidul')
            ->where('no', $id_lokasi)
            ->update($data);
    }
    public function updateDataKulprog($id_lokasi, $data)
    {
        $this->db->table('kj_kulon_progo')
            ->where('no', $id_lokasi)
            ->update($data);
    }

    //fungsi delete data
    public function deleteDataSleman($data)
    {
        $this->db->table('kj_sleman')
            ->where('no', $data['no'])
            ->delete($data);
    }
    public function deleteDataKota($data)
    {
        $this->db->table('kj_jogja')
            ->where('no', $data['no'])
            ->delete($data);
    }
    public function deleteDataBantul($data)
    {
        $this->db->table('kj_bantul')
            ->where('no', $data['no'])
            ->delete($data);
    }
    public function deleteDataGunkid($data)
    {
        $this->db->table('kj_gunung_kidul')
            ->where('no', $data['no'])
            ->delete($data);
    }
    public function deleteDataKulprog($data)
    {
        $this->db->table('kj_kulon_progo')
            ->where('no', $data['no'])
            ->delete($data);
    }
}
