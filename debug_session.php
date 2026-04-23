<?php
session_start();
require_once __DIR__ . '/DBfiles/db_config.php';

echo "Session Variables:<br>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "<br>Query Parameters:<br>";
echo "<pre>";
print_r($_GET);
echo "</pre>";

$conn = getDbConnection(false);
if ($conn) {
    echo "<br>Organizations in Database:<br>";
    $result = $conn->query("SELECT org_id, org_name, org_owner FROM organization LIMIT 5");
    if ($result) {
        echo "<pre>";
        while ($row = $result->fetch_assoc()) {
            print_r($row);
        }
        echo "</pre>";
    }
    $conn->close();
}
?>
