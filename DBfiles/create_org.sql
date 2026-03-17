-- Create a sample organization (adjust org_id/org_name as needed)
USE `oppilot`;

INSERT INTO `organization` (`org_id`, `org_name`, `org_owner`)
VALUES (1, 'Demo Organization', NULL)
ON DUPLICATE KEY UPDATE org_name = VALUES(org_name);
