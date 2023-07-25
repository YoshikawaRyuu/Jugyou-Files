<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web開発第3回目</title>
</head>
<body>
    <?php
    $apple = 100;
    $meat = 1000;
    $egg = 200;
    
    $sum = $apple * 2 + $meat + $egg * 2;
    print("税抜き価格：".$sum."<br>");
    print("税抜き価格：".$sum * 1.08);
    ?>
</body>
</html>