<?php
//у статьи дб заголовок и текст, а еще автор
class User{
    private $name;
    public function __construct(string $name){
        $this->name = $name;
    }
    public function getName() : string{
        return $this->name;
    }
}
class Admin extends User{

}
class Cat{
    private $name;
    public function __construct(string $name){
        $this->name = $name;
    }
    public function getName():string{
        return $this->name;
    }
}
class Article{
    private $title;
    private $text;
    private $author;
    //В конструктор передаем объект класса User, это тайп-хинтинг
    public function __construct(string $title, string $text, User $author){
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
$authorIva = new User('Петр');
$publication = new Article('Размножение', 'Ээ ДА', $authorIva);
// с помощью метода getAuthor() получили от статьи объект с типом User, а далее сразу же у этого объекта
// вызвали метод getName() и получили строковое значение поля name.
echo 'Имя автора '. $publication->getAuthor()->getName();

//Проверяем, что автор статьи не кот)
$authCat = new Cat('Вася');
//Ниже ошибка, мы должны передать объект класса User
//$publOne = new Article('как срать' , 'Помощь' , $authCat);
$authAd = new Admin('Админушка');
//Отработает норм, потому что админ может быть поользователе, а
//user админом нет
$publTwo = new Article('Что ну', 'Дадад', $authAd);
echo $publTwo->getAuthor()->getName();
