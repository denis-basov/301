<?php

require 'DBConnect.php';

$pdo = DBConnect::getConnection();
var_dump($pdo);

