<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 2</title>
</head>
<body>
    <h3>Задание 2</h3>
    Дописать любую строку в начало файла "Text.txt" и  в конец файла.
    <hr>
    <?php
    #записываем имя файла в переменную для удобства
    $filename = "Text.txt";

    #подготавливаем строки, которые мы добавим в файл
    $first_str = "Новая строка в начале файла\n";
    $last_str = "\nНовая строка в конце файла";

    # открываем файл в режиме "чтение и запись"
    $file = fopen($filename, "r+");

    if ($file){
        fseek($file, 0, );
        fwrite($file, $first_str);

        fseek($file, 0, SEEK_END);
        fwrite($file, $last_str);

        fclose($file);
    }
    echo "содержание файла было обновлено";
    
    ?>

</body>