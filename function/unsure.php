<?php

/* function add($name,...$a){
    echo $name;
    print_r($a);
}

add(1,2);
echo "<hr>";
add(1,2,3,4);
echo "<hr>";
add(1,2,0,"mack",['A','B']);
echo "<hr>";
add('泰山訓練場');
echo "<hr>";
add();
echo "<hr>"; */


function add(...$arg){
    $sum=0;
    foreach($arg as $num){
        if(is_numeric($num)){
            $sum+=$num;
        }
    }

    return $sum;
}
echo add(1,2);
echo "<hr>";
echo add(1,2,3,4);
echo "<hr>";
echo add(1,2,0,"mack",['A','B']);
echo "<hr>";
echo add('泰山訓練場');
echo "<hr>";
echo add();
echo "<hr>";
?>