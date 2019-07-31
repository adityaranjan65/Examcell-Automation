<?php include_once('config.php'); 
$SQL = mysqli_query($conn,"select * from student_data order by batch");
$SQL1=mysqli_query($conn,"select * from class_rooms");
$row1=mysqli_fetch_all($SQL1, MYSQLI_NUM);
$row=mysqli_fetch_all($SQL, MYSQLI_NUM);
print_r('R'+1+'D')


?>