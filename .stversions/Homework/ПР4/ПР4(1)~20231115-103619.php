<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
    <style>
        label, input, textarea{
            margin: 5px;
        }
        #main{
            margin: 10px;
            margin-top: 20px;
        }
        #response{
            width:264px;
            height: 150px;
            margin: 5px;
        }
    </style>
</head>
    <div id="main">
        <form name="user" action="" method="GET">
            <label>Логин</label><br>
            <input type="text" name="login" placeholder="Введите логин"><br>

            <label>Пароль</label><br>
            <input type="text" name="password" placeholder="Введите пароль"><br>

            <input type="submit" name="done" value="Войти">
        </form>
        <div id="response">
        <?php 
            $password = '';
            $login = '';
            if (isset($_GET['done'])){
                if ($_GET["login"] == '')
                    echo 'Введите логин';
                elseif ($_GET["password"] == '')
                    echo 'Введите пароль';
                else{
                    $password = $_GET["password"];
                    $login = $_GET["login"];
                    echo "Попытка входа засчитана.<br>Логин: ", $login, "<br>Пароль: ", $password;
                }
            }
        ?>
        </div>
    </div>
</body>
</html>