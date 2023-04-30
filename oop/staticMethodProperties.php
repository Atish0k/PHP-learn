<?php
//static method
class A{
    public static function test(int $x){
        return 'x = ' . $x;
    }
}
//echo A::test(5);
class User{
    private $role;
    private $name;
    public function __construct(string $role, string $name){
        $this->role = $role;
        $this->name = $name;
    }
    public static function  createAdmin(string $name){
        return new self('admin', $name);
    }
}
//static properties
class B
{
    public static $x;
    public function getX(){
        return self::$x;
    }
}
//можно сделать счетчик вызова класса
class Human{
    private static $count = 0;
    public function __construct(){
        self::$count++;
    }

    public static function getCount(){
        return self::$count;
    }
}
B::$x = 7;
$obj = new B();
echo $obj::$x;
echo $obj->getX().PHP_EOL;

$hum1 = new Human();
$hum2 = new Human();
echo 'Людей уже '.Human::getCount();


//$adminSystem = User::createAdmin('СуперАдминЕ');
//var_dump($adminSystem);

