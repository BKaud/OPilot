<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>OPilot – Permissions</title>
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../../assets/css/theme.css" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<nav class="navbar">
  <div class="navbar-logo"><div class="logo-icon"></div><span class="logo-name">O<span>P</span>ilot</span></div>
  <div class="navbar-login"><input type="text" placeholder="Username" /><input type="password" placeholder="Password" /><button class="login-btn">Login</button></div>
</nav>

<div class="main">
  <aside class="sidebar">
    <div class="nav-section">
      <div class="nav-upper">
        <div class="nav-item">
          <a href="#" class="nav-link" id="home-link">
            <div class="nav-icon">
              <!-- Home SVG -->
              <svg viewBox="0 0 24 24" fill="none" width="24" height="24" id="icon-home">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2796 3.71579C12.097 3.66261 11.903 3.66261 11.7203 3.71579C11.6678 3.7311 11.5754 3.7694 11.3789 3.91817C11.1723 4.07463 10.9193 4.29855 10.5251 4.64896L5.28544 9.3064C4.64309 9.87739 4.46099 10.0496 4.33439 10.24C4.21261 10.4232 4.12189 10.6252 4.06588 10.8379C4.00765 11.0591 3.99995 11.3095 3.99995 12.169V17.17C3.99995 18.041 4.00076 18.6331 4.03874 19.0905C4.07573 19.536 4.14275 19.7634 4.22513 19.9219C4.41488 20.2872 4.71272 20.5851 5.07801 20.7748C5.23658 20.8572 5.46397 20.9242 5.90941 20.9612C6.36681 20.9992 6.95893 21 7.82995 21H7.99995V18C7.99995 15.7909 9.79081 14 12 14C14.2091 14 16 15.7909 16 18V21H16.17C17.041 21 17.6331 20.9992 18.0905 20.9612C18.5359 20.9242 18.7633 20.8572 18.9219 20.7748C19.2872 20.5851 19.585 20.2872 19.7748 19.9219C19.8572 19.7634 19.9242 19.536 19.9612 19.0905C19.9991 18.6331 20 18.041 20 17.17V12.169C20 11.3095 19.9923 11.0591 19.934 10.8379C19.878 10.6252 19.7873 10.4232 19.6655 10.24C19.5389 10.0496 19.3568 9.87739 18.7145 9.3064L13.4748 4.64896C13.0806 4.29855 12.8276 4.07463 12.621 3.91817C12.4245 3.7694 12.3321 3.7311 12.2796 3.71579Z"/>
              </svg>
            </div>
            <span class="nav-text">Homepage</span>
          </a>
        </div>
        <div class="nav-item expandable" id="zones">
          <a href="#" class="nav-link" id="zones-toggle">
            <div class="nav-icon">
              <!-- Zones SVG -->
              <svg viewBox="0 0 24 24" fill="none" width="24" height="24" id="icon-zones">
                <path d="M3 8.70938C3 7.23584 3 6.49907 3.39264 6.06935C3.53204 5.91678 3.70147 5.79466 3.89029 5.71066C4.42213 5.47406 5.12109 5.70705 6.51901 6.17302C7.58626 6.52877 8.11989 6.70665 8.6591 6.68823C8.85714 6.68147 9.05401 6.65511 9.24685 6.60952C9.77191 6.48541 10.2399 6.1734 11.176 5.54937L12.5583 4.62778C13.7574 3.82843 14.3569 3.42876 15.0451 3.3366C15.7333 3.24444 16.4168 3.47229 17.7839 3.92799L18.9487 4.31624C19.9387 4.64625 20.4337 4.81126 20.7169 5.20409C21 5.59692 21 6.11871 21 7.16229V15.2907C21 16.7642 21 17.501 20.6074 17.9307C20.468 18.0833 20.2985 18.2054 20.1097 18.2894C19.5779 18.526 18.8789 18.293 17.481 17.827C16.4137 17.4713 15.8801 17.2934 15.3409 17.3118C15.1429 17.3186 14.946 17.3449 14.7532 17.3905C14.2281 17.5146 13.7601 17.8266 12.824 18.4507L11.4417 19.3722C10.2426 20.1716 9.64311 20.5713 8.95493 20.6634C8.26674 20.7556 7.58319 20.5277 6.21609 20.072L5.05132 19.6838C4.06129 19.3538 3.56627 19.1888 3.28314 18.7959C3 18.4031 3 17.8813 3 16.8377V8.70938Z" stroke-width="1.5"/>
                <path d="M9 6.63867V20.5" stroke-width="1.5"/>
                <path d="M15 3V17" stroke-width="1.5"/>
              </svg>
            </div>
            <span class="nav-text">Zones</span>
          </a>
          <div class="sub-nav" id="zones-sub">
            <div class="zone-item expandable" id="rides1-zone">
        </div>
        <div class="nav-item">
          <a href="../management-dashboard/management-dashboard.php" class="nav-link" id="manage-link">
            <div class="nav-icon">
              <!-- Manage SVG -->
              <svg viewBox="0 0 48 48" width="24" height="24" id="icon-manage">
                <path d="M40,47H8a2,2,0,0,1-2-2V3A2,2,0,0,1,8,1H40a2,2,0,0,1,2,2V45A2,2,0,0,1,40,47ZM10,43H38V5H10Z"/>
                <path d="M15,19a2,2,0,0,1-1.41-3.41l4-4a2,2,0,0,1,2.31-.37l2.83,1.42,5-4.16A2,2,0,0,1,30.2,8.4l4,3a2,2,0,1,1-2.4,3.2l-2.73-2.05-4.79,4a2,2,0,0,1-2.17.25L19.4,15.43l-3,3A2,2,0,0,1,15,19Z"/>
                <circle cx="15" cy="24" r="2"/>
                <circle cx="15" cy="31" r="2"/>
                <circle cx="15" cy="38" r="2"/>
                <path d="M33,26H22a2,2,0,0,1,0-4H33a2,2,0,0,1,0,4Z"/>
                <path d="M33,33H22a2,2,0,0,1,0-4H33a2,2,0,0,1,0,4Z"/>
                <path d="M33,40H22a2,2,0,0,1,0-4H33a2,2,0,0,1,0,4Z"/>
              </svg>
            </div>
            <span class="nav-text">Management</span>
          </a>
              <a href="#" class="sub-nav-link expandable">Rides 1</a>
              <div class="zone-sub-nav" id="rides1-sub">
                <a href="../../zone-manager/dashboard/dashboard.php" class="zone-sub-link">Dashboard</a>
                <a href="../../zone-manager/EditMode/editmode.php" class="zone-sub-link">Edit Mode</a>
                <a href="../../zone-manager/confignsettings/settings.php" class="zone-sub-link">Settings & Config</a>
              </div>
            </div>
            <div class="zone-item expandable" id="rides2-zone">
              <a href="#" class="sub-nav-link expandable">Rides 2</a>
              <div class="zone-sub-nav" id="rides2-sub">
                <a href="#" class="zone-sub-link">Dashboard</a>
                <a href="#" class="zone-sub-link">Edit Mode</a>
                <a href="#" class="zone-sub-link">Settings & Config</a>
              </div>
            </div>
          </div>
        </div>
        <div class="nav-item">
          <a href="../management-dashboard/management-dashboard.php" class="nav-link active">
            <div class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg></div>
            <span class="nav-text">Management</span>
          </a>
        </div>
      </div>
      <div class="nav-lower">
        <div class="nav-item">
          <a href="#" class="nav-link" id="acc-link">
            <div class="nav-icon">
              <!-- Account SVG -->
              <svg viewBox="0 0 20 20" width="24" height="24" id="icon-acc">
                <path d="M100.562548,2016.99998 L87.4381713,2016.99998 C86.7317804,2016.99998 86.2101535,2016.30298 86.4765813,2015.66198 C87.7127655,2012.69798 90.6169306,2010.99998 93.9998492,2010.99998 C97.3837885,2010.99998 100.287954,2012.69798 101.524138,2015.66198 C101.790566,2016.30298 101.268939,2016.99998 100.562548,2016.99998 M89.9166645,2004.99998 C89.9166645,2002.79398 91.7489936,2000.99998 93.9998492,2000.99998 C96.2517256,2000.99998 98.0830339,2002.79398 98.0830339,2004.99998 C98.0830339,2007.20598 96.2517256,2008.99998 93.9998492,2008.99998 C91.7489936,2008.99998 89.9166645,2007.20598 89.9166645,2004.99998 M103.955674,2016.63598 C103.213556,2013.27698 100.892265,2010.79798 97.837022,2009.67298 C99.4560048,2008.39598 100.400241,2006.33098 100.053171,2004.06998 C99.6509769,2001.44698 97.4235996,1999.34798 94.7348224,1999.04198 C91.0232075,1998.61898 87.8750721,2001.44898 87.8750721,2004.99998 C87.8750721,2006.88998 88.7692896,2008.57398 90.1636971,2009.67298 C87.1074334,2010.79798 84.7871636,2013.27698 84.044024,2016.63598 C83.7745338,2017.85698 84.7789973,2018.99998 86.0539717,2018.99998 L101.945727,2018.99998 C103.221722,2018.99998 104.226185,2017.85698 103.955674,2016.63598"/>
              </svg>
            </div>
            <span class="nav-text">Account Settings</span>
          </a>
        </div>
        <div class="nav-item">
          <a href="#" class="nav-link">
            <div class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
            <span class="nav-text">Changelog</span>
          </a>
        </div>
      </div>
    </div>
  </aside>

  <div class="content">
    <div class="page-header">
      <div>
        <h1>Permissions</h1>
        <div class="breadcrumb">Admin › Management › <span>Permissions</span></div>
      </div>
      <div class="header-controls">
        <span class="mode-badge">Live</span>
      </div>
    </div>

    <div class="dashboard-body" style="padding:18px;">
      <div class="zone-area">
        <div class="attraction-card" style="width:100%; min-width:auto;">
          <div class="card-thumb" style="height:84px; background:linear-gradient(135deg,#6fb4a3,#1a8f7a);">
            <svg viewBox="0 0 24 24" fill="none" stroke="#fff" style="width:44px;height:44px;"><path d="M12 2a4 4 0 014 4v2a4 4 0 01-8 0V6a4 4 0 014-4z"/><path d="M6 20v-2a6 6 0 0112 0v2"/></svg>
          </div>
          <div class="card-body">
            <div class="card-name">Permissions</div>
            <div class="card-meta"><span>Overview & management</span></div>
            <div style="margin-top:8px; color:var(--text-muted); font-size:13px;">
              This page will list individual permissions that can be granted to users or tiers. Add, edit, or remove permissions here.
            </div>

            <div style="margin-top:12px; display:flex; gap:8px;">
              <a class="btn btn-teal" href="management.html">Back</a>
              <a class="btn btn-gray" href="#">Create Permission</a>
            </div>
          </div>
        </div>
      </div>

      <div style="height:20px;"></div>
      <div style="color:var(--text-muted); font-size:13px;">
        (Placeholder) Replace with a table or form to manage permission records.
      </div>
    </div>
  </div>
</div>
<script>
// Sidebar expand/collapse for ride zones
document.addEventListener('DOMContentLoaded', function() {
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
        e.preventDefault(); e.stopPropagation();
        zoneSubNav.classList.toggle('expanded');
      });
    }
  });

  // Sidebar icon color logic
  document.querySelectorAll('.nav-link').forEach(function(link) {
    link.addEventListener('click', function(e) {
      document.querySelectorAll('.nav-link').forEach(function(n) {
        n.classList.remove('active');
      });
      link.classList.add('active');
    });
  });
});
</script>
</body>
</html>