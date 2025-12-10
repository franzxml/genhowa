<?php

/**
 * Entry Point Aplikasi
 * * Melakukan bootstrapping aplikasi dengan memuat file inisialisasi utama.
 */

// Menjalankan session
if (!session_id()) session_start();

// Memuat file konfigurasi
require_once '../app/config/config.php';

// Memuat file inisialisasi core
require_once '../app/core/App.php';
require_once '../app/core/Controller.php';

// Inisialisasi App
$app = new App();