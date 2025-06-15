<?php
require_once('config/status_codes.php');     //require_onceは、ファイルがすでに読み込まれているかどうかチェックして、 すでに読み込まれている場合はファイルを読み込まないという動きをします。

$random_numbers = array_rand($status_codes,4);   //array_rand 関数を用いて random_numbers 変数に、status_codes.phpの配列をランダムに 4 つ格納します。 array_rand 関数は配列のキーをランダムに取り出します。 値ではなく、キーを取り出します。

foreach ($random_numbers as $index){
    $options[] = $status_codes[$index];
}                                         //ランダムに取得された配列のキー0〜3番目の要素($index)を、新しく作成した配列($options[])に代入すると選択肢用の配列を作成できる。シャッフルされた配列（4つ）を4回新しい配列に代入します。
$question = $options[mt_rand(0,3)];      //[mt_rand(0,3)];　0～3の範囲内で乱数を生成
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz<t</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php03">
                Status Code Quiz
            </a>
        </div>
    </header>

    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">Q.以下の内容に当てはまるステータスコードを選んでください</p>
                <p class="question__text"><?php echo $question["description"]?></p>
            </div>
            <form class="quiz-form" action="result.php" method="post">
                <input type="hidden" name="answer_code"
                    value="<?php echo $question['code'] ?>">
                    <!-- type 属性が hidden となっているのは、ブラウザに表示をさせないためです。 この記述があることでブラウザに表示させず、データの送信を行うことができます。 -->
                <div class="quiz-form__item">
                    <?php foreach($options as $option): ?>
                    <div class="quiz-form__group">
                        <input class="quiz-form__radio"
                            id="<?php echo $option["code"]?>"
                            type="radio" name="option"
                            value="<?php echo $option["code"]?>">
                        <label class="quiz-form__label"
                            for="<?php echo $option["code"]?>">
                            <?php echo $option["code"]?>
                        </label>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="quiz-form__button">
                    <button class="quiz-form__button-submit" type="submit">回答</button>
                </div>
            </form>
        </div>
    </main>




</body>
</html>