<html>
<head>
    <title>Фотоальбом</title>
</head>
<body>

<?php
$files = scandir(__DIR__ . '/uploads');
$links = [];
foreach($files as $fileName){
    if($fileName === '.' || $fileName === '..'){
        continue;
    }
    $links [] = 'http://mylearn.loc/phpForBeginner/uploads/' . $fileName;
}

    foreach ($links as $link):?>
        <a href = "<?= $link?>"><img src="<?= $link ?>"height="120px"></a>
    <?php endforeach; ?>
</body>
</html>