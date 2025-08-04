<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Login extends BaseController
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if (session()->logged_in) return redirect()->to('dashboard');
        return view('login');
    }

    public function process()
    {

        $users = new AdminModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        if ($dataUser) {

            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'nama' => $dataUser->nama,
                    'logged_in' => TRUE
                ]);
                $ses_data = [
                    'title' => 'Login',
                    'logged_in'     => true,
                ];
                $this->session->set($ses_data);
                return redirect()->to(base_url('dashboard'));
            } else {

                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
                // return view('dashboard/dashboard');
            }
        } else {

            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
