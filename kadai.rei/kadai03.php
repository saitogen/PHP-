<?php
    $nihon=$_POST["nihon"]*2000;
    $kome=$_POST["kome"]*1000;
    $wine=$_POST["wine"]*1500;
    $all=$nihon+$kome+$wine
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
    if($nihon>0){
        print"<p>日本酒".$nihon."円</p>";
    }
    if($kome>0){
        print"<p>米".$kome."円</p>";  
    }
    if($wine>0){
        print"<p>ワイン".$wine."円</p>";  
    }
    print"<p>合計".$all."円</p>";
    ?>
    <form method="post" action="kadai04.php">
    <input type="submit" name="sub" value="確定">
    </form>
</body>
</html>