<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- 読み込むCSSファイル -->
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header class="header">
        <div class="header_inner">
            <a href="index.php" class="header_logo">World Clock</a>
        </div>
    </header>

    <main>
        <div class="search-form__content">
            <h2 class="search-form__content-title">日本と世界の時間を比較</h2>
        </div>
        <form action="result.php" class="search-form" method="get">
            <div class="search-form__item">
                <!-- 国の選択プルダウン -->
                <select class="search-form__item-select" name="city">
                    <option value="シドニー">シドニー</option>
                    <option value="上海">上海</option>
                    <option value="モスクワ">モスクワ</option>
                    <option value="ロンドン">ロンドン</option>
                    <option value="ヨハネスブルグ">ヨハネスブルグ</option>
                    <option value="ニューヨーク">ニューヨーク</option>
                </select>
                <!-- 検索ボタン（inputでもできるけどbuttonで作った方が凝れる） -->
                <div class="search-form__button">
                    <button class="search-form__button-submit" type="submit">検索</button>
                </div>
            </div>
        </form>
    </main>







</body>
</html>