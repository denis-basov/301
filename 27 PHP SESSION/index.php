<?php
session_start();

print_r($_SESSION);

// если куки установлены
if(isset($_SESSION['firstName'])){
    echo "<h2>Привет, $_SESSION[firstName] $_SESSION[lastName]</h2>";
    echo "<a href='cabinet.php'>ЛК</a>";
}else{

    // если метод пост, значит форма отправлена
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // print_r($_POST);

        // экранируем, удаляем пробелы
        $firstName = htmlspecialchars(trim($_POST['firstName']));
        $lastName = htmlspecialchars(trim($_POST['lastName']));

        // записываем данные в сессию
        $_SESSION["firstName"] = $firstName;
        $_SESSION["lastName"] = $lastName;

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

