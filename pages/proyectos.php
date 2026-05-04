<?php
/* =========================================
   pages/proyectos.php
   ========================================= */

$page_title = 'Proyectos';
require_once __DIR__ . '/../includes/header.php';

$urls = [
    ['label' => 'Tu proyecto',  'val' => 'localhost/miproyecto'],
    ['label' => 'phpMyAdmin',   'val' => 'localhost/phpmyadmin'],
    ['label' => 'Panel XAMPP',  'val' => 'localhost/xampp'],
    ['label' => 'Puerto alt.',  'val' => 'localhost:8080'],
];
?>

<section class="section">
  <div class="section-header">
    <div class="section-num">02</div>
    <h2 class="section-title">Crear un proyecto PHP</h2>
  </div>

  <!-- Carpeta raíz -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-green">htdocs</span>
      <h3>Carpeta raíz de proyectos</h3>
    </div>
    <p>Todos tus proyectos van dentro de <code>/opt/lampp/htdocs/</code></p>
    <pre><span class="cm"># Crear carpeta del proyecto</span>
<span class="kw">sudo</span> mkdir /opt/lampp/htdocs/miproyecto

<span class="cm"># Dar permisos de escritura a tu usuario</span>
<span class="kw">sudo</span> chown -R $USER:$USER /opt/lampp/htdocs/miproyecto</pre>
    <div class="tip">
      💡 El segundo comando evita tener que usar <code>sudo</code> cada vez que edites archivos.
    </div>
  </div>

  <!-- Primer archivo -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-blue">index.php</span>
      <h3>Primer archivo PHP</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
  <span class="fn">echo</span> <span class="str">"Hola desde XAMPP en Pop!_OS"</span>;
<span class="kw">?&gt;</span></pre>
    <p style="margin-top:8px;">Guárdalo en <code>/opt/lampp/htdocs/miproyecto/index.php</code></p>
  </div>

  <!-- URLs -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-amber">URLs</span>
      <h3>Acceder desde el navegador</h3>
    </div>
    <div class="g2" style="margin-top:10px;">
      <?php foreach ($urls as $u): ?>
      <div class="url-card">
        <div class="url-label"><?= $u['label'] ?></div>
        <div class="url-val"><?= $u['val'] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Estructura recomendada -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-orange">estructura</span>
      <h3>Estructura de carpetas recomendada</h3>
    </div>
    <pre>miproyecto/
├── index.php
├── pages/
│   └── dashboard.php
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── db.php
└── assets/
    ├── css/
    │   └── style.css
    └── js/
        └── main.js</pre>
  </div>

</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
