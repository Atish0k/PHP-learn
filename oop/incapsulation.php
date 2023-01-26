<?php
class Cat
{
    private $name;
    public $color;
    public $weight;

    public function __construct(string $name, string $color, float $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function sayHello()
    {
        echo 'Привет, меня зовут ' . $this->name;
    }
    public function setName($name){ //сеттер
        $this->name = $name;
    }
    public function getName() : string{ //геттер
        return $this->name;
    }
}
$cat1 = new Cat('снежок', 'черный', 3.0);

$cat1->color = 'Белый';
$cat1->weight = '3.5';

echo $cat1->sayHello();
$cat1->getName();
echo $cat1->color;
//var_dump($cat1);
//То, что внутри объектов есть свойства - это уже проявление инкапсуляции.
// У объекта есть свойства, он их внутри себя содержит - вот и "капсула".
