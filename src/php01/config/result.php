<?php
$my_name = htmlspecialchars($_GET["my_name"], ENT_QUOTES);
$set = htmlspecialchars($_GET["set"], ENT_QUOTES);
$number = htmlspecialchars($_GET["number"], ENT_QUOTES);

echo "私の名前は" . $my_name . "<br/>";
echo "ご希望商品は" . $set . "<br/>";
echo "注文数は、". $number . "<br/>";