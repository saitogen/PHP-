<?php
    $data=date("Y年m月d日 H時i分")
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
    <?php
        print"<p>".$data."</p>";
    ?>
    
    <form method="post" action="ren2.php">
        <input type ="text" name="user">
        <input type ="submit" name="sub" value="認証">
</form>
</body>
</html>