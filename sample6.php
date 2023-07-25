<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サンプル6</title>
</head>
<body>
    <?php
        for($i = 100; $i > 0; $i--){
            if($i % 2 == 0){
                print($i);
                print("<br>");
            }
        }
    ?>
    </body>
</html>
