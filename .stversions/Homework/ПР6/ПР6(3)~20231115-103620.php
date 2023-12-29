<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 3</title>
</head>
<body>
    <h3>Задание 3</h3>
    Дана строка "Select * from  table where user=id". Дан массив (table 1=> (users, 1), table2 => (admins,3)). Подготовить массив со строками, в которых заменить значения данной строки table и id  на данные из массива соответственно.
    <hr>
    <?php
        $s = "Select * from table where user=id";
        $arr = array(
            "table1" => ['users', 126],
            "table2" => ['admins', 143],
            "table3" => ['writers', 165],
            "table4" => ['someone_else', 184],
            "table5" => ['chosen_ones', 153]
        );

        foreach($arr as $table => $id)
            echo "Select * from ", $arr[$table][0], 
            " where user=", $arr[$table][1], '<br>';
    ?>
</body>
</html>