<?php
/**
 * View: Home Index (Anti-Gagal)
 * * Update: Inline SVG Robot, Direct SVG Logos
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
                <svg class="robot-svg" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <filter id="shadow" x="-20%" y="-20%" width="140%" height="140%">
                            <feGaussianBlur in="SourceAlpha" stdDeviation="5"/>
                            <feOffset dx="0" dy="10" result="offsetblur"/>
                            <feComponentTransfer>
                                <feFuncA type="linear" slope="0.2"/>
                            </feComponentTransfer>
                            <feMerge>
                                <feMergeNode in="offsetblur"/>
                                <feMergeNode in="SourceGraphic"/>
                            </feMerge>
                        </filter>
                    </defs>
                    <g filter="url(#shadow)">
                        <rect x="150" y="100" width="200" height="160" rx="40" ry="40" fill="#f0f0f0" stroke="#333" stroke-width="8"/>
                        <rect x="175" y="130" width="150" height="100" rx="20" ry="20" fill="#333"/>
                        <circle cx="215" cy="180" r="15" fill="#4dabf7"/>
                        <circle cx="285" cy="180" r="15" fill="#4dabf7"/>
                        <line x1="250" y1="100" x2="250" y2="60" stroke="#333" stroke-width="8"/>
                        <circle cx="250" cy="50" r="15" fill="#ff6b6b" stroke="#333" stroke-width="5"/>
                        <path d="M180 280 H320 A20 20 0 0 1 340 300 V400 A40 40 0 0 1 300 440 H200 A40 40 0 0 1 160 400 V300 A20 20 0 0 1 180 280 Z" fill="#f0f0f0" stroke="#333" stroke-width="8"/>
                        <circle cx="250" cy="350" r="30" fill="#fff" stroke="#333" stroke-width="5"/>
                        <circle cx="250" cy="350" r="10" fill="#20c997"/>
                        <path d="M160 320 C120 320 120 380 160 380" fill="none" stroke="#333" stroke-width="8" stroke-linecap="round"/>
                        <path d="M340 320 C380 320 380 300 380 260" fill="none" stroke="#333" stroke-width="8" stroke-linecap="round"/>
                    </g>
                </svg>
            </div>

        </div>
    </div>
</div>

<div class="game-section">
    <div class="container">
        <div class="game-grid">
            
            <a href="<?= BASEURL; ?>/genshin" class="game-card">
                <img src="https://upload.wikimedia.org/wikipedia/en/5/5d/Genshin_Impact_logo.svg" class="game-logo" alt="Genshin Impact">
                <h3>Genshin Impact</h3>
                <span>Tracking Artefak & Pity</span>
            </a>

            <a href="<?= BASEURL; ?>/starrail" class="game-card">
                <img src="https://upload.wikimedia.org/wikipedia/en/c/c9/Honkai_Star_Rail_logo.svg" class="game-logo" alt="Honkai: Star Rail">
                <h3>Honkai: Star Rail</h3>
                <span>Tracking Relic & Warps</span>
            </a>

            <a href="<?= BASEURL; ?>/wuwa" class="game-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Wuthering_Waves_logo.svg" class="game-logo" alt="Wuthering Waves">
                <h3>Wuthering Waves</h3>
                <span>Tracking Echo & Convenes</span>
            </a>

        </div>
    </div>
</div>