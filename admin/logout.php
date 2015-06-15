<?php
session_start();// Aktifkan session
session_destroy();// Hapus file session
header("Location: index.php"); // Kembali ke index.php
?>
