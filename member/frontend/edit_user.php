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