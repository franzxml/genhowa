<?php
/**
 * View: Home Index
 * * Halaman utama Triverse.
 * * Update: Implementasi gambar hero baru dan layout 3 kolom.
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
                <img src="https://i.imgur.com/dvdXOmD.png" class="game-logo" alt="Genshin Impact">
                <h3>Genshin Impact</h3>
                <span>Tracking Artefak & Pity</span>
            </a>

            <a href="<?= BASEURL; ?>/starrail" class="game-card">
                <img src="https://i.imgur.com/MqeTVB0.png" class="game-logo" alt="Honkai: Star Rail">
                <h3>Honkai: Star Rail</h3>
                <span>Tracking Relic & Warps</span>
            </a>

            <a href="<?= BASEURL; ?>/wuwa" class="game-card">
                <img src="https://upload.wikimedia.org/wikipedia/id/thumb/5/5d/Wuthering_Waves_logo.svg/1024px-Wuthering_Waves_logo.svg.png?20240527141643" class="game-logo" alt="Wuthering Waves">
                <h3>Wuthering Waves</h3>
                <span>Tracking Echoes & Convenes</span>
            </a>

        </div>
    </div>
</div>