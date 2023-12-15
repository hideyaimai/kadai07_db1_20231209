<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- ポストはページ遷移してデータを受け渡す。ファイルを分割してわかりやすくする工夫と感じた。 -->
    <form action="insert.php" method="post">
        <p>本の名前</p>
        <input type="text" name="bookName"><br>
        <p>URL</p>
        <input type="text" name="url"><br>
        <p>コメント</p>
        <textarea name="comment" cols="30" rows="10"></textarea><br>
        <input type="submit">
    </form>
    
    <form action="select.php" method="post">
        <input type="submit" name="log" value="登録一覧へ">
    </form>




</body>
</html>

