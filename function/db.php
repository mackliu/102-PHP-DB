<?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=students";
    $pdo=new PDO($dsn,'root','');

  
    function find($table,$id){
        global $pdo;
        $sql="SELECT * FROM `$table` WHERE `id`='$id'";
    
        return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    //取出指定資料表的所有資料
function all($table,...$arg){
    global $pdo;
    $sql="SELECT * FROM `$table` ";
    if(isset($arg[0])){
        if(is_array($arg[0])){
            foreach($arg[0] as $key=>$value){
                $tmp[]="`$key`='$value'";
            }
            
            $sql=$sql."where " . implode(" AND ",$tmp);
        }else{
            $sql=$sql.$arg[0];
        }
    }

    if(isset($arg[1])){
        $sql=$sql.$arg[1];
    }
    
    echo $sql;
    
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
    //return $pdo->query($sql)->fetchAll();
}

/**
 * update 函式設計
 * 1.指定資料表 $table => 字串
 * 2.指定更新的欄位 $column => 陣列
 * 3.指定更新的條件   ????
 * 
 */
$column=['date'=>'2021-11-22',
         'place'=>'職訓中心'];
$where=['payment_method'=>'信用卡',
        'classification'=>'交通'];
        
update('expenditure',$column,$where);
/*  $sql="";
foreach ($array as $key => $value) {
    echo '迴圈執行前=> '.$sql.'<br>';
    $sql=$sql . "`$key`='$value' AND ";
    echo '迴圈執行後=> '.$sql.'<br>';

}
echo "迴圈完成後=>".mb_substr($sql,0,mb_strlen($sql)-5); */
 function update($table,$column,$where){
    global $pdo;

    $sql_set='';
    foreach ($column as $key => $value) {
        $sql_set=$sql_set . "`$key`='$value',";
    }
    $sql_set=trim($sql_set,',');

    $sql_where='';
    foreach ($where as $key => $value) {
        $sql_where=$sql_where . "`$key`='$value' AND ";
    }
    $sql_where=mb_substr($sql_where,0,mb_strlen($sql_where)-5);;

    mb_substr($sql_where,0,mb_strlen($sql_where)-5);
    $sql="UPDATE `$table` SET $sql_set WHERE $sql_where ";
    "UPDATE `expenditure` 
        SET `date`='2021-11-22',`place`='泰山訓練場' 
         WHERE `payment_method`='信用卡' AND `classification`='教育'";
    //echo $sql;
    $pdo->exec($sql);

 }


?>