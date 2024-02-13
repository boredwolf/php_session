<?php
include('inc/data/products.php');
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($catalog[$id])) {
        $_SESSION['cookies'][] = $catalog[$id];
    }
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;

