<?php
//Каждый класс в отдельном файле
namespace MyProject\Models\Users;

class User
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
}