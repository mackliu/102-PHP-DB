<?php include_once "db.php";?>


<?php

$stu=find('students',23);
echo $stu['name'];

?>