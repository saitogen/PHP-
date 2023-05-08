<?php
// DB接続
// mysqli_connect("ホスト名",MYSQLのユーザー名","パスワード","DB名")
$con = mysqli_connect("localhost","root","","ssp1");
// 接続したDBの文字コードを設定
mysqli_set_charset($con , "UTF8");