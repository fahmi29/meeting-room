<?php 
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'user';
    protected $allowedfields = ['username', 'nama_lengkap', 'password'];
}
