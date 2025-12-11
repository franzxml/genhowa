<?php
/**
 * View: Home Index
 * * Halaman utama Triverse.
 * * Update: Deskripsi card kini menggunakan nama universe (Lore).
 */
?>

<div class="hero">
    <div class="container">
        <div class="hero-wrapper">
            
            <div class="hero-content">
                <h1 class="hero-title">
                    Jelajahi Tiga<br>
                    Dimensi Berbeda.
                </h1>
                
                <p class="hero-subtitle">
                    Tracking progress Genshin Impact, Honkai: Star Rail, dan Wuthering Waves 
                    dalam satu dashboard yang terintegrasi.
                </p>
            </div>

            <div class="hero-image">
                <img src="https://i.imgur.com/Bgl9A38.jpeg" alt="Triverse Modern Dashboard Graphic">
            </div>

        </div>
    </div>
</div>

<div class="game-section">
    <div class="container">
        <div class="game-grid">
            
            <a href="<?= BASEURL; ?>/genshin" class="game-card">
                <div class="card-logo-wrapper">
                    <img src="https://i.imgur.com/dvdXOmD.png" class="game-logo logo-genshin" alt="Genshin Impact">
                </div>
                
                <div class="card-text">
                    <h3>Genshin Impact</h3>
                    <span>Dunia Fantasi Teyvat</span>
                </div>
            </a>

            <a href="<?= BASEURL; ?>/starrail" class="game-card">
                <div class="card-logo-wrapper">
                    <img src="https://i.imgur.com/MqeTVB0.png" class="game-logo logo-hsr" alt="Honkai: Star Rail">
                </div>

                <div class="card-text">
                    <h3>Honkai: Star Rail</h3>
                    <span>Galaksi & Lautan Bintang</span>
                </div>
            </a>

            <a href="<?= BASEURL; ?>/wuwa" class="game-card">
                <div class="card-logo-wrapper">
                    <img src="https://upload.wikimedia.org/wikipedia/id/thumb/5/5d/Wuthering_Waves_logo.svg/1024px-Wuthering_Waves_logo.svg.png?20240527141643" class="game-logo logo-wuwa" alt="Wuthering Waves">
                </div>

                <div class="card-text">
                    <h3>Wuthering Waves</h3>
                    <span>Dunia Baru Solaris-3</span>
                </div>
            </a>

        </div>
    </div>
</div>