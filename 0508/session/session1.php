<?php
    session_start();
    $_SESSION["username"]=$_POST["username"];
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
    <h2>甘味処</h2>
    <?php
    print "<p>いらっしゃいませ。".$_SESSION["username"]."様</p>"
    ?>
    <form method="post" action="session2.php">
        <p>お団子 100円:<select name="dango">
            <option value="0" >何本？</option>
            <option value="1" >１本？</option>
            <option value="2">２本？</option>
            <option value="3">３本？</option>
        </p>
</select>
    <input type="submit" name="sub" value="購入">
    </form>
</body>
</html>