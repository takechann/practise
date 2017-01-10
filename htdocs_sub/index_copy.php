<?php
  //ここにプログラムを書く
  define('DB_HOST','127.0.0.1');//ローカルホストのIP
  define('DB_USER','root');//MAMPのスタートページにいろいろ書いてる
  define('DB_PASSWORD','root');
  define('DB_PORT','8889');
  define('DB_NAME','test');//データベース名
  $dbhost = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_PORT.";charset=utf8";

  try{
    $pdo = new PDO($dbhost,DB_USER,DB_PASSWORD);

    //whereFromテーブルからすべての情報を取り出すsql文
    $sql = "SELECT
              *
    FROM
    seki
    ";

    //全ての情報を保存
    $statement = $pdo->query($sql);
    //データベースを配列情報に変換して、入れる
    $row = $statement->fetchAll(PDO::FETCH_ASSOC);

    //データベースの接続アウト
    $pdo=null;

  }catch(PDOException $e){
    echo 'Error:'.$e->getMessage();//エラーの内容を吐き出す
}
?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>index</title>
  <link rel = "stylesheet" type = "text/css" href = "index.css" />
  <style>
  body{
    font-family:'小塚ゴシック Pro6N R','ヒラギノ角ゴ Pro W3','Hiragino Kaku Gothic Pro','メイリオ',Meiryo,'ＭＳ Ｐゴシック', Arial, sans-serif;
  }
  </style>
</head>

<body>

  <div class="header">
    <div class="container">
      <div class="header-left">
        <a href="index.php">Wordrop.</a>
      </div>
      <div class="header-right">
        <ul>
          <li><img src="images/user.png" class="user"><a href="#">山田　太郎</a></li>
          <li><img src="images/header.png" class="logout"> <a href="#"　>ログアウト</a></li>
          <li><a href="archive.php" ><img src="images/archive.png" class="archive">Archive</a>
          </li>
        </ul>
      </div>
    </div>
  </div>



  <div class="contents">

    <div class="word">
      <a href="detail.html" class="w9">ワロタ</a>
      <a href="detail.html" class="w7">ハゲ</a>
      <a href="detail.html" class="w5">関</a>
      <a href="detail.html" class="w3">メロス</a>
       <?php

      foreach($row as $r):
      ?>
      <a div class = "w1" href="detail.php">
        <?php
        if($r['checks']= 1):
        echo $r['word'],"<br />";
        
        ?>
      </a>
      <?php
      endif;
      endforeach;
      ?>    
      <a href="detail.html" class="w2">君の名は</a>
      <a href="detail.html" class="w4">函館</a>
      <a href="detail.html" class="w6">大助</a>
      <a href="detail.html" class="w8">ありがとう</a>
      <a href="detail.html" class="w10">designworkshop</a>
    </div>
      <div class="share">
      <a href="#" class="btn facebook"><span class="fa fa-facebook"></span>Facebookで共有</a>
      <a href="#" class="btn twitter"><span class="fa fa-twitter"></span>Twitterで共有</a>
    </div>
  </div>

    <div class="footer">
      <div class="container">
        <h3>@Future University Hakodate,All rights reserved. </h3>

      </div>
    </div>

  </div>


</body>

</html>

