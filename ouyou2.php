<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>応用2</title>
</head>
<body>
    <table>
        <?php
        for($i = 1;$i <= 10; $i++){
            if($i % 2){
                print('<tr style = "background-color: #CCC">');
            }else{
                print('<tr>');
            }
            print('<td>'.$i.'行目</td>');
            print('</tr>');
        }
        ?>
    </table>
</body>
</html>