<?php
require("../connect.php");
$q=$_GET["q"];
$sql="SELECT * FROM product WHERE itemno LIKE '$q%'";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result))
  {
  echo "<td>&nbsp;</td>";
  echo "<td><input type='text' name='itemno' id='itemno' value=' ".$row['itemno']."'></td>";
  echo "<td><input type='text' name='itemno' id='itemname' value=' ".$row['itemname']."'</td>";
  echo "<td></td>";
  echo "<td></td>";

  }
?>
