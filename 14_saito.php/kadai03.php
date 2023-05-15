<?php
    $_SESSION["dango"]=$_POST["dango"];
    $_SESSION["senbei"]=$_POST["senbei"];
    $_SESSION["manju"]=$_POST["manju"];
    $dan=$_POST["dango"]*100;
    $sen=$_POST["senbei"]*100;
    $man=$_POST["manju"]*100;
    $all=$dan+$sen+$man
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    if($dan>0){
        print"<p>団子".$dan."円</p>";
    }
    if($sen>0){
        print"<p>せんべい".$sen."円</p>";  
    }
    if($man>0){
        print"<p>饅頭".$man."円</p>";  
    }
    print"<p>合計".$all."円</p>";
    ?>
    <form method="post" action="kadai04.php">
    <input type="submit" name="sub" value="確定">
    </form>
</body>
</html>