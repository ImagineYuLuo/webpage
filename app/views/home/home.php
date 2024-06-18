<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../public/css/home.css" rel="stylesheet">
    <title>程式自學系統</title>
</head>
<body>

<header class="header">
    <div><a class="welcome">Hello <?php if (isset($data)) echo $data['username'] ?></a></div>
    <nav class="navbar">
        <a href="#">Home</a>
        <a href="#">Explore</a>
        <a href="#">Discuss</a>
        <a href="#">Contest</a>
        <a href="#">Logout</a>
    </nav>
</header>

<div class="explore-card">
    <div class="card-title"></div>
    <div class="card-content"></div>
</div>

<script src="../public/js/home.js"></script>
</body>
</html>

<?php
if (isset($data)) {
    echo "Username: " . $data['username'] . "<br />" . "Password: " . $data['password'];
}