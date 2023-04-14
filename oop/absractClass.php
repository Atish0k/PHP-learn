<?php
abstract class AbstractClass{
    abstract public function getValue(); //просто объявление методов, которые дб реализованы в дочерних классах

    public function printValue()
    {
        echo 'Значение: ' . $this->getValue();
    }
}
class classA extends AbstractClass{
    private $value;

    public function __construct(string $value){
        $this ->value = $value;
    }
    public function getValue(){
        return $this -> value;
    }
}
abstract class HumanAbstract
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    abstract public function getGreetings(): string;
    abstract public function getMyNameIs(): string;

    public function introduceYourself(): string
    {
        return $this->getGreetings() . '! ' .
            $this->getMyNameIs() . ' ' . $this->getName() . '.';
    }
}

class RussianHuman extends HumanAbstract {
    public function getGreetings(): string
    {
        return 'Привет';
    }
    public function getMyNameIs() : string{
        return 'Меня зовут';
    }
}

class EnglishHuman extends HumanAbstract{
    public function getGreetings(): string
    {
        return 'Hello';
    }
    public function getMyNameIs() : string{
        return 'My name is';
    }
}
//$object = new classA(45);
//$object -> printValue();


//$humaR = new RussianHuman('Иван');
//
//$humaE = new EnglishHuman('Ivan');
//
//echo $humaR->introduceYourself().PHP_EOL;
//echo $humaE->introduceYourself();
