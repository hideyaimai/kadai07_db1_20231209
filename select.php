<?php
// データと連携をする。クエリを書いて任意の形で出力をする

function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}
  

try {
    //ID:'root', Password: xamppは 空白 ''
    $pdo = new PDO('mysql:dbname=book;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
}


$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .="<p>";
    $view .= h($result["date"]) . "<br>";
    $view .= h($result["bookName"]) . "<br>";
    $view .= h($result["url"]) . "<br>";
    $view .= h($result["comment"]) . "<br>";
    $view .="</p>";
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>本の表示</title>
</head>
<body>
    <div class="log"><?= $view?></div>
    <form action="index.php" method="post">
        <input type="submit" name="continue" value="追加で登録">
    </form>
    
</body>
</html>