<?php

namespace App\Config;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);

// Grup Filter Login
$routes->group('',['filter' => 'loginfilter'], function ($routes) {
    $routes->get('data/home', 'Data::home');
    $routes->get('data/akreksternal', 'Data::akreksternal');
    $routes->get('data/auditkeuanganeks', 'Data::auditkeuanganeks');
    $routes->get('data/akrinternasional', 'Data::akrinternasional');
    $routes->get('data/mhsasing', 'Data::mhsasing');
    $routes->get('data/sitasiilmiah', 'Data::sitasiilmiah');
    $routes->get('data/prestasimahasiswa', 'Data::prestasimahasiswa');
    $routes->get('data/riwayatakreditasiprodi', 'Data::riwayatakreditasiprodi');
    $routes->get('data/riwayatakreditasi', 'Data::riwayatAkreditasi');
    $routes->get('data/akrprodi', 'Data::akrprodi');
    $routes->get('data/pembelajaranpraktikum', 'Data::pembelajaranpraktikum');
    $routes->get('data/seleksimahasiswabaru', 'Data::seleksiMahasiswaBaru');
    $routes->get('data/produkjasa', 'Data::produkjasa');
 });
 $routes->group('',['filter' => 'AlreadyLoginFilter'], function ($routes) {
     $routes->get('data/login', 'Auth::index');
 });

$routes->get("/riwayatakreditasi/(:any)", "Data::riwayatAkreditasi/$1");
$routes->get('logout', 'Auth::logout');
$routes->get("/riwayatakreditasi/(:any)", "Data::riwayatAkreditasi/$1");

$routes->post('auditkeuanganeks', 'Data::auditkeuanganeks');
$routes->post('akreksternal', 'Data::akreksternal');
$routes->post('akrinternasional', 'Data::akrinternasional');
$routes->post('akrprodi', 'Data::akrprodi');
