<?php
$pass =$_POST["pass"];
$name=$_POST["user"];
    if($pass=='771' && $name=='aw'){
        print "<p>ようこそ".$name."さま</p>";
}
    else if(
        header('Location: kadai01.php')
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
    <h2>甘味処</h2>
    <form method="post" action="kadai03.php">
        <p>お団子 100円:<select name="dango">
            <option value="0" >何本？</option>
            <option value="1" >１本</option>
            <option value="2">２本</option>
            <option value="3">３本</option>
        </p>
    </select>
        <p>せんべい 100円:<select name="senbei">
            <option value="0" >何個？</option>
            <option value="1" >1個</option>
            <option value="2">2個</option>
            <option value="3">3個</option>
        </p>
    </select>
        <p>まんじゅう 100円:<select name="manju">
            <option value="0" >何個？</option>
            <option value="1" >1個</option>
            <option value="2">2個</option>
            <option value="3">3個</option>
        </p>
</select>
    <input type="submit" name="sub" value="購入">
    </form>
</body>
</html>