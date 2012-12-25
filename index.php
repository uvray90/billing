<?php
 	
	session_start(); 
	require("connect.php");

 	if(isset($_POST['login']))
    {
		//User entered values.
    	$user 		= mysql_real_escape_string($_POST['user']);
		$pass 		= $_POST['pass'];
		$pass	 	= $pass;
		$sql1 		= mysql_query("SELECT * FROM login WHERE user='$user' and pass='$pass' ");
		$cnt1 		= mysql_num_rows($sql1);
        if( $cnt1 == 0 )
	 		$error= "<b>Sorry usn : $user not found. Have you registered?</b>";
		if( $cnt1 == 1 && $user == "admin")
   			{
                $_SESSION['username']	= $user;
				$_SESSION['role']		= "admin";
		        header("Location:./admin");
	        }
		if( $cnt1 == 1 && $user != "admin")
   			{
                $_SESSION['username']	= $user;
				$_SESSION['role']		= "user";
		        header("Location:./user");
	        }
	
    }
    
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

<script src="js/jquery-latest.min.js"></script>
<script src="js/bootstrap.js"></script>

<title>Login Home</title>
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
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
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
 <div class="pull-left span6">
  <h3>Welcome to UV Billing</h3>
  <p>A one stop billing solution.</p>
  <p><a class="btn btn-primary btn-large">Explore our solutions</a></p>
 </div>
 <div class="pull-right">
 <h4>Welcome User</h4>
  <form class="well" action="" method="post">
   <label>Username</label>
   <input type="text" name="user" sclass="span3" placeholder="Type your username">
   <label>Password</label>
   <input type="password" name="pass" class="span3" placeholder="Type your password">
   <label clas="checkbox"></label>
   <button type="submit" name="login" class="btn">Log me in</button>
  </form>
 </div>
</div>



</body>
</html>
