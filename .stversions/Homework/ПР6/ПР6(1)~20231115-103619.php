<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 задание</title>
    <style>
        input{
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <h3>Задание 1</h3>
    Дана строка "Привет, Василий", где Василий имя пользователя. Записать имя пользователя в переменную user_name. 
    <hr>
    <form method='POST' action="">
        <label>Введите строку ввида "Привет, Василий"</label>
        <input type='text' name="user_str" required><br>
        <input type='submit' value='готово' name='done'>
    </form>
    <hr>
    <?php
    if (isset($_POST['done'])){
        #записываем содержимое поля
        $s = $_POST['user_str'];

        #разрываем строку по набору символов ", "
        $words = explode(', ', $s);

        #вывод имени
        $name = $words[1];
        echo $name;
    }
    ?>
</body>
</html>