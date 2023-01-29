<?php
//class A
//{
//    public function sayHello()
//    {
//        return 'Hello, I am A';
//    }
//}
//class B extends A
//{
//}
$a = new A();
var_dump($a instanceof A); // true


$b = new B();
var_dump($b instanceof B); // true
var_dump($b instanceof A); // true

//class A
//{
//    public function sayHello()
//    {
//        return 'Hello, I am A';
//    }
//}
//
//class B extends A
//{
//    public function sayHello()
//    {
//        return parent::sayHello() . '. It was joke, I am B :)';
//    }
//}

$b = new B();

//echo $b->sayHello(); // Hello, I am A. It was joke, I am B :)

class A
{
    public function method1()
    {
        return $this->method2();
    }

    protected function method2()
    {
        return 'A';
    }
}

class B extends A
{
    protected function method2()
    {
        return 'B';
    }
}

$b = new B();

echo $b->method1();
