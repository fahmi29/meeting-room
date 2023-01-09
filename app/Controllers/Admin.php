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

    public function useredit($id)
    {
        // dd($id);
        $user = new UserModel();
        $divisi = new DivisiModel();
        $jabatan = new JabatanModel();
        $data['users'] = $user->find($id);
        $data['divisi'] = $divisi->findAll();
        $data['jabatan'] = $jabatan->findAll();

        // dd($data);
        echo view('admin/user-edit', $data);
    }

    public function createuser()
    {
        // dd($this->request->getVar());
        $validation = Services::validation();
        // rule validation ya mirip" di laravel lah
        $rules = [
            'namalengkap' => 'required',
            'email' => 'required|valid_email',
            'username' => 'required',
            'password' => 'required',
            'jabatan' => 'required',
            'divisi' => 'required'
        ];
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
            $user->insert($data);
            $user = new UserModel();
            $datas['users'] = $user->findAll();
            $datas['validation'] = $this->validator;
            //flash message
            session()->setFlashdata('msg', 'User Berhasil Disimpan');
            return view('admin/user', $datas);
        } else {
            $data['validation'] = $this->validator;
            $divisi = new DivisiModel();
            $jabatan = new JabatanModel();
            $data['divisi'] = $divisi->findAll();
            $data['jabatan'] = $jabatan->findAll();
            return view('admin/user-add', $data);
        }
    }

    public function updateuser($id)
    {
        // dd($this->request->getVar());
        $validation = Services::validation();
        // rule validation ya mirip" di laravel lah
        $rules = [
            'namalengkap' => 'required',
            'email' => 'required|valid_email',
            'username' => 'required',
            'password' => 'required',
            'jabatan' => 'required',
            'divisi' => 'required'
        ];
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
            $user->update($id, $data);
            $user = new UserModel();
            $datas['users'] = $user->findAll();
            $datas['validation'] = $this->validator;
            //flash message
            session()->setFlashdata('msg', 'User Berhasil Diupdate');
            return view('admin/user', $datas);
        } else {
            $data['validation'] = $this->validator;
            $user = new UserModel();
            $divisi = new DivisiModel();
            $jabatan = new JabatanModel();
            $data['users'] = $user->find($id);
            $data['divisi'] = $divisi->findAll();
            $data['jabatan'] = $jabatan->findAll();
            return view('admin/user-edit', $data);
        }
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
            $upload = $this->request->getFile('gambar');
            // dd($upload->getName());
            $upload->move(WRITEPATH . '../public/assets/images/');
            $ruang->update($id, [
                'namaruang' => $this->request->getVar('namaruang'),
                'kapasitas' => $this->request->getVar('kapasitas'),
                'fasilitas' => $this->request->getVar('fasilitas'),
                'gambar' => $upload->getName()
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
