<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 3</title>
</head>
<body>
    <h3>Задание 3</h3>
    Создать копию файла "Text.txt", указав ему новое имя. А старый файл удалить.
    <hr>
    <?php
    #записываем имя файла в переменную для удобства
    $filename = "Text.txt";

    #для удобства записываем имя для нового файла в переменную
    $new_filename = "Text_copy.txt";

    #проверяем, существует ли файл
    if (file_exists($filename)){

        #копируем файл, задаем ему имя
        copy($filename, $new_filename);

        #удаляем исходных файл
        unlink($filename);
        echo "Файл был скопирован под новым именем, а старый файл был удален";
    }else{
        echo "Файл не найден";
    }
    
    ?>

</body>