<?php

//Хранение классов в отдельных классах
//И подключение вот так, без автозагрузки ручным способом
//require __DIR__ . '/src/MyProject/Models/Users/User.php';
//require __DIR__ . '/src/MyProject/Models/Articles/Article.php';

//echo 'привет, перемещайся по папкам,чтобы смотреть темы' . PHP_EOL;
//$author = new \MyProject\Models\Users\User('Иван');
//
//$publ = new \MyProject\Models\Articles\Article('Заголовок' , 'Текст', $author);

//Автозагрузка классов
//function myAutoLoader(string $className){
//    var_dump($className);
//    require_once __DIR__ . '/src/' . str_replace('\\', '/' , $className) . '.php';
//}
//spl_autoload_register('myAutoLoader');
//
//$author = new \MyProject\Models\Users\User('Иван');
//$article = new \MyProject\Models\Articles\Article('Заголовок', 'Текст', $author);
//
//echo 'Привет' .PHP_EOL;
//var_dump($article);

//$route = $_GET['route'] ?? ' ';
//$pattern = '~^hello/(.*)~';
//preg_match($pattern, $route, $matches);
//if(!empty($matches)){
//    $controller = new \MyProject\Controllers\MainController();
//    $controller->sayHello($matches['1']);
//    return;
//}
//
//$pattern = '~^$~';
//preg_match($pattern, $route, $matches);
//
//if(empty($matches)){
//    $controller = new \MyProject\Controllers\MainController();
//    $controller->main();
//    return;
//}
//echo 'Никакая страница не найдена';
//$controller = new \MyProject\Controllers\MainController();
//if(!empty($_GET['name'])){
//    $controller->sayHello($_GET['name']);
//}
//else{
//    $controller->main();
//}
spl_autoload_register(function (string $className){
    require_once __DIR__ . '/src/' . $className  . '.php';
});

$route = $_GET['route'] ?? '';
$routes = require __DIR__.'/src/routes.php';

$isRouteFound = false;
foreach ($routes as $pattern => $controllerAndAction){
    preg_match($pattern, $route, $matches);
    if(!empty($matches)){
        $isRouteFound = true;
        break;

    }
}
if(!$isRouteFound){
    echo 'Страница не найдена!';
    return;
}
unset($matches[0]);
$controllerName = $controllerAndAction[0];
$actionName = $controllerAndAction[1];
//Вот это пиздец жесткий прикол ниже, я до конца не понял
$controller = new $controllerName();
//щас передадим элементы массива $mathes в аргументы метода sayHello('имя');
$controller->$actionName(...$matches);

//echo var_dump($controllerAndAction).'<br>';
//echo var_dump($matches);
//Ах да, наш index.php - скрипт, в котором происходит обработка входящих
//запросов и создаются другие контроллеры, называется фронт-контроллером.

