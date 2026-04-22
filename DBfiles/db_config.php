<?php
// DBfiles/db_config.php
// Single source of truth for DB connection values and connection helpers.

// Resolve project root from this file location.
if (!defined('APP_ROOT')) {
    define('APP_ROOT', dirname(__DIR__));
}

$dbConfigSource = defined('DB_HOST') ? 'predefined' : 'unset';

// Local developer override - lives outside the repo so Git can never track it.
// Each developer creates this file manually at this path on their machine.
$localConfig = 'C:/xampp/htdocs/db_local_config.php'; // Windows default - change to your path
// Mac/Linux alternative: '/etc/oppilot/db_local_config.php'
if (file_exists($localConfig)) {
    require_once $localConfig;
    if (defined('DB_HOST')) {
        $dbConfigSource = 'local_file';
    }
}

// Optional deploy-generated overrides (written by GitHub Actions workflow on server).
// Only load this when local constants are not already provided.
$appConfig = APP_ROOT . '/DBfiles/app_config.php';
if (!defined('DB_HOST') && file_exists($appConfig)) {
    require_once $appConfig;
    if (defined('DB_HOST')) {
        $dbConfigSource = 'app_config';
    }
}

// Fallback defaults for local development.
if (!defined('BASE_PATH')) define('BASE_PATH', '');
if (!defined('DB_HOST')) define('DB_HOST', '3.142.11.187');
if (!defined('DB_PORT')) define('DB_PORT', 3306);
if (!defined('DB_USER')) define('DB_USER', 'root');
if (!defined('DB_PASS')) define('DB_PASS', 'twlbiVY=cUn4');
if (!defined('DB_NAME')) define('DB_NAME', 'oppilot');

if ($dbConfigSource === 'unset') {
    $dbConfigSource = 'fallback_defaults';
}
if (!defined('DB_CONFIG_SOURCE')) define('DB_CONFIG_SOURCE', $dbConfigSource);

/**
 * Create a mysqli connection using shared config constants.
 */
function getDbConnection($exitOnError = true) {
    $conn = null;
    $exceptionMessage = '';
    $hostPort = DB_HOST . ':' . (int)DB_PORT;

    try {
        $conn = mysqli_init();
        if ($conn) {
            $conn->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5);
            $conn->real_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, (int)DB_PORT);
        }
    } catch (Throwable $e) {
        $exceptionMessage = $e->getMessage();
    }

    if (!$conn || $conn->connect_error) {
        $msg = 'Database connection failed (' . $hostPort . ')';
        if ($exceptionMessage !== '') {
            $msg .= ': ' . $exceptionMessage;
        } elseif ($conn && $conn->connect_error) {
            $msg .= ': ' . $conn->connect_error;
        }
        if ($exitOnError) {
            http_response_code(503);
            die(json_encode([
                'success' => false,
                'error' => $msg
            ]));
        }
        return null;
    }

    $conn->set_charset('utf8mb4');
    return $conn;
}

// Test connection function (optional - for debugging)
function testConnection() {
    try {
        $conn = getDbConnection();
        return [
            'success' => true,
            'message' => 'Database connection successful!',
            'database' => DB_NAME,
            'port' => DB_PORT
        ];
    } catch (Exception $e) {
        return [
            'success' => false,
            'error' => $e->getMessage()
        ];
    }
}
?>