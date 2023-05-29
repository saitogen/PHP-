<?php
    $date=date("Y年m月d日 H時i分")
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session練習</title>
</head>
<body>
    <?php
    print"<p>".$date."</p>";
    ?>
    
    <form method="post" action="kadai02.php">
        <input type ="text" name="user" placeholder="ユーザー名"></br>
        <input type="password" name="pass" placeholder="パスワード"></br>
        <input type ="submit" name="sub" value="認証">
</body>
</html>