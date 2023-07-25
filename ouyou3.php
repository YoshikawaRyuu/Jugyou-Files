<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ouyou3</title>
</head>
<body>
    <form action = "" method = "POST">
        <label>身長：</label>
        <input type = "text" id = "height" name = "height">
        <label>m</label><br>
        <label>体重：</label>
        <input type = "text" id = "weight" name = "weight">
        <label>kg</label>
        <input type = "submit" value = "確定">
    </form>

    <?php
    if(isset($_POST["height"]) && isset($_POST["weight"])){
            $height = (float)htmlspecialchars($_POST['height']);
            $weight = (float)htmlspecialchars($_POST['weight']);

        if(!((0 < $height) && ($height < 3))){
            echo '身長を正しく入力してください';
            exit;
        }

        if((($weight < 20) && (200 < $weight))){
            echo '体重を正しく入力してください';
            exit;
        }

        $goal_weight = $height * $height * 22;
        $difference = abs($goal_weight - $weight);

        echo '体重'.$weight.'kg<br>';
        echo '理想'.$goal_weight.'kg<br>';
        echo 'あと'.$difference.'kgで適正体重です。<br>';
    }
    ?>
</body>
</html>
