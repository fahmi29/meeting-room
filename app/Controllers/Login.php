<?php

namespace App\Controllers;

use CodeIgniter\Controller;
// use App\Models\UserModel;

class Login extends Controller
{

    public function index()
    {
        helper(['form']);
        echo view('login');
    }

    public function auth()
    {
        $session = session();
        // $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        // $data = $model->where('username', $username)->first();
        if ($username === 'admin') {
            $ses_data = [
                'usernmae' => 'admin',
                'name' => 'admin tes',
                'role' => 'admin',
                'logged_in' => true
            ];
            $session->set($ses_data);
            return redirect()->to('/admin/dashboard');
        } else if($username === 'user') {
            $ses_data = [
                'usernmae' => 'user',
                'name' => 'user tes',
                'role' => 'user',
                'logged_in' => true
            ];
            $session->set($ses_data);
            return redirect()->to('/user/dashboard');
        }else{
            $session->setFlashdata('msg', 'Lah salah wa');
            return redirect()->to('/');
        }
        // if ($data) {
        //     $pass = $data['password'];
        //     $verify = password_verify($password, $pass);
        //     if ($verify) {
        // if ($data['role'] === 'admin') {
        //         $ses_data = [
        //             'usernmae' => $data['username'],
        //             'password' => $data['password'],
        //             'name' => $data['name'],
        //             'logged_in' => true
        //         ];
        //         $session->set($ses_data);
        //         return redirect()->to('/admin/dashboard');
        // }else {
        //         $ses_data = [
        //             'usernmae' => $data['username'],
        //             'password' => $data['password'],
        //             'name' => $data['name'],
        //             'logged_in' => true
        //         ];
        //         $session->set($ses_data);
        //         return redirect()->to('/dashboard');
        // }
        //     }else{
        //         $session->setFlashdata('msg', 'Lah salah wa');
        //         return redirect()->to('/');
        //     }
        // }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
