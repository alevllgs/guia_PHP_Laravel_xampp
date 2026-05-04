<?php
/* =========================================
   pages/errores.php
   ========================================= */

$page_title = 'Errores comunes';
require_once __DIR__ . '/../includes/header.php';

$errores = [
    [
        'error'   => 'Puerto 80 ocupado',
        'causa'   => 'Otro proceso usa Apache',
        'fix'     => 'sudo fuser -k 80/tcp',
        'badge'   => 'b-orange',
    ],
    [
        'error'   => 'Puerto 3306 ocupado',
        'causa'   => 'MySQL del sistema activo',
        'fix'     => 'sudo systemctl stop mysql',
        'badge'   => 'b-orange',
    ],
    [
        'error'   => 'Permiso denegado en htdocs',
        'causa'   => 'Usuario sin permisos de escritura',
        'fix'     => 'sudo chown -R $USER:$USER /opt/lampp/htdocs/',
        'badge'   => 'b-amber',
    ],
    [
        'error'   => '500 Internal Server Error',
        'causa'   => 'Error en PHP — ver logs',
        'fix'     => 'tail -f /opt/lampp/logs/error_log',
        'badge'   => 'b-orange',
    ],
    [
        'error'   => 'Página en blanco',
        'causa'   => 'display_errors desactivado',
        'fix'     => 'ini_set("display_errors", 1)',
        'badge'   => 'b-amber',
    ],
    [
        'error'   => 'Class not found',
        'causa'   => 'Falta autoload o require',
        'fix'     => 'require_once "includes/MiClase.php"',
        'badge'   => 'b-blue',
    ],
];
?>

<section class="section">
  <div class="section-header">
    <div class="section-num">04</div>
    <h2 class="section-title">Errores frecuentes</h2>
  </div>

  <div class="card" style="padding:0;overflow:hidden;">
    <table class="data-table">
      <thead>
        <tr>
          <th>Error</th>
          <th>Causa</th>
          <th>Solución</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($errores as $e): ?>
        <tr>
          <td><span class="badge <?= $e['badge'] ?>"><?= htmlspecialchars($e['error']) ?></span></td>
          <td style="color:var(--muted);"><?= htmlspecialchars($e['causa']) ?></td>
          <td><code><?= htmlspecialchars($e['fix']) ?></code></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <div class="tip">
    💡 Siempre activa los errores en desarrollo agregando esto al inicio de tu archivo PHP:<br>
    <code>ini_set('display_errors', 1); error_reporting(E_ALL);</code>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
