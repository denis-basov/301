<?php

var_dump($_POST);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Show a Date Control</h1>

    <form method="POST">
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday">
        <input type="submit">
    </form>
</body>
</html>
