<?php

namespace App\Models;

use CodeIgniter\Model;

class RuangModel extends Model
{
    protected $table = 'ruangan';
    protected $primaryKey = 'id_ruangan';
    protected $useAutoIncrement = true;
    protected $allowedfields = ['nama_ruangan', 'kapasitas', 'fasilitas', 'gambar'];
    protected $useTimestamps = true;
}
