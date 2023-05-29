<?php
    session_start();
    $con=mysqli_connect("localhost","root","","ssp1");

    mysqli_set_charset($con,"UTF8");

    if(isset($_POST["sub"])){
        if($_POST["user"]!= "" && $_POST["pass"] != ""){
            $user=$_POST["user"];
            $pass=$_POST["pass"];
// 入力されたユーザー名とパスワードが一致するデータを探す
            $sql="SELECT * FROM users WHERE user='{$user}'AND pass='{$pass}'";

            $rst=mysqli_query($con,$sql);

            if($row =mysqli_fetch_assoc($rst)){
                $_SESSION["username"]=$row["user"];
                header("Location:hello.php");
                exit();
            }
            mysqli_free_result( $rst );
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
    <title>ログイン</title>
</head>
<body>
    <form method="post" action="">
        <input type ="text" name="user" placeholder="ユーザー名"></br>
        <input type="password" name="pass" placeholder="パスワード"></br>
        <input type ="submit" name="sub" value="認証">
</body>
</html>