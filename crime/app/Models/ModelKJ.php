<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKJ extends Model
{
    //fungsi insert data
    public function insertData($data)
    {
        $this->db->table('kj_sleman')->insert($data);
    }

    //fungsi mengambil seluruh data
    public function getAllData()
    {
        return $this->db->table('kj_sleman')
            ->get()->getResultArray();
    }

    //fungsi mengambil data berdasar id
    public function getDataById($id_lokasi)
    {
        return $this->db->table('kj_sleman')
            ->where('no', $id_lokasi)
            ->get()->getRowArray();
    }

    //fungsi update data
    public function updateData($data)
    {
        $this->db->table('kj_sleman')
            ->where('no', $data['no'])
            ->update($data);
    }

    //fungsi delete data
    public function deleteData($data)
    {
        $this->db->table('kj_sleman')
            ->where('no', $data['no'])
            ->delete($data);
    }
}
