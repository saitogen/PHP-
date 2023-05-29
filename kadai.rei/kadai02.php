<?php
$pass =$_POST["pass"];
$name=$_POST["user"];
    if($pass=='771' && $name=='aw'){
        print "<p>ようこそ".$name."さま</p>";
}
    else if(
        header('Location: kadai.php')
    )
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
    <h2>強すぎ酒場</h2>
    <form method="post" action="kadai03.php">
        <p>日本酒 2000円:<select name="nihon">
            <option value="0" >0本</option>
            <option value="1" >１本</option>
            <option value="2">２本</option>
            <option value="3">３本</option>
        </p>
    </select>
        <p>米 1000円:<select name="kome">
            <option value="0" >0本</option>
            <option value="1" >1本</option>
            <option value="2">2本</option>
            <option value="3">3本</option>
        </p>
    </select>
        <p>ワイン 1500円:<select name="wine">
            <option value="0" >0本</option>
            <option value="1" >1本</option>
            <option value="2">2本</option>
            <option value="3">3本</option>
        </p>
</select>
    <input type="submit" name="sub" value="購入">
    </form>
</body>
</html>