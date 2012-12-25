<?php
require("../connect.php");
$q=$_GET["q"];
$sql="SELECT * FROM product WHERE itemname LIKE '$q%'";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result))
  {
  echo $row['itemname'];
  }
?>
