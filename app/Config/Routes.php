<?php

namespace App\Config;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);

$routes->get('/', 'Landing::index');


// Grup Filter Login
$routes->group('',['filter' => 'loginfilter'], function ($routes) {
    $routes->get('data/home', 'Data::home');
    $routes->get('data/dataset', 'Data::dataset');
    $routes->get('data/perhitungan', 'Data::perhitungan');
    $routes->get('data/pendaftar', 'Data::pendaftar');
    $routes->get('data/klasifikasi', 'Data::klasifikasi');
    $routes->get('data/sitasiilmiah', 'Data::sitasiilmiah');
    $routes->get('data/prestasimahasiswa', 'Data::prestasimahasiswa');
    $routes->get('data/riwayatakreditasiprodi', 'Data::riwayatakreditasiprodi');
    $routes->get('data/riwayatakreditasi', 'Data::riwayatAkreditasi');
    $routes->get('data/akrprodi', 'Data::akrprodi');
    $routes->get('data/pembelajaranpraktikum', 'Data::pembelajaranpraktikum');
    $routes->get('data/seleksimahasiswabaru', 'Data::seleksiMahasiswaBaru');
    $routes->get('data/produkjasa', 'Data::produkjasa');
    $routes->get('data/kerjasamaperguruantinggi', 'Data::kerjasamaperguruantinggi');
    $routes->get('data/kecukupandosen', 'Data::kecukupandosen');
    $routes->get('data/bebankerjadosen', 'Data::bebankerjadosen');
    $routes->get('data/produktivitaspenelitian', 'Data::produktivitaspenelitian');
    $routes->get('data/produktivitaspenelitianpkm', 'Data::produktivitaspenelitianpkm');
    // $routes->get('data/rekognisidosen', 'Data::rekognisidosen');
 });
 $routes->group('',['filter' => 'AlreadyLoginFilter'], function ($routes) {
     $routes->get('data/login', 'Auth::index');
 });

$routes->get("/riwayatakreditasi/(:any)", "Data::riwayatAkreditasi/$1");
$routes->get('logout', 'Auth::logout');
$routes->get("/riwayatakreditasi/(:any)", "Data::riwayatAkreditasi/$1");

//Tata Pamong Aksi
$routes -> delete("/dataset/(:num)", "Data::dataset_delete/$1");
$routes-> post ("/dataset/(:num)", "Data::dataset_update/$1");

$routes -> delete("/perhitungan/(:num)", "Data::perhitungan_delete/$1");
$routes-> post ("/perhitungan/(:num)", "Data::perhitungan_update/$1");

$routes -> delete("/pendaftar/(:num)", "Data::pendaftar_delete/$1");
$routes-> post ("/pendaftar/(:num)", "Data::pendaftar_update/$1");

$routes -> delete("/klasifikasi/(:num)", "Data::klasifikasi_delete/$1");
$routes-> post ("/klasifikasi/(:num)", "Data::klasifikasi_update/$1");


// Tambah Data
// Tata Pamomg dan Tata Kelola
$routes->post('auditkeuanganeks', 'Data::auditkeuanganeks');
$routes->post('akreksternal', 'Data::akreksternal');
$routes->post('akrinternasional', 'Data::akrinternasional');
$routes->post('akrprodi', 'Data::akrprodi');
$routes->post('kerjasamaperguruantinggi', 'Data::kerjasamaperguruantinggi');

// Mahasiswa
$routes->post('mhsasing', 'Data::mhsasing');
$routes->post('pembelajaranpraktikum', 'Data::pembelajaranpraktikum');

//Sumber Daya Manusia
$routes->post('kecukupandosen', 'Data::kecukupandosen');
$routes->post('bebankerjadosen', 'Data::bebankerjadosen');
$routes->post('produktivitaspenelitian', 'Data::produktivitaspenelitian');
$routes->post('produktivitaspenelitianpkm', 'Data::produktivitaspenelitianpkm');


