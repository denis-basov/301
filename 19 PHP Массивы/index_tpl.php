<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="user">
        <img src="<?= $user['avatar'] ?>" alt="<?= $user['firstName'] ?> <?= $user['lastName'] ?>">
        <h2><?= $user['firstName'] ?> <?= $user['lastName'] ?></h2>
        <p>Возраст: <?= $user['age'] ?></p>
    </div>

    <div class="student">
        <h2><?= $student['firstName'] ?> <?= $student['lastName'] ?></h2>
        <p>Возраст: <?= $student['age'] ?></p>
        <p>Телефоны: <?= implode(', ', $student['phones']) ?></p>
        <!-- <p>Телефон: <?= $student['phones'][0] ?></p> -->
        <h3>Адрес: </h3>
        <p>Город: <?= $student['address']['city'] ?></p>
        <p>Улица: <?= $student['address']['street'] ?></p>
        <p>Дом: <?= $student['address']['houseNumber'] ?></p>
    </div>

    <section class="users">
        <?php foreach ($users as $user) : ?>
            <div class="user">
                <h2>Имя: <?= $user['fName'] ?> Фамилия: <?= $user['lName'] ?></h2>
                <p>Хобби: <?= implode(', ', $user['hobbies']); ?></p>
                <?php if (false) : ?>
                    <h4>if</h4>
                <?php else : ?>
                    <h4>else</h4>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </section>

    <p><?= date('Y') ?></p>
</body>

</html>