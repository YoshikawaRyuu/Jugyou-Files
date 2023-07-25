<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サンプル8</title>
</head>
<body>
    <?php
    $array = [
        'apple' => 'りんご',
        'lemon' => 'レモン',
        'grape' => 'ぶどう',
        'tomato' => 'トマト',
    ];

    foreach($array as $key => $value){
        echo "英語：".$key."<br>";
        echo "日本語：".$value."<br>";
    }
    ?>
</body>
</html>