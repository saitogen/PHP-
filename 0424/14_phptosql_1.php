<?php
include( "dbconnect.php" );
// SQL文の設定
$sql = "SELECT * FROM Animechar WHERE man<>0 ORDER BY man";
// SQL文の実行
// mysqli(接続しているDB,SQL文)
// 例）mysqli_query($con,"SELECT * FROM Animechar")
// 変数$rstには実行結果は入る
$rst=mysqli_query($con,$sql);

$m= "";

// DBから取得したデータを整える
while($row=mysqli_fetch_array($rst)){
    $m .=$row["id"]." ";
    $m .=$row["name"]." ";
    $m .=$row["ranking"]." ";
    $m .=$row["man"]." ";
    $m .=$row["woman"]."<br/>";
}
// メモリの解放
mysqli_free_result($rst);
// DBを切断する
mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP to SQL</title>
</head>
<body>
    <h2>キャラクターランキング</h2>
    <?php
    print $m;
    ?>
</body>
</html>