<?php
if(isset($_GET["sub"])){
    print $_GET["name"]."<br>";
    print $_GET["sub"]."<br>";
    print $_GET["address"]."<br>";
    print $_GET["ok"]."<br>";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
    <h2>フォーム</h2>
<!-- formのAction属性：データ送信するPHPファイルを指定 -->
<!-- formのmethod属性：データ送信方法を指定 -->
    <form action="" methed="post">
        <p>氏名：<input type="text" name="name"></p>

        <p><input type="cheackbox" name="ok" value="可">部活に参加</p>

        <p>住所<select name="address">
            <option value="東京" selected>東京</option>
            <option value="神奈川" >神奈川</option>
            <option value="埼玉">埼玉</option>
</select></p>
        <p><input type="submit" name="sub" value="送信"></p>
        <p><input type="reset" value="リセット"></p>
    </form>
    
</body>
</html>