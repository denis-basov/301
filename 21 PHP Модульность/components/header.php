<?php
require 'data.php';
$menu = require 'components/menu.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="logo">LOGO</div>
        <nav>
            <ul>
                <?php
                foreach ($menu as $link => $description) {
                    echo "<li><a href='$link'>$description</a></li>";
                }
                ?>
            </ul>
        </nav>
    </header>