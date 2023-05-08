<?php
    $comment=$_GET["comment"];
    echo $comment;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETサンプル</title>
</head>
<body>
    <form method="get" action="">
        <p><input type="text" name="comment"></p>
        <p><input type="password" name="pass"></p>
        <input type="submit" name="sub" value="送信">
</body>
</html>