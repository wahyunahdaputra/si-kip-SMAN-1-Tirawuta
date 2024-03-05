<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class LoginFilter implements FilterInterface
{
    public function __construct()
    {
        helper(['session']);
    }
    public function before(RequestInterface $request, $arguments = null)
    {
        // Periksa apakah pengguna telah login
        if (!session()->get('id')) {
            // Jika belum, redirect ke halaman login
            return redirect()->to(site_url('data/login'));
        }
    }
    
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak ada yang perlu dilakukan setelah permintaan
    }
}
