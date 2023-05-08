<?php
    print $_POST["name"]." ".$_POST["sub"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>デフォルト</title>
</head>
<body>
    <!-- method属性:データ送信方法 -->
    <!-- post：送信データを隠す事ができる -->
    <!--get:URLにデータを貼り付けて送信する-->
    <!-- action属性:データを送信するファイルの設定 -->
    <form method="post" action="">
        <p>氏名:<input type="text" name="name"></p>
        <p><input type="submit" name="sub" value="送信"></p>
        <!-- type属性:入力欄を変更する事ができる
            name属性:PHP側にデータを送信する際に連想配列の要素名
                例＞<input type="text" name="title">
                PHP側＞$_POST["title"]=>連想配列で送られる
            value属性:初期値（省略可）
    -->
</body>
</html>