<?php
require_once __DIR__ . '/db_config.php';

// Edit these values as needed
$org_id = 1;
$org_name = 'Demo Organization';

try {
    $conn = getDbConnection();

    // Check for existing organization
    $check = $conn->prepare('SELECT org_id FROM organization WHERE org_id = ?');
    $check->bind_param('i', $org_id);
    $check->execute();
    $check->store_result();
    if ($check->num_rows > 0) {
        echo "Organization with ID {$org_id} already exists.\n";
        exit;
    }
    $check->close();

    $stmt = $conn->prepare('INSERT INTO organization (org_id, org_name, org_owner) VALUES (?, ?, NULL)');
    $stmt->bind_param('is', $org_id, $org_name);
    if ($stmt->execute()) {
        echo "Organization created: ID={$org_id}, name={$org_name}\n";
    } else {
        echo "Failed to create organization: " . $stmt->error . "\n";
    }
    $stmt->close();
    $conn->close();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
