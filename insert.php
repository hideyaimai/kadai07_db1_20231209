<?php

$bookName = $_POST["bookName"];
$url = $_POST["url"];
$comment = $_POST["comment"];

// DBへ接続。if文に近い構文
try {
    $pdo = new PDO('mysql:dbname=book;charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
  }

// DBにSQLを実施する
$stmt = $pdo->prepare('
  INSERT INTO
    gs_bm_table(id,bookName,url,comment,date)
  VALUES(
    NULL,:bookName,:url,:comment,sysdate())
');


$stmt->bindValue(':bookName', $bookName, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);

// 関数の実行
$status = $stmt->execute();

if($status === false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit('ErrorMessage:' . $error[2]);
  } else {
    //５．index.phpへリダイレクト
    // 成功した場合
    echo '送信が完了しました。';
  }  
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="display: flexbox;">
  <form action="index.php" method="post">
    <input type="submit" name="continue" value="続けて登録">
  </form>

  <form action="select.php" method="post">
    <input type="submit" name="log" value="登録一覧へ">
  </form>

</body>
</html>