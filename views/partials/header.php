<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../public/main.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
<nav>
    <div class="nav">
        <div class="brand">TestPage</div>
        <div class="menu">
            <ul>
                <li><a href="/" class="<?= ($_SERVER['REQUEST_URI'] == '/') ? 'active' : '' ?>">Home</a></li>
                <li><a href="/about" class="<?= ($_SERVER['REQUEST_URI'] == '/about') ? 'active' : '' ?>">About</a></li>
                <li><a href="/contact" class="<?= ($_SERVER['REQUEST_URI'] == '/contact') ? 'active' : '' ?>">Contact</a></li>
                <li><a href="../../register.php" class="<?= ($_SERVER['REQUEST_URI'] == '/register.php') ? 'active' : '' ?>">Register</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<main>
