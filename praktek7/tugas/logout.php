<?php
// mengaktifkan session
session_start();
$_SESSION['username'] = '';
unset($_SESSION['username']);
session_unset();
// menghapus semua session
session_destroy();

// mengalihkan halaman sambil mengirim pesan logout
header("location: index.php");
?>
