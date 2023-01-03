<?php

namespace App\Controllers;

use App\Models\DivisiModel;
use App\Models\JabatanModel;
use App\Models\RuangModel;
use App\Models\UserModel;
use CodeIgniter\Controller;
use Config\Services;

class Admin extends Controller
{
    // kata sandika galih bisa biar jadi public tapi pas dicoba masih error jadi jangan dipake dulu
    protected $divisi;
    protected $jabatan;
    protected $user;
    public function __constructor()
    {
        $this->divisi = new DivisiModel();
        $this->jabatan = new JabatanModel();
        $this->user = new UserModel();
    }

    public function index()
    {
        $user = new UserModel();
        $data['users'] = $user->findAll();
        // dd($data);
        return view('admin/user', $data);
    }

    public function user()
    {
        $user = new UserModel();
        $data['users'] = $user->findAll();
        return view('admin/user', $data);
    }

    public function useradd()
    {
        $divisi = new DivisiModel();
        $jabatan = new JabatanModel();
        $data['divisi'] = $divisi->findAll();
        $data['jabatan'] = $jabatan->findAll();
        // dd($data['divisi']);
        echo view('admin/user-add', $data);
    }

    public function createuser()
    {
        // dd($this->request->getVar());
        // helper(['form', 'url']);
        // validasi data user
        // $validation = Services::validation();
        // $validation->setRule(['nama_lengkap' => 'required']); // rule validation ya mirip" di laravel lah
        // $isvalidate = $validation->withRequest($this->request)->run();

        // jika validasi return true / validasi benar / validasi lolos dll
        // if (!$isvalidate) {
        //     return view('admin/user-add', [
        //         'validation' => $this->validator
        //     ]);
        // } else {
        $user = new UserModel();
        $jabatan = (int)$this->request->getVar('jabatan');
        $divisi = (int)$this->request->getVar('divisi');
        $data = [
            'namalengkap' => $this->request->getVar('namalengkap'),
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'jabatan' => $jabatan,
            'divisi' => $divisi,
            'role' => 'user'
        ];
        // dd($data);
        $user->insert($data);
        session()->setFlashdata('msg', 'berhasil tambah user');
        return $this->response->redirect(site_url('/admin/dashboard'));
        // }
        // $this->request->getVar();
    }

    public function room()
    {
        $ruang = new RuangModel();
        $data['ruangan'] = $ruang->findAll();
        // dd($data);
        return view('admin/room', $data);
    }

    public function roomadd()
    {
        return view('admin/room-add');
    }
}
