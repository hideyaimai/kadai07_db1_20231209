<?php

$str_base = "りんご,ゴリラ,ラッパ";

$str = str_replace("ゴリラ","こあら",$str_base);
$st = str_replace("こあら","ぞう",$str);

echo $str;
echo $st;

$s = explode(",",$str_base);
var_dump($s);
echo $s[1];
echo $s[2];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <li>あ</li>
    <li>い</li>
    <li>う</li>
    <li>え</li>
    <li>お</li>
    
</body>
</html>