<?php include_once('header.php'); ?>
</table>
</form>
</body>
<table border="2">
 <thead>
 <tr>
 <th>id</th>
 <th>roll</th>
 <th>name</th>
 <th>class</th>
 <th>seat</th>
 
 
 </tr>
 </thead>
 <tbody>
 <center>
 <?php

$link = mysqli_connect("localhost", "root", "", "cec_eas");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$query="Select * from arrange";
$result = mysqli_query($link, $query);

 while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
#printf ("%s (%s) %s\n", $row[0], $row[1],$row[2]);

echo"<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td><td>{$row[4]}</td></tr>\n";
 }
?>
</center>
 </tbody>
</table>
<?php include_once('footer.php');
