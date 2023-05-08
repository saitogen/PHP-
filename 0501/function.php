<?php
// 標準関数:phpで予め用意されている関数
// 乱数、count関数
// 今日の日付を表示させる
echo date('Y年m月d日')."<br/>\n";//現在日付 2019-12-31
echo date('H:i:s')."<br/>\n";//現在時間 23:59:59
echo date('Y-m-d H:i:s')."<br/>\n";//現在日時 2019-12-31 23:59:59

// $kuji=['大吉','中吉','小吉','吉','末吉','凶','大凶'];

// $count=count($kuji);
// $num=rand(0,$count -1);
// $result=$kuji[$num];

// echo $result;

// if($num <= 10): // 10%で大吉
//     $result = '大吉';
//   elseif($num <= 25): // 15%で中吉
//     $result = '中吉';
//   elseif($num <= 55): // 30%で小吉
//     $result = '小吉';
//   elseif($num <= 75): // 20%で末吉
//     $result = '末吉';
//   elseif($num <= 90): // 15%で凶
//     $result = '凶';
//   else:              // 10%で大凶
//     $result = '大凶';
//   endif;

// $pull=array_rand($kuji);
//     print $kuji[$pull]."<br>";

// function my_rand($k){
//     return rand(0,count($k)-1);
// }
// $kuji=array('大吉','中吉','小吉','吉','末吉','凶','大凶');
// $pull=my_rand($kuji);
// print $kuji[$pull]."<br>";