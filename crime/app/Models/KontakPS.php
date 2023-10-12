<?php

namespace App\Models;

use CodeIgniter\Model;

class KontakPS extends Model
{
    //fungsi mengambil seluruh data
    public function getAllData()
    {
        return $this->db->table('kontakps')
            ->get()->getResultArray();
    }
}
