<?php

namespace App\Controllers;
use App\Models\UsersModel;
class Users extends BaseController
{

    public function daftar()
    {
        session();
        $data = [
            'validation' => \config\Services::validation(),
        ];

        echo view('header/header-daftar');
        echo view('page/daftar', $data);
    }
    
    public function insertdaftar()
    {
        //validation form 

        if (!$this->validate([

            'nama_pengguna' => [ 'rules' => 'is_unique[users.nama_pengguna]|required',
            'errors' => [
                'required' => ' Username harus diisi.',
                'is_unique' => ' Username sudah digunakan'],

            ],

            'email' => [ 'rules' => 'is_unique[users.email]|valid_email|required',
            'errors' => [
                'required' => ' Email harus diisi.',
                'is_unique' => ' Email sudah digunakan.',
                'valid_email' => 'Gunakan email yang benar.'],
                
            ],

            'password' => [ 'rules' => 'is_unique[users.password]|min_length[8]|required',
            'errors' => [
                'required' => ' Password harus diisi.',
                'is_unique' => 'Password sudah digunakan.',
                'min_length' => 'Panjang Password
                harus 8 karakter.'],
            ],
        ])) {

            $validation = \Config\Services::validation();
            return redirect()->to('Users/daftar')->withinput()->with('validation',$validation);
        }

        $model = new UsersModel();
        $pw = $this->request->getVar('password');
        $data = [

            'email' => $this->request->getVar('email'),
            'password' => md5($pw),
            'nama_pengguna' => $this->request->getVar('nama_pengguna')
        ];

        $model->insert($data);
        session()->setFlashdata('pesan','Anda Berhasil Daftar');
        return redirect()->to('Users/login');
    }


    public function login()
    {

        echo view('header/header-daftar');
        echo view('page/login');
    }

    public function insertlogin()
    {

        $model = new UsersModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $model->where('email',$email);
        $data = $model->where('password',MD5($password))->first();
        if ($data) {
            return redirect()->to('Mika/index');
        }else{

            return redirect()->back()->with('pesan','Email Atau Password Anda Salah');
        }
    }


    public function logout()
    {

        session()->destroy();
        return redirect()->to('Home/index');
    }
}

