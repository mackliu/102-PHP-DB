<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location:index.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <?php include "./include/head.php";?>
</head>
<body>
 <?php include "./include/header.php";?>
 <?php include "./include/nav.php";?>
 <?php include "./include/side_bar.php";?>
<div class="content">
編輯會員資料
<form action="./api/edit_user.php?user=<?=$_SESSION['user'];?>" method="post">
 <?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
$sql="select * from `account` , `member` 
               where `account`.`id`=`member`.`id` && 
                     `account`.`account`='{$_SESSION['user']}';";
/* $sql="select `member`.`address`,
             `member`.`mobile`,
             `account`.`mail`,
             `member`.`birthday`
             from `account` , `member` 
               where `account`.`id`=`member`.`id` && 
                     `account`.`account`='{$_GET['user']}';"; */

//echo $sql;
$user=$pdo->query($sql)->fetch();
?>

<p>id: <?=$user['id'];?><input type="hidden" name="id" value="<?=$user['id'];?>"></p>
<p>地址: <input type="text" name="address" value="<?=$user['address'];?>"></p>
<p>電話: <input type="text" name="mobile" value="<?=$user['mobile'];?>"></p>
<p>mail: <input type="text" name="mail" value="<?=$user['mail'];?>"></p>
<p>生日: <input type="text" name="birthday" value="<?=$user['birthday'];?>"></p>
<p><input type="submit" value="修改"></p>
</form>
</div>

 <?php include "./include/footer.php";?>
</body>
</html>