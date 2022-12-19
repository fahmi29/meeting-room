<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Admin extends Controller 
{
    public function index()
    {
        echo view('admin/dashboard');
    }

    public function user()
    {
        echo view('admin/user');
    }

    public function adduser()
    {
        echo view('admin/user-add');
    }

    public function room()
    {
        echo view('admin/room');
    }

    public function addroom()
    {
        echo view('admin/room-add');
    }
}