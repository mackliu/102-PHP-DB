<?php
session_start();
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');

$user_id=$pdo->query("select `id` from `account` where `account`='{$_SESSION['user']}'")->fetchColumn();

$sql_account="DELETE FROM `account` where `id`='{$user_id}'";
$sql_member="DELETE FROM `member` where `id`='{$user_id}'";

$pdo->exec($sql_account);
$pdo->exec($sql_member);
unset($_SESSION['user']);
header("location:../index.php");

?>

