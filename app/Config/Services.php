<?php

namespace Config;

use CodeIgniter\Config\Services as BaseService;
use CodeIgniter\Router\RouteCollectionInterface;
use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Autoloader\Autoloader;
use CodeIgniter\Autoloader\FileLocator;
use Config\Modules;

class Services extends BaseService
{
    protected $app;

    public function __construct()
    {
        // Tidak perlu inisialisasi routes di sini
        // $this->routes = Services::routes(APPPATH . 'app/Config/Routes.php');
    }

    public static function routes(bool $getShared = true, string $filename = ''): RouteCollectionInterface
    {
        // Membuat instance Autoloader
        $autoloader = new Autoloader();

        // Membuat instance FileLocator dengan instance Autoloader sebagai argumen
        $locator = new FileLocator($autoloader);

        // Membuat RouteCollection dengan FileLocator, konfigurasi modul, and instance of Config\Routing
        $moduleConfig = new Modules();
        $routing = new Routing();
        
        // Memuat rute dari file jika diberikan
        if (!empty($filename)) {
            require $filename;
        }
        
        // Mengembalikan RouteCollection yang sudah diinisialisasi
        return new RouteCollection($locator, $moduleConfig, $routing);
    }
}
