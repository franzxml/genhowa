<?php
/**
 * Config Teyrail
 */

// PASTIKAN: Ganti 'teyrail.test' sesuai nama folder proyek kamu di Laragon
// Jika folder masih 'genhowa', pakai 'http://genhowa.test'
define('BASEURL', 'http://teyrail.test');

// DB Config (Default Laragon biasanya root, tanpa password)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'teyrail'); // Sesuaikan nama database jika sudah buat