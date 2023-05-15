<?php
    if(!isset($_POST["sub"])){
        exit("ACCESS ERROR");
    }
    else if($_POST["user"]==""){
        header("Location:ren03.html");
    }
    session_start();
    $_SESSION["user"]=$_POST["user"];
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
        print"<p>".$_SESSION["user"]."さん、こんにちは</p>"
    ?>
</form>
</body>
</html>