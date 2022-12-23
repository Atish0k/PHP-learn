<?php
//index.php это точка входа в приложение и место где мы создаем сам контроллер
//и вызываем его методы - это фронт-контроллер
namespace MyProject\Controllers;

use MyProject\View\View;

class MainController
{
    private $view;
    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    public function main()
    {
        $articles = [
            ['name' => 'Статья 1', 'text' => 'Текст статьи 1'],
            ['name' => 'Статья 2', 'text' => 'Текст статьи 2'],
        ];

        //include __DIR__ . '/../../../templates/main/main.php';
        $this->view->renderHtml('main/main.php' , ['articles' => $articles]);
    }
    public function sayHello(string $name){
        $this->view->renderHtml('main/hello.php', ['name' => $name, 'title' => 'Страница приветствия']);
    }
    public function sayBye(string $name){
        echo 'До свидания ' . $name;
    }
}