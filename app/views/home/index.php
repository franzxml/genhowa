<?php
/**
 * View: Home Index (Final Version)
 * * Update: No CTA, Game Cards, Clean Text, Fluent Robot
 */
?>

<div class="hero">
    <div class="container">
        <div class="hero-wrapper">
            
            <div class="hero-content">
                <h1 class="hero-title">
                    Kelola Progress<br>
                    Gacha-mu.
                </h1>
                
                <p class="hero-subtitle">
                    Pantau Artefak, Relic, & Echo. Hitung pity Primogems, Jades, & Astrites. Fokus gacha, biarkan Genhowa mencatat sisanya.
                </p>
                
                </div>

            <div class="hero-image">
                <img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Animated-Fluent-Emojis/master/Emojis/Objects/Robot.png" alt="Genhowa Robot Mascot">
            </div>

        </div>
    </div>
</div>

<div class="game-section">
    <div class="container">
        <div class="game-grid">
            
            <a href="<?= BASEURL; ?>/genshin" class="game-card">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/5/5d/Genshin_Impact_logo.svg/320px-Genshin_Impact_logo.svg.png" alt="Genshin Impact">
                <h3>Genshin Impact</h3>
                <span>Tracking Artefak & Pity</span>
            </a>

            <a href="<?= BASEURL; ?>/starrail" class="game-card">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c9/Honkai_Star_Rail_logo.svg/320px-Honkai_Star_Rail_logo.svg.png" alt="Honkai: Star Rail">
                <h3>Honkai: Star Rail</h3>
                <span>Tracking Relic & Warps</span>
            </a>

            <a href="<?= BASEURL; ?>/wuwa" class="game-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Wuthering_Waves_logo.svg/320px-Wuthering_Waves_logo.svg.png" alt="Wuthering Waves">
                <h3>Wuthering Waves</h3>
                <span>Tracking Echo & Convenes</span>
            </a>

        </div>
    </div>
</div>