<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Login extends BaseController
{
    public function index()
    {
        return view('vw_login');
    }

    public function process()
    {
        $admin = new AdminModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $admin->where([
            'username' => $username,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'name' => $dataUser->name,
                    'logged_in' => TRUE
                ]);
                if (session()->get('username') == 'admin') {
                    return redirect()->to(base_url('admin'));
                } else {
                    return redirect()->to(base_url('home'));
                }
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
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
