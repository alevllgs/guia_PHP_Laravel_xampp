/* =========================================
   XAMPP Guide — main.js
   ========================================= */

/**
 * Marca el nav-item activo según la URL actual.
 */
function setActiveNav() {
    const currentPage = window.location.pathname.split('/').pop();
    document.querySelectorAll('.nav-item').forEach(function(link) {
        const href = link.getAttribute('href');
        if (href === currentPage || (currentPage === '' && href === 'index.php')) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

/**
 * Permite copiar bloques de código al hacer clic.
 */
function initCopyButtons() {
    document.querySelectorAll('pre').forEach(function(block) {
        const btn = document.createElement('button');
        btn.textContent = 'Copiar';
        btn.className = 'copy-btn';
        btn.style.cssText = [
            'position:absolute', 'top:8px', 'right:8px',
            'background:rgba(255,255,255,0.07)', 'border:1px solid rgba(255,255,255,0.12)',
            'color:#888', 'font-size:11px', 'padding:2px 8px',
            'border-radius:4px', 'cursor:pointer', 'font-family:inherit',
            'transition:all 0.15s'
        ].join(';');

        block.style.position = 'relative';
        block.appendChild(btn);

        btn.addEventListener('click', function() {
            const text = block.innerText.replace('Copiar', '').replace('Copiado ✓', '').trim();
            navigator.clipboard.writeText(text).then(function() {
                btn.textContent = 'Copiado ✓';
                btn.style.color = '#1D9E75';
                setTimeout(function() {
                    btn.textContent = 'Copiar';
                    btn.style.color = '#888';
                }, 2000);
            });
        });
    });
}

/**
 * Actualiza la hora en el stat card cada segundo si existe.
 */
function initClock() {
    const clockEl = document.getElementById('live-clock');
    if (!clockEl) return;

    function tick() {
        const now = new Date();
        const h = String(now.getHours()).padStart(2, '0');
        const m = String(now.getMinutes()).padStart(2, '0');
        const s = String(now.getSeconds()).padStart(2, '0');
        clockEl.textContent = h + ':' + m + ':' + s;
    }
    tick();
    setInterval(tick, 1000);
}

/* --- INIT --- */
document.addEventListener('DOMContentLoaded', function() {
    setActiveNav();
    initCopyButtons();
    initClock();
});
