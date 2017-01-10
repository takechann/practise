<?php
  //ここにプログラムを書く
  define('DB_HOST','192.168.43.247');//ローカルホストのIP
  define('DB_USER','root');//MAMPのスタートページにいろいろ書いてる
  define('DB_PASSWORD','root');
  define('DB_PORT','8889');
  define('DB_NAME','hama');//データベース名
  $dbhost = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_PORT.";charset=utf8";

  try{
    $pdo = new PDO($dbhost,DB_USER,DB_PASSWORD);

    //whereFromテーブルからすべての情報を取り出すsql文
    $sql = "SELECT
              *
    FROM
    wordrop
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
