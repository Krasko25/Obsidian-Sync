<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задача 1</title>
</head>
<body>
    <h3>Задание 1</h3>
    Проверить существует ли файл с именем "Text.txt". Если файл существует, вывести содержимое файла. Если файла не существует - создать такой файл и записать туда любой текст.
    <hr>
    <?php
    $filename = "Text.txt";
    if (file_exists($filename)){
        $text = file_get_contents($filename);
        echo "Файл существует. Содержимое файла:<br>$text";
    }
    else{
        $new_text = 'Созданный файл с каким-то текстом';
        file_put_contents($filename, $new_text);
        echo "Был создан файл и в него был записан следующий текст:<br>$new_text";
    }
    ?>

</body>
</html>