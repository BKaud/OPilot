    <?php
// Local AWS override - DO NOT COMMIT (gitignored)
if (!defined('DB_HOST')) define('DB_HOST', 'your-rds-endpoint.rds.amazonaws.com');
if (!defined('DB_PORT')) define('DB_PORT', 3306);
if (!defined('DB_USER')) define('DB_USER', 'your_aws_db_username');
if (!defined('DB_PASS')) define('DB_PASS', 'your_aws_db_password');
if (!defined('DB_NAME')) define('DB_NAME', 'oppilot');
?>