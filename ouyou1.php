<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>応用1</title>
</head>
<body>
    <?php
    date_default_timezone_set('Asia/Tokyo');
    $now = strtotime('2023/05/08');
    $next = strtotime('+366day');
        for($i = $now; $i <= $next; $i += 86400){
            echo date('m/d(D)',$i);
            echo "<br>";
        }
    ?>
</body>
</html>