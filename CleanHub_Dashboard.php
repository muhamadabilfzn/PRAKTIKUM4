<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['userSession'])) {
    $loggedIn = false;
} else {
    $loggedIn = true;
    $session = $_SESSION['userSession'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        .d-none { display: none; }
    </style>
</head>
<body>

<!-- HERO SECTION -->
<div id="hero" class="<?php echo $loggedIn ? 'd-none' : ''; ?>">
    <h1>Selamat Datang</h1>
    <p>Silakan login terlebih dahulu</p>
</div>

<!-- MAIN DASHBOARD -->
<div id="mainDashboard" class="<?php echo !$loggedIn ? 'd-none' : ''; ?>">
    <h2>Dashboard</h2>

    <?php if ($loggedIn): ?>
        
        <?php if ($session['role'] === 'petugas'): ?>
            <!-- Dashboard Petugas -->
            <div id="dashboardPetugas">
                <h3>Dashboard Petugas</h3>
                <p>Data tugas petugas tampil di sini</p>
            </div>
        <?php else: ?>
            <!-- Dashboard User -->
            <div id="dashboardUser">
                <h3>Dashboard User</h3>
                <p>Statistik user tampil di sini</p>
            </div>
        <?php endif; ?>

    <?php endif; ?>
</div>

</body>
</html>