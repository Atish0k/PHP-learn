<?php
return[
    '~^hello/(.*)$~' => [\MyProject\Controllers\MainController::class , 'sayHello'],
    '~^bye/(.*)$~' => [\MyProject\Controllers\MainController::class , 'sayBye'],
    '~^$~' => [\MyProject\Controllers\MainController::class, 'main'],
];