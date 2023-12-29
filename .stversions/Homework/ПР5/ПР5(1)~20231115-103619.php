<!DOCTYPE html>
<html>
<head>
    <title>1 задание</title>
    <style>
        #main{
            margin: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div id="main">
        <h3>Задание 1</h3>
        Дан массив [1, 2, 3]. Написать форму с полем ДО, куда будут вводиться число от 1 до 10.	Необходимо дополнить массив числами, конечным числом котрых является число из поля ДО. Использовать функции для работы с массивами array_pop и array_push.
        <hr>
        <form method='POST' action="">
        <label>ДО (Число от 1 до 10):</label>
        <input type='number' name="number" min="1" max="10" required><br>
        <input type='submit' value='готово' name='done'>
    </form>
    <?php
        if (isset($_POST['done'])){
            $n = $_POST["number"];
            $arr = [1, 2, 3];
            if ($n <= 3)
                while (end($arr) != $n)
                    array_pop($arr);
            else
                for ($i = 4; $i <= $n; $i++)
                    array_push($arr, $i);

            echo "Итоговый массив: ";
            foreach ($arr as $num)
                echo $num, ' ';
        }
    ?>
    </div>
</body>
</html>
