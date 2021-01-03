<?php

namespace App\Models;

use CodeIgniter\Model;

class Identitas_kucingModel extends Model
{
    protected $table = 'identitas_kucing';
    protected $useTimestamps = true;
    protected $allowedFields = ['Nama_kucing', 'slug', 'Gender', 'Perkiraan_Umur', 'Jenis_Kucing', 'Domisili', 'Deskripsi', 'Foto'];

    public function getIdentitas_kucing($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}