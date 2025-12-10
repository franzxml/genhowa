<?php

/**
 * Class Home
 * * Controller default untuk halaman utama (Landing Page).
 */
class Home extends Controller {
    
    /**
     * Method index (default page).
     */
    public function index() {
        $data['judul'] = 'Genhowa - Welcome';
        $data['deskripsi'] = 'Selamat datang di aplikasi Genhowa.';
        
        // Memanggil views
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}