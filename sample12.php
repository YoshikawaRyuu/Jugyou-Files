<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Stored the Session Name</h1>
    <a href="http://localhost:8888/sample12-2.php">See the Session Name</a>
    <?php
        session_start();
        $_SESSION['session_name'] = 'Hello Session';
    ?>
</body>
</html>