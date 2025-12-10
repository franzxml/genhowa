/**
 * Script Utama Genhowa
 * Menangani interaksi dasar pada antarmuka.
 */

document.addEventListener('DOMContentLoaded', () => {
    console.log('Genhowa App Ready!');

    const ctaButton = document.getElementById('ctaButton');

    if (ctaButton) {
        ctaButton.addEventListener('click', () => {
            alert('Terima kasih telah memulai perjalanan dengan Genhowa!');
        });
    }
});