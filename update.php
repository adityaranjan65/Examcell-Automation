<?php include_once('config.php'); 
$SQL = mysqli_query($conn,"select * from arrange");
$SQL1 = mysqli_query($conn,"select * from seat");
$row=mysqli_fetch_all($SQL, MYSQLI_NUM);
$row1=mysqli_fetch_all($SQL1, MYSQLI_NUM);
print_r($row1[0]);
print_r(count($row));
for($i=1;$i<=count($row);$i++)
{
	$x=$row1[$i-1][0];
	mysqli_query($conn,"update arrange set seat=$x where id=$i");
}
	
?>