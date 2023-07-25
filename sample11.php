<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サンプル11</title>
    <style>
        img{
            max-width: 500px;
        }
    </style>
</head>
<body>
    <form action = "" method = "POST" enctype = "multipart/form-data">
        <input type = "file" name = "file" id = "file">
        <input type = "submit" name = "submit" value = "Upload">
    </form>

    <?php
        $targetDirectory = "image/";
        if(isset($_POST['submit'])){
            move_uploaded_file($_FILES['file']['tmp_name'],'image/'.$_FILES['file']['name']);
            $targetFile = 'image/'.$_FILES['file']['name'];
            $FileType = $_FILES['file']['type'];
            $FileSize = $_FILES['file']['size'];
            echo "ファイル名:".$targetFile."<br>";
            echo "ファイルタイプ".$FileType."<br>";
            echo "ファイルサイズ".$FileSize."<br>";
            echo "ファイル場所".$_FILES['file']['tmp_name']."<br>";
            echo '<img src = "'.$targetFile.'" alt = "Show Image"';
        }
        
    ?>
</body>
</html>