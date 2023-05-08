<?php
    $m1="";
    $number=rand(0,5);
    
    if($number==0){
        $m1="大吉";
    }else if($number==1){
        $m1="中吉";
    }else if($number==2){
        $m1="小吉";
    }else if($number==3){
        $m1="吉";
    }else if($number==4){
        $m1="末吉";
    }else{
        $m1="凶";
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print $m1;
    ?>
</body>
</html>