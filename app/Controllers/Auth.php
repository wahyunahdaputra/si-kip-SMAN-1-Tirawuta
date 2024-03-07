<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
    protected $mauthmodel;

    public function __construct()
    {
        $this->mauthmodel = new AuthModel();
    }

    public function index()
    {
    if ($this->request->getMethod() === 'post') {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username == '' || !is_string($password)) {
            $err = "Silakan Masukkan Username dan Password!";
        } else {
            $dataAuth_login = $this->mauthmodel->where("username", $username)->first();
            if ($dataAuth_login) {
                if (isset($dataAuth_login['password']) && is_string($dataAuth_login['password'])) {
                    $password_md5 = md5($password);
                    if ($dataAuth_login['password'] == $password_md5) {
                        $dataSesi = [
                            'id' => $dataAuth_login['id'],
                            'username' => $dataAuth_login['username'],
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

        return redirect()->to("auth")->withInput()->with('error', $err);
    }

    return view('data/login');
}
    public function logout()
        {
        if(session()->has('id')) {
            session()->remove('id');
            return redirect()->to('auth')->with('success', "Anda Berhasil Logout.");
        }

}
}
