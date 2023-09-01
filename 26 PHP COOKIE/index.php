<?php
print_r($_COOKIE);

// если куки установлены
if(isset($_COOKIE['firstName'])){
    echo "<h2>Привет, $_COOKIE[firstName] $_COOKIE[lastName]</h2>";
    echo "<a href='cabinet.php'>ЛК</a>";
}else{

    // если метод пост, значит форма отправлена
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // print_r($_POST);

        // экранируем, удаляем пробелы
        $firstName = htmlspecialchars(trim($_POST['firstName']));
        $lastName = htmlspecialchars(trim($_POST['lastName']));

        // устанавливаем куки
        setcookie('firstName', $firstName, time() + 60 * 60);
        setcookie('lastName', $lastName, time() + 60 * 60);

        // перезагружаем страницу
        header('Location: cabinet.php');

    }else{
        echo <<<HTML
        <form method="POST">
            <div>
                <label>Имя:</label>
                <input type="text" name="firstName">
            </div>
            <div>
                <label>Фамилия:</label>
                <input type="text" name="lastName">
            </div>
            <input type="submit" value="Отправить">
        </form>
HTML;
    }

}

