<?php

namespace App\Models;

use CodeIgniter\Model;

class KontakRS extends Model
{
    //fungsi mengambil seluruh data
    public function getAllData()
    {
        return $this->db->table('kontakrs')
            ->get()->getResultArray();
    }
}
