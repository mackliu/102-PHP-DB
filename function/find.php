<?php

echo "<pre>";
print_r(find('students',11));
echo "</pre>";


function find($table,$id){
    $dsn="mysql:host=localhost;charset=utf8;dbname=students";
    $pdo=new PDO($dsn,'root','');
    $sql="SELECT * FROM `$table` WHERE `id`='$id'";

    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}


?>