<?php

	session_start();
	session_destroy();
	header('Refresh:1;url=./index.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
    <meta name="author" content="Tezeuz" />
   	<link rel="stylesheet" type="text/css" href="style.css" title="style" />
    <?php echo "<script>alert('Do keep your details updated to get listed in the placement list')</script>"; ?>
    <title>Student | Signout.</title>

    <style type="text/css">
	<!--
		.style1 {color: #663399}
	-->
    </style>
</head>

<body>
</body>
</html>