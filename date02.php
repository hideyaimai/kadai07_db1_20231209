<?php
$date = date("s");

if($date < 30){
    echo "<p style='color:red'>30未満</p>";
}else{
    echo "<p style='color:blue'>30以上</p>";
};

echo "現在" . $date . "秒";

?>