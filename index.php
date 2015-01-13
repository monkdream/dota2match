<?php
	//header("Content-Type: text/html; charset=UTF-8");
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	
	$text .= '<!DOCTYPE html>
	<html>
		<head>
			<title>Матчи профессиональных команд в Dota 2</title>
			<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
			<link rel="stylesheet" type="text/css" href="css/style.css" />
		</head>
		<body>';
	
	$menu =  '<nav>
        	<ul>
        		<li><a href="#">Leagues</a>
        			<ul>
						<li><a href="#">Premium</a></li>
        				<li><a href="#">Professional</a></li>
						<li><a href="/league/">Recently added</a></li>
						<li><a href="#">Other</a></li>
        			</ul>
        		</li>
        		<li><a href="#">Matches</a></li>
        		<li><a href="#">Records</a></li>
        		<li><a href="#">Teams</a></li>
				<li><a href="#">Players</a></li>
        	</ul>
        </nav>';

	$text .= $menu.'<center><font color=green>В данный момент сайт находится в разработке.</font></center>';
	
	$text .= '<pre>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</pre>
<font color = #efefef><center>	
Copyright 2014 dota2match.info</br> 
Dota 2 is a registered trademark of Valve Corporation.</font></center>';
	
	$text .= '</body></html>';
	echo $text;
?>