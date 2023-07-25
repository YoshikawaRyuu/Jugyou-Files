<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サンプル10</title>
</head>
<body>
    <form action = "" method = "POST">
        <label>お名前：</label>
        <input type = "text" id = "name" name = "name">
        <input type = "submit" value = "送信">
    </form>
    <?php
        if(isset($_POST["name"])){
            echo "入力されたお名前：". htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8');
        }
    ?>
</body>
</html>