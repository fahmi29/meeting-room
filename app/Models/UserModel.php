<?php 
namespace App\Models;
use Codeigniter\Model;

class UserModel extends Model{
    protected $table = '?';
    protected $allowedfields = ['username', 'name', 'password'];
}
