<?php
    if (isset($_GET['lng']))
    {
	$lng = $_GET['lng'];
	include "languages/" .$lng. ".php";
    }
    else
    {
	include "languages/tr.php";
    }
?> 
<!DOCTYPE HTML>
<html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    	<title>kartVista - <?php echo $slng[slogan] ?></title>
    	<script type="text/javascript" src="js/jquery.min.js"></script>
    	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    	<script type="text/javascript" src="js/scripts.js"></script>
    	<script type="text/javascript" src="js/easing.js"></script>
    	
    	
        <link rel="stylesheet" href="css/reset.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <div class="container"><!-- ends in footer -->