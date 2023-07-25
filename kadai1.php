<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題1</title>
</head>
<body>
    <?php
        $syohin = array("りんご","お肉","卵");
        $kosu = array(2,1,2);
        $kin = array(100,1000,200);
        $nozei_gokei = array(0,0,0);
        $total = array(0,0,0);
        $zei = 1.08;
        for($i = 0; $i <= 2; $i++){
            $nozei_gokei[$i] = $kosu[$i] * $kin[$i];
        }

        for($j = 0; $j <= 2; $j++){
            $total[$j] = $nozei_gokei[$j] * $zei;
        }

        for($k = 0; $k <= 2; $k++){
            print("{$syohin[$k]}の税抜き金額は{$nozei_gokei[$k]}円で、税込金額は{$total[$k]}円です。");
            print("<br>");
        }
    ?>
    </body>
</html>
