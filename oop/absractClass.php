<?php
abstract class AbstractClass{
    abstract public function getValue();
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
