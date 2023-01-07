<?php

namespace App\Models;

use CodeIgniter\Model;

class RuangModel extends Model
{
    protected $table = 'ruangan';
    protected $primaryKey = 'id_ruangan';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['namaruang', 'kapasitas', 'fasilitas', 'gambar'];
    protected $useTimestamps = true;
}
