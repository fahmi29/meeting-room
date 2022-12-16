<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Dashboard extends Controller 
{
    public function index()
    {
        echo view('dashboard');
        // echo view('layout/pageLayout');
    }

    public function detail()
    {
        echo view('detail');
    }
}