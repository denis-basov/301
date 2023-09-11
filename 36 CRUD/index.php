<?php
/**
 * CRUD
 *
 * 1. CREATE - создание
 * 2. READ  - чтение
 * 3. UPDATE - обновление
 * 4. DELETE - удаление
 */
//print_r($_GET);
//print_r($_POST);
//print_r($_FILES);

require 'DBConnect.php';
$pdo = DBConnect::getConnection();

/**
 * создаем таблицу для хранения данных
 */
$query = "CREATE TABLE IF NOT EXISTS users(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    login VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    avatar TEXT NOT NULL 
);";
$statement = $pdo->query($query);
// если при запросе ошибка, прерываем работу скрипта
if(!$statement)die('Упс, что-то пошло не так');



/**
 * получаем список сотрудников из БД
 */
$query = "SELECT id, firstName, lastName, login, email, password, avatar
            FROM users
            ORDER BY firstName DESC;";
$statement = $pdo->query($query);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Работа с сотрудниками</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Работа с сотрудниками</h2>

    <h3>Список сотрудников</h3>
    <a href="?add">Добавить нового сотрудника</a>

    <?php

    /**
     * если нажата ссылка на добавление сотрудника
     * <a href="?add">Добавить нового сотрудника</a>
     */
    if(isset($_GET['add'])){
        // показываем форму для добавления
        echo <<<HTML
        <form method="POST" class="add-user" enctype="multipart/form-data">
            <div>
                <label>Имя: </label>
                <input type="text" name="firstName">            
            </div>
            <div>
                <label>Фамилия:</label>
                <input type="text" name="lastName">            
            </div> 
            <div>
                <label>Логин:</label>
                <input type="text" name="login">            
            </div> 
            <div>
                <label>Электронная почта:</label>
                <input type="email" name="email">            
            </div> 
            <div>
                <label>Пароль:</label>
                <input type="password" name="password">            
            </div> 
            <div>
                <label>Аватар:</label>
                <input type="file" name="avatar">            
            </div>  
            <div>
                <input type="submit" name="action" value="Создать">            
            </div>                                                        
        </form>
HTML;
    }

    /**
     * если отправлена форма для записи нового сотрудника
     * <input type="submit" name="action" value="Создать">
     */
    if(isset($_POST['action']) && $_POST['action'] === 'Создать'){

        // получаем данные о картинке
        $avatar = $_FILES['avatar'];

        // проверяем на пустые поля
        if( !empty($_POST['firstName']) &&
            !empty($_POST['lastName']) &&
            !empty($_POST['login']) &&
            !empty($_POST['email']) &&
            !empty($_POST['password']) &&
            $avatar['size']
        ){ // если НЕ пусто, продолжаем
//            print_r($avatar);
//            print_r($_POST);

            // экранируем введенные данные
            $firstName = htmlspecialchars(trim($_POST['firstName']));
            $lastName = htmlspecialchars(trim($_POST['lastName']));
            $login = htmlspecialchars(trim($_POST['login']));
            $email = htmlspecialchars(trim($_POST['email']));
            // доплнительно хешируем пароль
            $password = password_hash(htmlspecialchars(trim($_POST['password'])), PASSWORD_DEFAULT);

            // формируем путь к картинке? куда будем загружать аватар
            $avatarPath = 'images/'.$avatar['name'];
            // перемещаем картинку в нужную папку
            move_uploaded_file($avatar['tmp_name'], $avatarPath);

            // записываем данные в БД
            // insert
        }else{
            echo '<h3>Заполните все поля</h3>';
        }


    }






    ?>

    <!-- отображаем сотрудников -->
    <div class="users">
        <?php while($user = $statement->fetch()):?>
            <div class="user">
                <img src="<?=$user['avatar']?>" alt="<?=$user['firstName'].' '.$user['lastName']?>">
                <p>ID: <span><?=$user['id']?></span></p>
                <p>Имя: <span><?=$user['firstName']?></span></p>
                <p>Фамилия: <span><?=$user['lastName']?></span></p>
                <p>Логин: <span><?=$user['login']?></span></p>
                <p>Электронная почта: <span><?=$user['email']?></span></p>

                <!-- форма для кнопок удаления и редактирования пользователя -->
                <form method="POST">
                    <!-- передаем ID для дальнейшей работы  -->
                    <input type="hidden" name="userId" value="<?=$user['id']?>">

                    <input type="submit" name="action" value="Изменить">
                    <input type="submit" name="action" value="Удалить">
                </form>
            </div>
        <?php endwhile;?>
    </div>
</body>
</html>
