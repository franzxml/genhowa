<?php
/**
 * View: Home Index (Teyrail Final Assets)
 * * Update: Real Images from Imgur
 */
?>

<div class="hero">
    <div class="container">
        <div class="hero-wrapper">
            
            <div class="hero-content">
                <h1 class="hero-title">
                    Kelola Progress<br>
                    Teyvat & Astral.
                </h1>
                
                <p class="hero-subtitle">
                    Tracking progress Genshin Impact dan Honkai: Star Rail dalam satu tempat. 
                    Simpel, fokus, dan estetik.
                </p>
            </div>

            <div class="hero-image">
                <img src="https://i.imgur.com/k0spfIR.jpeg" alt="Teyrail Dashboard Illustration">
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

        </div>
    </div>
</div>