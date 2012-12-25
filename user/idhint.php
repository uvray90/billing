<?php
require("../connect.php");
$q=$_GET["q"];
$sql="SELECT * FROM product WHERE itemno LIKE '$q%'";
$result = mysql_query($sql) or die(mysql_error());
echo "<table width=\"100%\" class=\"table table-striped\">";
$i=0;
while($row = mysql_fetch_array($result))
  {
  $i++;
  echo "<tr><td>$i</td>";
  echo "<td><input onFocus='this.blur()' type='text' name='itemno' id='itemno' value=' ".$row['itemno']."'></td>";
  echo "<td><input onFocus='this.blur()' type='text' name='itemno' id='itemname' value=' ".$row['itemname']."'</td>";
  echo "<td></td>";
  echo "<td><input type=\"submit\" value=\"confirm\" id=\"confirm\" name=\"confirm\" class=\"btn\" onClick=\"\" ' /></td></tr>";

  }
echo "</table>";
?>
