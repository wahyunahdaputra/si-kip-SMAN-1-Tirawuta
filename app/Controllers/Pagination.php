<?php

namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\PaginationModel;

class Pagination extends BaseController
{
    protected $mpagination;

    public function __construct()
    {
        $this->mpagination = new PaginationModel();
    }

    public function index()
    {
        $data = [
            'paginasi' => $this->mpagination->paginate(10, 'paginasi'), // Mengambil data yang dipaginasi
            'pager' => $this->mpagination->pager
        ];

        return view('pagination/index', $data);
    }
}
