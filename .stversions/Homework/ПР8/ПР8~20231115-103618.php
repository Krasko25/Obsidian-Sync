<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ПР8</title>
</head>
<body>
    <h3>Задание 1</h3>
    Создать класс User, имеющий свойства (user_name, user_email, user_phone). Эти свойства должны быть заполнены при создании экземпляра класса.
    <hr>
    <?php
    #создание класса User
    class User{
        public $user_name;
        public $user_email;
        public $user_phone;

        #__construst - фукнция, которая будет срабатывать автоматически
        #при вызове класса
        public function __construct($name, $email, $phone){
            $this->user_name = $name;
            $this->user_email = $email;
            $this->user_phone = $phone;
        }
        #функция для замены почты
        public function change_email($new_email){
            $this->user_email = $new_email;
            #отчет о действии
            echo "Email пользователя был изменен на $new_email<br>";
        }
    }
    #создаем экземпляр класса, передаем в него нужные значения
    $user = new User('Михаил', 'example@gmail.com', '+79491234567');

    #демонстрация того, что значения записались в экземпляр класса
    echo "Имя пользователя: $user->user_name<br>";
    echo "Почта пользователя: $user->user_email<br>";
    echo "Номер пользователя: $user->user_phone<br>";
    ?>
    <hr>
    <h3>Задание 2</h3>
    Дополнить класс User методом, позволяющим изменить email пользователя. Создать экземпляр класса и продемонстрировать работу метода.
    <hr>
    <?php
    #вызываем функцию для замены почты в экземпляре класса
    $user->change_email("new.email@gmail.com");
    ?>
    <hr>
    <h3>Задание 3</h3>
    Создать класс User_data, который наследует класс User и реализует метод вывода данных о пользователе. Создать экземпляр класса и продемонстрировать работу метода.
    <hr>
    <?php
    #класс который наследует класс User
    class User_data extends User{
        #создаем функцию для вывода данных пользователя
        public function PrintData(){
            echo "Имя пользователя: $this->user_name<br>";
            echo "Почта пользователя: $this->user_email<br>";
            echo "Номер пользователя: $this->user_phone<br>";
        }
    }
    
    #создание экземпляра класса
    $user_data = new User_data("Николай", "kola@mail.ru", "+79491234567");

    #использование функции для вывода данных пользователя
    $user_data->PrintData();
    ?>
</body>
</html>