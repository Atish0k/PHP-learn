<?php
$users = [
    [
        'name' => 'John',
        'age' => '18',
        'email' => 'ex1.com'
    ],
    [
        'name' => 'Ann',
        'age' => '19',
        'email' => 'ex2.com'
    ],
    [
        'name' => 'John',
        'age' => '18',
        'email' => 'ex3.com'
    ]
];

//Сформировать новый массив из email пользователей
$emails = [];
foreach($users as $user){
    $emails[] = $user['email'];
}
var_dump($emails);

//Сформировать новый список имен пользователей
$names = [];
foreach ($users as $user){
    $names[] = $user['name'];
}
var_dump($names);