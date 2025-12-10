<?php

/**
 * Class Controller
 * * Controller dasar yang menyediakan method untuk memanggil View dan Model.
 */
class Controller {
    
    /**
     * Memuat file view.
     * * @param string $view Nama view (path relatif terhadap folder views).
     * @param array $data Data yang akan dikirim ke view.
     */
    public function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }

    /**
     * Memuat file model.
     * * @param string $model Nama model.
     * @return object Instance dari model.
     */
    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}