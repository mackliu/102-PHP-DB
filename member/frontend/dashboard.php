
 <?=$_SESSION['user'];?>歡迎你:<br>
<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
$sql="SELECT * FROM `account`,`member` WHERE `account`.`id`=`member`.`id` && `account`.`account`='{$_SESSION['user']}'";
$user=$pdo->query($sql)->fetch();

?>
個人資料:
<li>帳號:<?=$user['account'];?></li>
<li>地址:<?=$user['address'];?></li>
<li>電話:<?=$user['mobile'];?></li>
<li>mail:<?=$user['mail'];?></li>
<li>生日:<?=$user['birthday'];?></li>