<?php
require __DIR__ .'/auth.php';
$login = getUserLogin();
if($login !== null && !empty($_FILES['attachment'])) {
    if (!empty($_FILES['attachment'])) {
        $file = $_FILES['attachment'];

        $srcFileName = $file['name'];
        $newFilePath = __DIR__ . '/uploads/' . $srcFileName;

        $allowedExtensions = ['jpg', 'png', 'exe'];
        $extension = pathinfo($srcFileName, PATHINFO_EXTENSION);

        $filepath = $file['tmp_name'];
        $image = getimagesize($filepath);

        if ($file['error'] == UPLOAD_ERR_INI_SIZE) {
            $error = 'Размер файла слишком большой';
        } elseif (!in_array($extension, $allowedExtensions)) {
            $error = 'Загрузка файлов с таким расширением запрещена!';
        } elseif ($file['error'] !== UPLOAD_ERR_OK) {
            $error = 'Ошибка при загрузке файла.';
        }
//    elseif($image['0'] > 600 || $image ['1'] > 600){
//        $error = 'Неккоректное разрешение файла';
//    }
        elseif (file_exists($newFilePath)) {
            $error = 'Файл с таким именем уже существует';
        } elseif (!move_uploaded_file($file['tmp_name'], $newFilePath)) {
            $error = 'Ошибка при загрузке файла';
        } else {
            $result = 'http://mylearn.loc/phpForBeginner/uploads/' . $srcFileName;
        }
    }
}
?>




<html>
<head>
    <title>Загрузка файла</title>
</head>
<body>
<?php if ($login === null):?>
    <a href="/phpForBeginner/login.php">Авторизуйтесь</a>
<?php else: ?>
    Добро пожаловать, <?= $login ?>
    <a href = 'logout.php'>Выйти</a>
    <br>
    <?php if (!empty($error)): ?>
        <?= $error ?>
    <?php elseif (!empty($result)): ?>
        <?= $result ?>
    <?php endif; ?>
    <br>
    <form action="/phpForBeginner/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="attachment">
        <input type="submit">
    </form>
<?php endif; ?>
</body>
</html>