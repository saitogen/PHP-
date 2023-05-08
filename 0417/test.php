<?php
    $m="<h1>Hello!</h1>";
    // 関数$mに対して文字列を代入する
    // PHPの変数には先頭に＄をつける
    // 例）$a $total
    // 型宣言を行わずに変数を利用することが出来る
    // ※総合計を求めなさい、文字列を蓄積する場合は初期化が必要
    // 例）$total=0;
    // 　　$m="";
    // 文字列の連結
    $f="齋藤";
    $l="元";
    $name=$f.$l;

    // 分岐
    // IF文
    $number=-8;
    $m1="";
    if($number>0){
        $m1="プラスです。";
    }else{
        $m1="マイナスです。";
    }

    // 繰り返し(for文)
    $count="";
    for($i=1;$i<=10;$i++)
    $count=$count.$i."<br/>";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP記述方法</title>
</head>
<body>
    <?php
        print $m;
        // PHP側で用意した関数$mの内容を表示する
        print $name;
        print $f."</br>".$l;

        // if文の結果
        print $m1;

        // forの結果
        print $count."<br/>";
    ?>
</body>
</html>
