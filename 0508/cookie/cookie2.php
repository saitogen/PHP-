<?php
        if(isset($_COOKIE["count"])){
            $count=$_COOKIE["count"]+1;
        }
        else{
            $count=1;
        }
        if($count>50)
            setcookie("count",$count,time()-100);
        else
            setcookie("count",$count)
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クッキー</title>
</head>
<body>
    <?php
    print "<p>訪問回数 : ".$count."回</p>"
    ?>
    
</body>
</html>