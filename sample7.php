<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サンプル7</title>
</head>
<body>
    <?php
        echo date("w")."<br>";
        $week = ['日','月','火','水','木','金','土'];
        echo $week[date('w')];
    ?>
</body>
</html>