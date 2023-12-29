<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 3</title>
</head>
<body>
    <h3>Задание 3</h3>
    Создать три разных массива, содержащих диапазон элементов. Найти разницу между тремя массивами и отсортировать ее по возрастанию.
    <hr>
    <?php
        //задаем значения массивов
        $arr1 = range(1, 10);
        $arr2 = range(5, 50);
        $arr3 = range(10, 23);

        //выводим полученные массивы
        echo 'Первый массив: ';
        foreach ($arr1 as $num)
            echo $num, ' ';
        
        echo '<br>Второй массив: ';
        foreach ($arr2 as $num)
            echo $num, ' ';

        echo '<br>Третий массив: ';
        foreach ($arr3 as $num)
            echo $num, ' ';

        //находим разность массивов
        $diff1 = array_diff($arr1, $arr2);
        $diff2 = array_diff($arr1, $arr3);
        $diff3 = array_diff($arr2, $arr3);

        //объединяем результаты в один массив
        $result = array_merge($diff1, $diff2, $diff3);

        //сортировка
        sort($result);

        echo "<br>Результат: ";
        foreach ($result as $elem)
            echo $elem, ' ';
    ?>
</body>
</html>
