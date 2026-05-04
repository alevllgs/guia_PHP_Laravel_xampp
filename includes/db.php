<?php
/* =========================================
   includes/db.php
   Conexión a MariaDB/MySQL de XAMPP
   ========================================= */

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', '');  // dejar vacío para solo testear conexión

/**
 * Retorna el estado de la conexión a MariaDB.
 * @return array ['status' => string, 'color' => string, 'connected' => bool]
 */
function getDbStatus(): array {
    $conn = @new mysqli(DB_HOST, DB_USER, DB_PASS);

    if ($conn->connect_error) {
        return [
            'status'    => 'desconectado',
            'color'     => '#D85A30',
            'connected' => false,
        ];
    }

    $conn->close();

    return [
        'status'    => 'conectado',
        'color'     => '#1D9E75',
        'connected' => true,
    ];
}
