<?php
    require 'connect.php';
    require 'function.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-Store</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Fonts...... -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
    <!-- Google icons  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav class="nav-bar">
        <div class="nav1">
            <a href="">Browse Categories</a>
            <input type="text" id="search_book" placeholder="Search Book">
        </div>
        <h3>readbooks</h3>
        <div class="icon-about">
            <i class="material-icons"><span class="material-icons-outlined">account_circle</span></i>
            <a href="admin/index.php">Admin</a>
        </div>
    </nav>
    <main>
    <?php showBook(); ?>
    </main>
</body>
</html>