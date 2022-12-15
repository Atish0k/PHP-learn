<?php
//preg_match('/шаблон для поиска/',
//    'строка, в которой ищем совпадения по шаблону', $matches);
////найдем слово век в строке человек
//$pattern = '/век/';
//$string = 'человек';
//preg_match($pattern, $string, $matches);
//var_dump($matches);

//$pattern = '/Меняем автора статьи ([0-9]+) с "(.+)" на "(.+)"/';
//$str = 'Меняем автора статьи 123 с "Иван" на "Пётр"';
//preg_match($pattern, $str,$matches);
//var_dump($matches);
//$articleId = $matches[1];
//$oldAuthor = $matches[2];
//$newAuthor = $matches[3];

//еще можно маске можно дать имя прямо в шаблоне (?P<имя_маски>содержимое)
//$pattern = '/Меняем автора статьи (?P<articleId>[0-9]+) c "(.+)" на "(.+)"./';
//$str = 'Меняем автора статьи 123 c "Иван" на "Пётр".';
//preg_match($pattern, $str, $matches);
//var_dump($matches);
//$articleId = $matches['articleId'];

//DZ
$pattern = '/\/([a-zA-Z]+)\/([0-9]+)/';
$url = '/post/892';
preg_match($pattern,$url,$matches);
var_dump($matches);
$controller = $matches[1];
$id = $matches[2];
echo $controller . ' ' . $id;


