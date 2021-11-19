<?php
session_start();

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
<!--form:post[action="./api/reg.php"]-->
<form action="./api/reg.php" method="post" id="regForm">
    <table>
        <tr>
            <td>帳號：</td>
            <td><input type="text" name="account" id=""></td>
        </tr>
        <tr>
            <td>密碼：</td>
            <td><input type="password" name="password" id=""></td>
        </tr>
        <tr>
            <td>電子郵件：</td>
            <td><input type="text" name="mail" id=""></td>
        </tr>
        <tr>
            <td>姓名：</td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td>電話：</td>
            <td><input type="text" name="mobile" id=""></td>
        </tr>
        <tr>
            <td>地址：</td>
            <td><input type="text" name="address" id=""></td>
        </tr>
        <tr>
            <td>生日：</td>
            <td><input type="date" name="birthday" id=""></td>
        </tr>
    </table>
    <div><input type="submit" value="確認送出"> </div>
</form>

</div>

 <?php include "./include/footer.php";?>
</body>
</html>