<?php include_once "db.php";?>


<?php

/* $stu=find('students',23);
echo $stu['name']; */
echo "<pre>";
print_r(all('students',['major'=>'國際貿易科'],' limit 10'));
echo "</pre>";

?>