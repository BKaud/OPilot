<script>
    // Highlight current page in sidebar based on URL
    document.addEventListener('DOMContentLoaded', function() {
        var currentPath = window.location.pathname.replace(/\\/g, '/');
        document.querySelectorAll('.nav-link').forEach(function(link) {
            var href = link.getAttribute('href');
            if (!href || href === '#') return;
            // Normalize relative paths
            var linkPath = document.createElement('a');
            linkPath.href = href;
            var linkFullPath = linkPath.pathname.replace(/\\/g, '/');
            if (currentPath.endsWith(linkFullPath)) {
                link.classList.add('active');
            }
        });

        // Sidebar expand/collapse for ride zones
        var zonesToggle = document.getElementById('zones-toggle');
        if (zonesToggle) {
            zonesToggle.addEventListener('click', function(e) {
                e.preventDefault();
                var zonesSub = document.getElementById('zones-sub');
                if (zonesSub) zonesSub.classList.toggle('expanded');
            });
        }
        document.querySelectorAll('.zone-item').forEach(function(item) {
            var subNavLink = item.querySelector('.sub-nav-link');
            var zoneSubNav = item.querySelector('.zone-sub-nav');
            if (subNavLink && zoneSubNav) {
                subNavLink.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    zoneSubNav.classList.toggle('expanded');
                });
            }
        });
    });
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>OPilot – Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
<?php
// home.php (top of file)
require_once __DIR__ . '/../bootstrap.php';            // ../ from home/ -> OPilot/bootstrap.php
require_once __DIR__ . '/../partials/sidebar.php';     // ../partials/sidebar.php
?>
</body>

</html>