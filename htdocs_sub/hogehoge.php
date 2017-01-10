<?php

// キーワード指定
$keyword = "東京";

// APIのURL
$url = "http://wikipedia.simpleapi.net/api?keyword=".urlencode($keyword)."&output=php";

// データを取得
$data = file_get_contents($url) ;

// PHPシリアライズパーサーを利用して解析し、配列に入れる
$array = unserialize($data);

// 配列をforeachで表示するデモ
foreach ($array as $key => $value) {
//    print $value[body] ."<hr/>\n\n";
}
 print $value[body];

?>