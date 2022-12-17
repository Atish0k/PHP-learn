<?php
//index.php это точка входа в приложение и место где мы создаем сам контроллер
//и вызываем его методы - это фронт-контроллер
namespace MyProject\Controllers;

class MainController
{
    public function main()
    {
        echo 'Главная страница';
    }
    public function sayHello(string $name){
        echo 'Привет ' . $name;
    }
    public function sayBye(string $name){
        echo 'До свидания ' . $name;
    }
}