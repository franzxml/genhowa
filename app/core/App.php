<?php

/**
 * Class App
 * * Kelas utama untuk routing aplikasi MVC.
 * Bertugas memparsing URL dan menentukan Controller serta Method yang akan dijalankan.
 */
class App {
    // Controller default
    protected $controller = 'Home';
    // Method default
    protected $method = 'index';
    // Parameter URL
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        // Cek apakah file controller ada di folder controllers
        if (isset($url[0])) {
            if (file_exists('../app/controllers/' . ucfirst($url[0]) . '.php')) {
                $this->controller = ucfirst($url[0]);
                unset($url[0]);
            }
        }

        // Require controller dan instansiasi
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Cek method di dalam controller
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Kelola parameter jika ada
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // Jalankan controller & method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    /**
     * Mengambil dan memecah URL.
     * * @return array|null Array segmen URL atau null.
     */
    public function parseUrl() {
        if (isset($_GET['url'])) {
            // Bersihkan URL dari karakter slash di akhir
            $url = rtrim($_GET['url'], '/');
            // Filter URL dari karakter ilegal
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // Pecah URL menjadi array berdasarkan slash
            $url = explode('/', $url);
            return $url;
        }
    }
}