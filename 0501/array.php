<?php
    // 配列の利用方法はJSと同じ
    $data[0]=10;
    $data[1]="sekine";

        print count($data)."<br>";

    for($cnt=0;$cnt<count($data);$cnt++)
        print $data[$cnt]."<br>";

    // 配列内のデータ件数を調べるときはcount関数を利用する

    // 配列の初期化(array関数)※インデックス0からデータから格納される
    $fruit=array("りんご","みかん","ぶどう");

    for($cnt=0;$cnt<count($fruit);$cnt++)
        print $fruit[$cnt]."<br>";

    // foreach文
    // foreach(配列名 as 変数名){
    // 変数名で処理;
    // }
    // 指定した配列から１件づつ変数に代入されていく代入できなくなったときループが終了する

    foreach($fruit as $dt)
        print $dt."<br>";

    // 連想配列+array関数
    // $fruit=array("りんご","みかん","ぶどう");
    // $fruit[0]=>りんご、$fruit[1]=>みかん、$fruit[2]=>ぶどう

    $fruit=array(
        "apple"=>"りんご",
        "orange"=>"みかん",
        "grape"=>"ぶどう"
    );
    foreach($fruit as $key=>$value)
        print $key."=>".$value."<br>";