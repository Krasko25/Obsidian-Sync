<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 2</title>
    <style>
        .box{
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <h3>Задание 2</h3>
    Написать форму авторизации. Данные из полей формы сохранить в массив, где ключ массива - это имя поля, данные - значение элемента массива. Пароль зашифровать по md5.
    <hr>
    <form method='POST' action="">
        <div class='box'>
            <label>Логин</label><br>
            <input type='text' name="username" required><br>
        </div>
        <div class='box'>
            <label>Пароль</label><br>
            <input type='text' name="password" required><br>
        </div>
        <div class='box'>
            <input type='submit' value='готово' name='done'>
        </div>
    </form>
    <hr>
    <?php
    if (isset($_POST['done'])){
        #записываем данные в переменные
        $login = $_POST['username'];
        $pass = $_POST['password'];

        #хэширование пароля
        $hashed_pass = md5($pass);

        #создаём массив с данными
        $user = array(
            'username' => $login,
            'pass' => $hashed_pass
        );

        #проверка записи данных
        echo "Логин: ", $user['username'], '<br>Пароль: ', $user['pass'];
    }
    ?>
</body>
</html>