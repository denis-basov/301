<?php
if(isset($_COOKIE['firstName'])){
    echo "<h2>Привет, $_COOKIE[firstName] $_COOKIE[lastName]</h2>";
    echo "<a href='cabinet.php'>ЛК</a>";
}