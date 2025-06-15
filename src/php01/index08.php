<?php

// $peopleの配列の0番目を取り出す
$people = array('Taro', 'Jiro', 'Saburo');
var_dump($people);
echo "<br/>";

echo $people[0];
echo "<br/>";


// array()での記載
$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);
var_dump($people);
echo "<br/>";


// []での記載
$people = [
  'person1' => 'taro',
  'person2' => 'jiro',
];
echo "<br/>";



//多次元配列
$people = [
  [ // 配列 0
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [ // 配列 1
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
  ],
  [ // 配列 2
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ]
];
echo $people[0]["last_name"]; //配列 0 の last_nameを取り出す
echo "<br/>";



//foreach文　配列 0 から配列の数だけ処理をする
$people = array('Taro', 'Jiro', 'Saburo');

foreach ($people as $person) {
  echo $person;
  echo '<br />';
}
echo "<br/>";




// foreach文の例
$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}


