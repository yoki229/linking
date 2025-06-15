<?php
function searchCityTime($city_name)
{
require("config/cities.php");       //cities.phpが必要なので読み込みます
foreach ($cities as $city){         //cities.phpの$citiesから変数と配列を参照して1個めから順に$cityに格納
    if($city["name"] === $city_name){          //もしcities.phpの配列の"name"と「$city_name」が同じだったなら
        $date_time = new DateTime("", new DateTimeZone($city["time_zone"]));      //「new DateTime()」で現在時刻の作成。今回はタイムゾーンが各国で違うのでcities.phpの$cities(foreach内では$city)に格納したタイムゾーンから指定
        $time = $date_time -> format("H:i");          //$timeという変数を作り、そこに$date_timeを表示形式を指定して入れる。Ｈ＝時(24時間単位)、i＝分(戦闘0あり)
        $city['time'] = $time;          //配列の中に　「"time"=>"time"」　を作る。上行で作った$timeが、配列"time"に入る
        return $city;           //…という一連のながれを$cityにお返し。
        }
    }
}

