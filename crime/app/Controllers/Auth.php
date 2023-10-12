<?php

namespace App\Controllers;

use App\Models\Model_Auth;

class Auth extends BaseController
{
    protected $Model_Auth;

    public function __construct()
    {
        $this->Model_Auth = new Model_Auth();
    }

    public function Login()
    {
        $data = array(
            'title' => 'Login',
        );
        return view('v_login', $data);
    }

    public function cek_login()
    {
        if ($this->validate([
            'nama_admin' => [
                'label' => 'Nama Admin',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!'
                ]
            ],
        ])) {
            //jika valid
            $nama_admin = $this->request->getPost('nama_admin');
            $password = $this->request->getPost('password');
            $cek = $this->Model_Auth->login($nama_admin, $password);
            if ($cek) {
                //jika data cocok
                session()->set('log', true);
                session()->set('nama_admin', $cek['nama_admin']);
                session()->set('password', $cek['password']);
                //login
                return redirect()->to(base_url('Lokasi'));
            } else {
                //jika tidak cocok
                session()->setFlashdata('pesan', 'Adminname atau Password salah!');
                return redirect()->to(base_url('auth/login'));
            }
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/login'));
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('nama_admin');
        session()->remove('password');
        session()->setFlashdata('pesan', 'Logout Sukses!');
        return redirect()->to(base_url('home'));
    }
}
