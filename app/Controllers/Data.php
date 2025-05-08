<?php

namespace App\Controllers;

use App\Models\HomeModel;
use App\Models\DatasetModel;
use App\Models\PerhitunganModel;
use App\Models\PendaftarModel;
use App\Models\KlasifikasiModel;


class Data extends BaseController
{

    protected $mhome;
    protected $mdataset;
    protected $mperhitungan;
    protected $mpendaftar;
    protected $mklasifikasi;
    protected $mpagination;

    public function __construct(){

        $this->mhome = new HomeModel();
        $this->mdataset = new DatasetModel();
        $this->mperhitungan = new PerhitunganModel();
        $this->mpendaftar = new PendaftarModel();
        $this->mklasifikasi = new KlasifikasiModel();
    
    }
    public function home() 
    {
       $getdata = $this->mhome->getdata();

       $data = array(
            'dataProgramStudi' => $getdata,
            'paginasi' => $this->mhome->paginate(10, 'paginasi'), // Mengambil data yang dipaginasi
            'pager' => $this->mhome->pager
       );

        echo view('data/home', $data);
    }

    public function formAps1() 
    {
        echo view('data/formAps1');
    }

        public function dataset()
        {
            if ($this->request->is('post')) {
                $formData = [
                    'lembaga' => $this->request->getPost('lembaga'),
                    'jenis_sertifikat' => $this->request->getPost('jenis_sertifikat'),
                    'lingkup' => $this->request->getPost('lingkup'),
                    'tingkat' => $this->request->getPost('tingkat'),
                    'masa_berlaku' => $this->request->getPost('masa_berlaku'),
                    'keterangan' => $this->request->getPost('keterangan')
                ];
        
                $this->mdataset->simpan($formData);
        
                return redirect()->to(base_url('data/dataset'))->with('status', 'Data berhasil disimpan.');
            }

           $getdata = $this->mdataset->getdata();

           $data = array(
                'dataset' => $getdata,
                'paginasi' => $this->mdataset->paginate(10, 'paginasi'),
                'pager' => $this->mdataset->pager

           );
    
            echo view('data/dataset', $data);

        }

        // public function akreksternal_update($id)
        //     {
        //         if ($this->request->is('post')) {
        //             $formData = [
        //                 'lembaga' => $this->request->getPost('lembaga'),
        //                 'jenis_sertifikat' => $this->request->getPost('jenis_sertifikat'),
        //                 'lingkup' => $this->request->getPost('lingkup'),
        //                 'tingkat' => $this->request->getPost('tingkat'),
        //                 'masa_berlaku' => $this->request->getPost('masa_berlaku'),
        //                 'keterangan' => $this->request->getPost('keterangan')
        //             ];
        //         }
        //         $this->makreksternal->updateData($id, $formData);

        //         return redirect()->to('data/akreksternal')->with('status', 'Data berhasil diupdate');
        //     }

        // public function akreksternal_delete($id) {
        //     $this -> makreksternal -> hapus($id);
        //     return redirect() -> to('data/akreksternal');
        // }

        public function perhitungan()
        {
            if ($this->request->is('post')) {
                $formData = [
                    'lembaga' => $this->request->getPost('lembaga'),
                    'jenis_sertifikat' => $this->request->getPost('jenis_sertifikat'),
                    'lingkup' => $this->request->getPost('lingkup'),
                    'tingkat' => $this->request->getPost('tingkat'),
                    'masa_berlaku' => $this->request->getPost('masa_berlaku'),
                    'keterangan' => $this->request->getPost('keterangan')
                ];
        
                $this->mperhitungan->simpan($formData);
        
                return redirect()->to(base_url('data/perhitungan'))->with('status', 'Data berhasil disimpan.');
            }

           $getdata = $this->mperhitungan->getdata();

           $data = array(
                'perhitungan' => $getdata,
                'paginasi' => $this->mperhitungan->paginate(10, 'paginasi'),
                'pager' => $this->mperhitungan->pager

           );
    
            echo view('data/perhitungan', $data);

        }

        // public function akreksternal_update($id)
        //     {
        //         if ($this->request->is('post')) {
        //             $formData = [
        //                 'lembaga' => $this->request->getPost('lembaga'),
        //                 'jenis_sertifikat' => $this->request->getPost('jenis_sertifikat'),
        //                 'lingkup' => $this->request->getPost('lingkup'),
        //                 'tingkat' => $this->request->getPost('tingkat'),
        //                 'masa_berlaku' => $this->request->getPost('masa_berlaku'),
        //                 'keterangan' => $this->request->getPost('keterangan')
        //             ];
        //         }
        //         $this->makreksternal->updateData($id, $formData);

        //         return redirect()->to('data/akreksternal')->with('status', 'Data berhasil diupdate');
        //     }

        // public function akreksternal_delete($id) {
        //     $this -> makreksternal -> hapus($id);
        //     return redirect() -> to('data/akreksternal');
        // }

        public function pendaftar()
        {
            if ($this->request->is('post')) {
                $formData = [
                    'lembaga' => $this->request->getPost('lembaga'),
                    'jenis_sertifikat' => $this->request->getPost('jenis_sertifikat'),
                    'lingkup' => $this->request->getPost('lingkup'),
                    'tingkat' => $this->request->getPost('tingkat'),
                    'masa_berlaku' => $this->request->getPost('masa_berlaku'),
                    'keterangan' => $this->request->getPost('keterangan')
                ];
        
                $this->mpendaftar->simpan($formData);
        
                return redirect()->to(base_url('data/pendaftar'))->with('status', 'Data berhasil disimpan.');
            }

           $getdata = $this->mpendaftar->getdata();

           $data = array(
                'pendaftar' => $getdata,
                'paginasi' => $this->mpendaftar->paginate(10, 'paginasi'),
                'pager' => $this->mpendaftar->pager

           );
    
            echo view('data/pendaftar', $data);

        }

        // public function akreksternal_update($id)
        //     {
        //         if ($this->request->is('post')) {
        //             $formData = [
        //                 'lembaga' => $this->request->getPost('lembaga'),
        //                 'jenis_sertifikat' => $this->request->getPost('jenis_sertifikat'),
        //                 'lingkup' => $this->request->getPost('lingkup'),
        //                 'tingkat' => $this->request->getPost('tingkat'),
        //                 'masa_berlaku' => $this->request->getPost('masa_berlaku'),
        //                 'keterangan' => $this->request->getPost('keterangan')
        //             ];
        //         }
        //         $this->makreksternal->updateData($id, $formData);

        //         return redirect()->to('data/akreksternal')->with('status', 'Data berhasil diupdate');
        //     }

        // public function akreksternal_delete($id) {
        //     $this -> makreksternal -> hapus($id);
        //     return redirect() -> to('data/akreksternal');
        // }
        
        public function klasifikasi()
        {
            if ($this->request->is('post')) {
                $formData = [
                    'lembaga' => $this->request->getPost('lembaga'),
                    'jenis_sertifikat' => $this->request->getPost('jenis_sertifikat'),
                    'lingkup' => $this->request->getPost('lingkup'),
                    'tingkat' => $this->request->getPost('tingkat'),
                    'masa_berlaku' => $this->request->getPost('masa_berlaku'),
                    'keterangan' => $this->request->getPost('keterangan')
                ];
        
                $this->mklasifikasi->simpan($formData);
        
                return redirect()->to(base_url('data/klasifikasi'))->with('status', 'Data berhasil disimpan.');
            }

           $getdata = $this->mklasifikasi->getdata();

           $data = array(
                'klasifikasi' => $getdata,
                'paginasi' => $this->mklasifikasi->paginate(10, 'paginasi'),
                'pager' => $this->mklasifikasi->pager

           );
    
            echo view('data/klasifikasi', $data);

        }

        // public function akreksternal_update($id)
        //     {
        //         if ($this->request->is('post')) {
        //             $formData = [
        //                 'lembaga' => $this->request->getPost('lembaga'),
        //                 'jenis_sertifikat' => $this->request->getPost('jenis_sertifikat'),
        //                 'lingkup' => $this->request->getPost('lingkup'),
        //                 'tingkat' => $this->request->getPost('tingkat'),
        //                 'masa_berlaku' => $this->request->getPost('masa_berlaku'),
        //                 'keterangan' => $this->request->getPost('keterangan')
        //             ];
        //         }
        //         $this->makreksternal->updateData($id, $formData);

        //         return redirect()->to('data/akreksternal')->with('status', 'Data berhasil diupdate');
        //     }

        // public function akreksternal_delete($id) {
        //     $this -> makreksternal -> hapus($id);
        //     return redirect() -> to('data/akreksternal');
        // }
        
}
