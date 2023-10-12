<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLokasi extends Model
{
    //fungsi insert data
    public function insertData($data)
    {
        $this->db->table('kj_sleman')->insert($data);
        $this->db->table('kj_jogja')->insert($data);
        $this->db->table('kj_bantul')->insert($data);
        $this->db->table('kj_kulon_progo')->insert($data);
        $this->db->table('kj_gunung_kidul')->insert($data);
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
    public function getDataById($no)
    {
        return $this->db->table('kj_sleman')
            ->where('no', $no)
            ->get()->getRowArray();
        return $this->db->table('kj_jogja')
            ->where('no', $no)
            ->get()->getRowArray();
        return $this->db->table('kj_bantul')
            ->where('no', $no)
            ->get()->getRowArray();
        return $this->db->table('kj_kulon_progo')
            ->where('no', $no)
            ->get()->getRowArray();
        return $this->db->table('kj_gunung_kidul')
            ->where('no', $no)
            ->get()->getRowArray();
    }

    //fungsi update data
    public function updateData($data)
    {
        $this->db->table('kj_sleman')
            ->where('no', $data['no'])
            ->update($data);
        $this->db->table('kj_jogja')
            ->where('no', $data['no'])
            ->update($data);
        $this->db->table('kj_bantul')
            ->where('no', $data['no'])
            ->update($data);
        $this->db->table('kj_kulon_progo')
            ->where('no', $data['no'])
            ->update($data);
        $this->db->table('kj_gunung_kidul')
            ->where('no', $data['no'])
            ->update($data);
    }

    //fungsi delete data
    public function deleteData($data)
    {
        $this->db->table('kj_sleman')
            ->where('no', $data['no'])
            ->delete($data);
        $this->db->table('kj_jogja')
            ->where('no', $data['no'])
            ->delete($data);
        $this->db->table('kj_bantul')
            ->where('no', $data['no'])
            ->delete($data);
        $this->db->table('kj_kulon_progo')
            ->where('no', $data['no'])
            ->delete($data);
        $this->db->table('kj_gunung_kidul')
            ->where('no', $data['no'])
            ->delete($data);
    }
}
