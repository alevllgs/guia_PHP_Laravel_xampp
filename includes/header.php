<?php
$page_title = $page_title ?? 'Guía XAMPP';

$nav_sections = [
    'XAMPP' => [
        ['href' => '/guia_xampp/index.php',              'label' => 'Inicio'],
        ['href' => '/guia_xampp/pages/servicios.php',    'label' => 'Servicios'],
        ['href' => '/guia_xampp/pages/proyectos.php',    'label' => 'Proyectos'],
        ['href' => '/guia_xampp/pages/base-datos.php',   'label' => 'Base de datos'],
        ['href' => '/guia_xampp/pages/errores.php',      'label' => 'Errores comunes'],
        ['href' => '/guia_xampp/pages/extras.php',       'label' => 'Extras'],
    ],
    'PHP' => [
        ['href' => '/guia_xampp/pages/php-basico.php',     'label' => 'PHP básico'],
        ['href' => '/guia_xampp/pages/php-avanzado.php',   'label' => 'PHP avanzado'],
        ['href' => '/guia_xampp/pages/composer.php',        'label' => 'Composer'],
    ],
    'Laravel' => [
        ['href' => '/guia_xampp/pages/laravel-intro.php',    'label' => 'Introducción'],
        ['href' => '/guia_xampp/pages/laravel-rutas.php',    'label' => 'Rutas'],
        ['href' => '/guia_xampp/pages/laravel-eloquent.php', 'label' => 'Eloquent ORM'],
        ['href' => '/guia_xampp/pages/laravel-blade.php',    'label' => 'Blade templates'],
    ],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?> — XAMPP Guide</title>
  <script>(function(){try{var t=localStorage.getItem('theme');if(t==='light')document.documentElement.classList.add('light-mode')}catch(e){}})();</script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500&family=Syne:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/guia_xampp/assets/css/style.css">
</head>
<body>
<div class="layout">

  <aside class="sidebar">
    <div class="sidebar-logo">
      <div class="icon">⚡</div>
      <div>
        <div class="name">XAMPP Guide</div>
        <div class="sub">Pop!_OS / Windows + PHP</div>
      </div>
    </div>

    <div class="sidebar-prefs">
      <div class="pref-row">
        <span class="nav-label" style="margin:0">Tema</span>
        <button id="theme-toggle" class="theme-btn" onclick="toggleTheme()">☀️</button>
      </div>
    </div>

    <?php foreach ($nav_sections as $group => $links): ?>
      <span class="nav-label"><?= $group ?></span>
      <?php foreach ($links as $link): ?>
        <a href="<?= $link['href'] ?>" class="nav-item"><?= $link['label'] ?></a>
      <?php endforeach; ?>
    <?php endforeach; ?>
  </aside>

  <main class="main">