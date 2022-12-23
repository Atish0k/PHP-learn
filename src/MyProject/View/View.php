<?php
namespace MyProject\View;

class View{
    //сюда в конструктор мы передаем путь до папки с шаблонами
    private $templatesPath;
    public function __construct(string $templatesPath)
    {
        $this->templatesPath = $templatesPath;
    }
    //В этот метод передаем путь до конкретного файла-шаблона и массив с переменными
    public function renderHtml(string $templateName, array $vars = []){
       extract($vars);
        //поток вывода кладем во временный буфер вывода
        ob_start();
        include $this->templatesPath . '/' . $templateName;
        //все данные предназначеенные для вывода остались в переменной buffer
        $buffer = ob_get_contents();
        ob_end_clean();

        echo $buffer;

    }
}