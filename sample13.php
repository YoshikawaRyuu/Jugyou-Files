<?php
    try{
        $db = new PDO('mysql:dbname=mydb;host=localhost;post=8889;charset=utf8', 'root', 'root');
    }catch(PDOException $e){
        echo "DB connection Error: ".$e->getMessage();
    }
    $records = $db -> query("SELECT * FROM items");
    foreach($records as $record){
        echo "ID:".$record['id']."<br>";
        echo "Name".$record['name']."<br>";
    }
?>