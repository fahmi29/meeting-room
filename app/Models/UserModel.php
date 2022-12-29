<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $primaryKey = 'id_user';
    protected $table = 'user';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['namalengkap', 'email', 'username', 'password', 'jabatan', 'divisi', 'role'];
    protected $useTimestamps = true;
}
