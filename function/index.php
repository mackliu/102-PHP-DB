
<?php

add(3,5);
echo "<br>";
echo add(3,5)+10;
echo "<br>";
$result=add(3,5);
echo $result+10;
echo "<br>";
echo "result=".$result;

echo "<br>";
hello('mack');

$users=["秉鈞", "佑青", "芳如", "柏翰", "柏弘",
"家勳", "芸鳳", "欣潔", "杰駿",
"宴榕",  "郁雰", "誠信", "潤達", "世揚",
"頌航", "筱湉", "筠臻", "昇佑",
"志浩", "柏均", "伯堯","莘懿"
];

foreach($users as $user){
  hello($user);
  
  echo "<br>";
}

function add($a,$b){
    //echo $a+$b;
    return $a+$b;
}

//寫一個函式..可以輸入名字..然後echo "hello xxxx"

function hello($name){
    echo 'hello '.$name;
}

?>