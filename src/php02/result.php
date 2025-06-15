<?php
require_once('functions/search_city_time.php');     //search_city_time.phpファイルを読み込む
$tokyo = searchCityTime("東京");       //searchCityTime関数を呼び出す。
$city = htmlspecialchars($_GET["city"], ENT_QUOTES);       //htmlファイルから変換しつつmethod="get"のformから"city"を受け取ります
// $comparison = searchCityTime($city);     //関数 searchCityTime を利用して送信された内容から表示する国を特定します。
$kuninonamae = searchCityTime($city);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <header class="header">
        <div class="header_inner">
            <a href="index.php" class="header_logo">World Clock</a>
        </div>
    </header>

    <main>
        <div class="result__content">
            <div class="result-cards">
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img src="img/<?php echo $tokyo["img"]?>" alt="国旗" class="result-card__img">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city"><?php echo $tokyo["name"]?></p>
                        <p class="result-card__time"><?php echo $tokyo["time"]?></p>
                    </div>
                </div>
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img src="img/<?php echo $kuninonamae['img']?>" alt="国旗" class="result-card__img">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city">
                            <?php echo $kuninonamae["name"]?>
                        </p>
                        <p class="result-card__time">
                            <?php echo $kuninonamae["time"]?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>




</body>

</html>
