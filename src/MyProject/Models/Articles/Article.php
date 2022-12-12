<?php
//Каждый класс в отдельном файле
//Класс находится в следующем пространстве имен
namespace MyProject\Models\Articles;
use MyProject\Models\Users\User;
class Article
{
    private $title;
    private $text;
    private $author;
//крч, если так запустить, то буедт ругаться, что не может найти 3-й аргумент
// объект дб классом MyProject\Models\Articles\User,
// а передан объект класса MyProject\Models\Users\User
//нужно явно указывать namespace
    public function __construct(string $title, string $text,User $author)// Можно так\MyProject\Models\Users\User $author
    {
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getAuthor(): User
    {
        return $this->author;
    }
}