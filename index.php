<?php
/* =========================================
   index.php — Página principal
   ========================================= */

require_once __DIR__ . '/includes/db.php';

$page_title = 'Inicio';
$db         = getDbStatus();
$os         = php_uname('s') . ' ' . php_uname('r');

require_once __DIR__ . '/includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="hero-tag">Guía de desarrollo local</div>
  <h1>XAMPP + PHP<br><span>en Pop!_OS</span></h1>
  <p>Todo lo que necesitas para desarrollar aplicaciones PHP localmente con Apache y MariaDB.</p>
</section>

<!-- STATS -->
<div class="stats">
  <div class="stat">
    <div class="stat-label">PHP Version</div>
    <div class="stat-val"><?= phpversion() ?></div>
  </div>
  <div class="stat">
    <div class="stat-label">Sistema</div>
    <div class="stat-val" style="font-size:12px;"><?= htmlspecialchars($os) ?></div>
  </div>
  <div class="stat">
    <div class="stat-label">Hora actual</div>
    <div class="stat-val" id="live-clock"><?= date('H:i:s') ?></div>
  </div>
  <div class="stat">
    <div class="stat-label">MariaDB</div>
    <div class="stat-val" style="color:<?= $db['color'] ?>;"><?= $db['status'] ?></div>
  </div>
</div>

<!-- ACCESOS RÁPIDOS -->
<div class="section">
  <div class="section-header">
    <div class="section-num">→</div>
    <h2 class="section-title">Accesos rápidos</h2>
  </div>
  <div class="g2">
    <?php
    $links = [
      ['label' => 'Servicios',        'href' => 'pages/servicios.php',         'badge' => '01', 'c' => 'b-green'],
      ['label' => 'Proyectos',        'href' => 'pages/proyectos.php',         'badge' => '02', 'c' => 'b-blue'],
      ['label' => 'Base de datos',    'href' => 'pages/base-datos.php',        'badge' => '03', 'c' => 'b-orange'],
      ['label' => 'Errores comunes',  'href' => 'pages/errores.php',           'badge' => '04', 'c' => 'b-amber'],
      ['label' => 'Extras',           'href' => 'pages/extras.php',            'badge' => '05', 'c' => 'b-green'],
      ['label' => 'PHP Básico',       'href' => 'pages/php-basico.php',        'badge' => 'P1', 'c' => 'b-blue'],
      ['label' => 'PHP Avanzado',     'href' => 'pages/php-avanzado.php',      'badge' => 'P2', 'c' => 'b-blue'],
      ['label' => 'Laravel Intro',    'href' => 'pages/laravel-intro.php',     'badge' => 'L1', 'c' => 'b-orange'],
      ['label' => 'Laravel Rutas',    'href' => 'pages/laravel-rutas.php',     'badge' => 'L2', 'c' => 'b-orange'],
      ['label' => 'Eloquent ORM',     'href' => 'pages/laravel-eloquent.php',  'badge' => 'L3', 'c' => 'b-orange'],
      ['label' => 'Blade Templates',  'href' => 'pages/laravel-blade.php',     'badge' => 'L4', 'c' => 'b-orange'],
      ['label' => 'phpMyAdmin',       'href' => '/phpmyadmin',                 'badge' => '↗',  'c' => 'b-amber'],
    ];
    foreach ($links as $l): ?>
    <a href="<?= $l['href'] ?>" class="card" style="display:block;text-decoration:none;transition:border-color 0.15s;" onmouseover="this.style.borderColor='rgba(255,255,255,0.2)'" onmouseout="this.style.borderColor=''">
      <div class="card-head">
        <span class="badge <?= $l['c'] ?>"><?= $l['badge'] ?></span>
        <h3><?= $l['label'] ?></h3>
      </div>
    </a>
    <?php endforeach; ?>
  </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
