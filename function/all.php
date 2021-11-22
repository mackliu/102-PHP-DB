<?php

/* echo "<pre>";
print_r(all('expenditure'));
echo "</pre>"; */

$rows=all('expenditure');


foreach($rows as $row){
    echo $row['item']."-".$row['place']."<br>";
}

//取出指定資料表的所有資料
function all($table){
    $dsn="mysql:host=localhost;charset=utf8;dbname=students";
    $pdo=new PDO($dsn,'root','');
    $sql="SELECT * FROM `$table`";
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
    //return $pdo->query($sql)->fetchAll();
}


?>