<?php

$account=$_POST['account'];
$password=$_POST['password'];
$mail=$_POST['mail'];

$name=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$birthday=$_POST['birthday'];

$sql_account="insert into `account`(`account`,`password`,`mail`) values('$account','$password','$mail')";
$sql_member="insert into `member`(`name`,`address`,`mobile`,`birthday`) values('$name','$address','$mobile','$birthday')";

$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');


echo $sql_account;
echo "<hr>";
echo $sql_member;
echo "<hr>";
echo $pdo->exec($sql_account);
echo "<hr>";
echo $pdo->exec($sql_member);



?>