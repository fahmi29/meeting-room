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
        $validation = Services::validation();
        // rule validation ya mirip" di laravel lah
        // $validation->setRules(['namalengkap' => 'required']);
        // $validation->setRules(['email' => 'required']);
        // $validation->setRules(['username' => 'required']);
        // $validation->setRules(['password' => 'required']);
        // $validation->setRules(['jabatan' => 'required']);
        // $validation->setRules(['divisi' => 'required']);
        $rules = [
            'namalengkap' => 'required',
            'email' => 'required|valid_email',
            'username' => 'required',
            'password' => 'required',
            'jabatan' => 'required',
            'divisi' => 'required'
        ];
        // $isvalidate = $validation->withRequest($this->request)->run();

        // jika validasi return true / validasi benar / validasi lolos dll
        if ($this->validate($rules)) {
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
            $user = new UserModel();
            $datas['users'] = $user->findAll();
            $datas['validation'] = $this->validator;
            //flash message
            session()->setFlashdata('msg', 'User Berhasil Disimpan');
            return view('admin/user', $datas);
            // return view('admin/user-add', [
            //     'validation' => $this->validator
            // ]);
        } else {
            $data['validation'] = $this->validator;
            $divisi = new DivisiModel();
            $jabatan = new JabatanModel();
            $data['divisi'] = $divisi->findAll();
            $data['jabatan'] = $jabatan->findAll();
            // session()->setFlashdata('msg', 'User Berhasil Disimpan');
            return view('admin/user-add', $data);
        }
        // }
        // $this->request->getVar();
    }

    public function room()
    {
        $ruang = new RuangModel();
        $data['room'] = $ruang->findAll();
        // dd($data);
        return view('admin/room', $data);
    }

    public function roomadd()
    {
        $data['room'] = '';

        return view('admin/room-add', $data);
    }

    public function addroom()
    {
        // dd($this->request->getFile('file'));
        $rules = [
            'namaruang' => 'required',
            'kapasitas' => 'required',
            'fasilitas' => 'required',
            // 'gambar' => 'uploaded[file]|max_size[file,1024]|ext_in[file,jpg,jpeg,png],'
        ];

        if ($this->validate($rules)) {
            $ruang = new RuangModel();
            $upload = $this->request->getFile('gambar');
            // dd($upload->getName());
            $upload->move(WRITEPATH . '../public/assets/images/');
            $data = [
                'namaruang' => $this->request->getVar('namaruang'),
                'fasilitas' => $this->request->getVar('fasilitas'),
                'kapasitas' => $this->request->getVar('kapasitas'),
                'gambar' => $upload->getName(),
            ];
            $ruang->insert($data);
            //flash message
            session()->setFlashdata('msg', 'Ruangan Berhasil Ditambah');
            return redirect()->route('admin/room-management');
        } else {
            $data['validation'] = $this->validator;
            return view('admin/room-add', $data);
        }
    }


    public function roomedit($id)
    {
        $ruang = new RuangModel();

        $data['room'] = $ruang->find($id);

        // dd($data);
        return view('admin/room-edit', $data);
    }

    public function updateroom($id)
    {
        // dd($id);
        // helper(['form', 'url']);
        // $validation = Services::validation();
        // $data['ruangan'] = $ruang->findAll();
        $ruang = new RuangModel();
        // $data['room'] = $ruang->where('id_ruangan', $id)->first();

        $rules = [
            'namaruang' => 'required',
            'kapasitas' => 'required',
            'fasilitas' => 'required',
            'gambar' => 'required'
        ];

        if (!$this->validate($rules)) {
            $ruang->update($id, [
                'namaruang' => $this->request->getVar('namaruang'),
                'kapasitas' => $this->request->getVar('kapasitas'),
                'fasilitas' => $this->request->getVar('fasilitas')
                // 'gambar' => $this->request->getVar('gambar')
            ]);
            
            $data['room'] = $ruang->findAll();
            // return view('admin/room-management', $data);
            //flash message
            session()->setFlashdata('msg', 'Ruangan Berhasil Diupdate');
            return redirect()->route('admin/room-management');
        } else {
            $data['validation'] = $this->validator;
            return view('admin/room-add', $data);
        }
    }
}
