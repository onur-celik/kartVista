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
	<br />
        <div class="container main"><!-- ends in footer -->
    	    
    	    <div class="header">
    		<table class="w_100" cellpadding=0 cellpacing=0>
    		    <tr>
    			<td>
    			    <h1 class="logo">kartVista</h1>
    			</td>
    			<td align=right> <!-- navigation -->
    			    nav
    			</td><!-- navigation ends here -->
    		    </tr>
    		    <tr>
    			<td width=600>
    			    <h4 class="slogan"><?php echo $slng[slogan]; ?></h4>
    			</td>
    			<td align=right>
    			    <table width=150 cellpadding=0 cellspacing=0>
    				<tr>
    				    <td><a title="English" href="?lng=en"><img src="languages/flags/en.png" /></a></td>
    				    <td><a title="Türkçe" href="?lng=tr"><img src="languages/flags/tr.png" /></a></td>
    				    <td><a href="?lng=de"><img src="languages/flags/de.png" /></a></td>
    				    <td><a href="?lng=fr"><img src="languages/flags/fr.png" /></a></td>
    				    <td><a href="?lng=es"><img src="languages/flags/es.png" /></a></td>
    				    <td><a href="?lng=nl"><img src="languages/flags/nl.png" /></a></td>
    				    <td><a href="?lng=bg"><img src="languages/flags/bg.png" /></a></td>
    				</tr>
    			    </table>
    			</td>
    		    </tr>
    		</table>
    		<br />
    		<div class="slider">
    		    <img src="http://placehold.it/920x250" />
    		</div>
    	    </div> <!-- header -->
    	    