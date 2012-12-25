<?php
	session_start(); 
	require("../connect.php");
if(isset($_SESSION['role']))
{
	if($_SESSION['role']=="user")
	{
		if(!(usersessioncheck()))
		        header("Location:../");
    }
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

<script src="../js/jquery-latest.min.js"></script>
<script src="../js/bootstrap.js"></script>

<title>User Home</title>
<script>
function showIdHint(str)
{
if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("idHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","idhint.php?q="+str,true);
xmlhttp.send();
}
function showNameHint(str)
{
if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","namehint.php?q="+str,true);
xmlhttp.send();
}
</script>
</head>

<body>
<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>          </a>
          <a class="brand" href="#">UVBilling</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">User Home</a></li>
              <li><a href="#about">Bills</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>

            <ul class="nav pull-right">
                <li class="dropdown" id="menu1">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
                        Options
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Help</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Sign out</a></li>
                    </ul>
                </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<div class="hero-unit clearfix  ">
<table width="100%" class="table table-striped">
  <tr>
    <th>&nbsp;</th>
    <th><input name="idsuggest" type="text" id="idsuggest" onkeyup="showIdHint(this.value)"  /></th>
    <th><input type="text" name="namesuggest" id="namesuggest" onkeyup="showNameHint(this.value)" /></th>
    <th><input type="number" onKeyUp=""></th>
    <th><input type="submit" value="confirm" id="confirm" name="confirm" class="btn" onClick="" /></th>
    <th>&nbsp;</th>
  </tr>
    <tr id="idHint">
    
  </tr>

  <tr>
    <th width="4%">Sl</th>
    <th width="12%">Item Code</th>
    <th width="36%">Name</th>
    <th width="23%">Quantity</th>
    <th width="10%">Unit Rate</th>
    <th width="15%">Amount</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</div>
</body>
</html>
