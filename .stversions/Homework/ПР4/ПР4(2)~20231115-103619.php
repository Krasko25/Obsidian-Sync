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
        #history{
            width:264px;
            height: 150px;
            margin: 5px;
        }
    </style>
</head>
    <div id="main">
        <form name="user" action="" method="post">
            <label>Имя</label><br>
            <input type="text" name="name" placeholder="Ваше имя"><br>

            <label>Сообщение</label><br>
            <textarea name="message" cols="30" rows="10" placeholder="Ваше сообщение"></textarea><br>

            <input type="submit" name="done" value="Отправить">
        </form>
        <div id="history">
        <?php 
            if (isset($_POST['done'])){
                echo $_POST['name'], ' написал сообщение:<br>', $_POST['message'];
            }
        ?>
        </div>
    </div>
</body>
</html>