<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    protected $mloginmodel;

    public function __construct()
    {
        $this->mloginmodel = new LoginModel();
    }

    public function index()
    {
    if ($this->request->getMethod() === 'post') {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username == '' || !is_string($password)) {
            $err = "Silakan Masukkan Username dan Password!";
        } else {
            $dataAuth_login = $this->mloginmodel->where("username", $username)->first();
            if ($dataAuth_login) {
                // Check if the password field is present and is a string
                if (isset($dataAuth_login['password']) && is_string($dataAuth_login['password'])) {
                    // Mengenkripsi password dari formulir menggunakan MD5
                    $password_md5 = md5($password);
                    if ($dataAuth_login['password'] == $password_md5) {
                        $dataSesi = [
                            'id' => $dataAuth_login['id'],
                            'username' => $dataAuth_login['username'],
                            // Password tidak perlu disimpan dalam session
                        ];
                        session()->set($dataSesi);
                        return redirect()->to('data/home');
                    } else {
                        $err = "Silakan Masukkan Password Dengan Benar!";
                    }
                } else {
                    $err = "Password Yang Anda Masukkan Tidak Valid!";
                }
            } else {
                $err = "Username tidak ditemukan!";
            }
        }

        return redirect()->to("login")->withInput()->with('error', $err);
    }

    return view('data/login');
}
    public function logout()
        {
        if(session()->has('id')) {
            session()->remove('id');
            return redirect()->to('login')->with('success', "Anda Berhasil Logout.");
        }

}
}
