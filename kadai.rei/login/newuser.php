<?php
    session_start();
    $con=mysqli_connect("localhost","root","","ssp1");
    mysqli_set_charset($con,"UTF8");

    $error["user"]="";
    $error["pass"]="";
    if(!empty($_POST)){
    // エラー項目の確認
    if($_POST["user"] == "")
        $error["user"]= "blank";

    if($_POST["pass"] == "")
        $error["pass"]= "blank";

    if(strlen($_POST["pass"])< 6 )
        $error["pass"]= "length";

    $judge=array_filter($error);
    if(empty($judge)){
        $user=$_POST["user"];
        $pass=$_POST["pass"];

        $sql="INSERT INTO users SET user='{$user}', pass='{$pass}'";
        mysqli_query($con,$sql);
    }
    mysqli_close($con);
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規ユーザー</title>
</head>
<body>
    <form method="post" action="">
        <input type ="text" name="user" placeholder="ユーザー名"></br>
        <?php
            if($error["user"]=="blank"):
        ?>
        <p>ユーザー名を入れてください</p>
        <?php
        endif;
        ?>
        <input type="password" name="pass" placeholder="パスワード"></br>
        <?php
            if($error["pass"]=="length"):
        ?>
        <p>パスワードを六文字以上入れてください</p>
        <?php
        endif;
        ?>
        <input type ="submit" name="sub" value="登録">
</body>
</html>