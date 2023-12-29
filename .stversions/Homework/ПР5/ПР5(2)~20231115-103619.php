<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 2</title>
</head>
<body>
    <h3>Задание 2</h3>
    Даны два массива А=[1, 2,5,7] и B=[2,3,4,5]. Вывести разницу массивов.
    <hr>
    A = [1, 2, 5, 7,]<br>
    B = [2, 3, 4, 5,]<br>
    A - B = 
    <?php
        $A = [1, 2, 5, 7];
        $B = [2, 3, 4, 5];
        $AB = array_diff($A, $B);
        echo '[';
        foreach ($AB as $num)
            echo $num, ', ';
        echo ']';
    ?>
</body>
</html>
