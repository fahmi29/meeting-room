<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller
{

    public function index()
    {
        helper(['form']);
        // $model = new UserModel();
        echo view('login');
    }

    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        // print_r($data);

        if ($data) {
            $pass = $data['password'];
            $verify = password_verify($password, $pass);
            if ($pass === $password) {
                if ($data['role'] === 'admin') {
                    $ses_data = [
                        'id_user' => $data['id_user'],
                        'usernmae' => $data['username'],
                        'password' => $data['password'],
                        'name' => $data['nama_lengkap'],
                        'logged_in' => true
                    ];
                    $session->set($ses_data);
                    return redirect()->to('/admin/dashboard');
                } else {
                    $ses_data = [
                        'id_user' => $data['id_user'],
                        'usernmae' => $data['username'],
                        'password' => $data['password'],
                        'name' => $data['nama_lengkap'],
                        'logged_in' => true
                    ];
                    $session->set($ses_data);
                    return redirect()->to('/dashboard');
                }
            } else {
                $session->setFlashdata('msg', 'Lah salah wa');
                return redirect()->to('/');
            }
        } else {
            $session->setFlashdata('msg', 'User not found!');
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
