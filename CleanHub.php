<?php
session_start();

// PROSES LOGIN
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $role  = $_POST['role']; // warga / petugas

    $_SESSION['userSession'] = [
        'email' => $email,
        'role' => $role,
        'isLoggedIn' => true
    ];

    header("Location: index.php");
    exit;
}

// PROSES LOGOUT
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}
?>