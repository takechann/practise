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
    <link rel = "stylesheet" type = "text/css" href = "archive.css" />
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
      <div class="name">

      </div>

      <ul>
        <li>

          <img src="images/kagi.png" class="le"> <img src="images/batu.png" class="ri"> 
           <?php
          foreach($row as $r){
           echo $r['word'],"<br />";
         }
         ?>
         </li>
         <li>ハゲ <img src="images/kagi.png" class="le"> <img src="images/batu.png" class="ri"></li>
         <li>佐分利 <img src="images/kagi.png" class="le"> <img src="images/batu.png" class="ri"></li>
         <li>何者 <img src="images/kagi.png" class="le"> <img src="images/batu.png" class="ri"></li>
         <li>禿 <img src="images/kagi.png" class="le"> <img src="images/batu.png" class="ri"></li>
         <li>あらた <img src="images/kagi.png" class="le"> <img src="images/batu.png" class="ri"></li>

         <img src="images/yajirusi.png" class="yajirusi">


       </ul>

     </div>

     <div class="footer">
      <div class="container">
        <h3>@Future University Hakodate,All rights reserved. </h3>

      </div>
    </div>

  </div>



</body>
