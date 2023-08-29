<?php
    $firstName = 'Ivan';
    $lastName = 'Ivanov';
    $age = 22;
    $isHappy = true;
    $children = 3;
    $hobbies = ['Спать', 'Есть', 'Гулять'];
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
    <div class="user">
        <h2>Имя: <?php echo $firstName?> Фамилия: <?php echo $lastName?></h2>
        <h2>Имя: <?= $firstName?> Фамилия: <?= $lastName?></h2>
        <p>Возраст: <?= $age?> лет</p>
        <p>Счастлив?: <?= $isHappy ? 'да' : 'нет' ?></p>
        <p>Есть ли дети: <?= $children ?? 'нет'?></p>
        <p>Хобби: <?= implode(', ', $hobbies)?></p>
    </div>

    <form action="form.php" method="POST">
        <label>Имя:</label>
        <input type="text" name="firstName"><br>

        <label>Фамилия:</label>
        <input type="text" name="lastName"><br>

        <input type="submit" value="Отправить">
    </form>
</body>
</html>