<?php

$connect = mysql_connect("localhost","root","") or die("conn to db failed!");
mysql_select_db ("billingdb") or  die ("Db not found!" );

function adminsessioncheck()
{

}
function usersessioncheck()
{
return true;
}

?>