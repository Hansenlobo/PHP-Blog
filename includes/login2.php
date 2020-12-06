<?php
session_start();
include 'db.php';
include '../admin/includes/functions.php';
    login_user($username, $password);
?>
