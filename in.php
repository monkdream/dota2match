<?php
	//header("Content-Type: text/html; charset=UTF-8");
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	
	$text .= '<!DOCTYPE html>
	<html>
		<head>
			<title>Dota 2 матчи профессиональных команд класса премиум и профессионал</title>
			<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
			<link rel="stylesheet" type="text/css" href="css/style.css" />
		</head>
		<body>';

	//$text .= '';
	/* $url = 'http://api.steampowered.com/IDOTA2Match_570/GetMatchHistory/v1/?language=en_us&key=462FDBDFF80554225C863D613A58EEEA&format=xml&league_id=2190';
	$url = 'http://api.steampowered.com/IDOTA2Match_570/GetLeagueListing/v1/?language=en_us&key=462FDBDFF80554225C863D613A58EEEA&format=xml';*/
	$url = 'http://api.steampowered.com/IDOTA2Match_570/GetTeamInfoByTeamID/v1/?language=en_us&key=462FDBDFF80554225C863D613A58EEEA&format=xml&start_at_team_id=36&teams_requested=1';
	// Наёчинаем парсинг XML файла
        $xml = simplexml_load_file($url);
		var_dump($xml);
/*	
<font color=#3cb0fb>На нем будет размещена информация о матчах профессиональных </br>команд в турнирах класса премиум и профессиональные.</br></br>
Вся информация будет находиться в открытом доступе для </br>всех желающих.</br></br>
Результаты матча будут представлять всю статистику, </br>предоставляемую Valve, в удобной форме </br>для ее анализа.</br></br>
Будет возможно сравнение 2-х команд по </br>их личным встречам, за все время или какой </br>то период времени.</font></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<center><font color=#b35124>
Также предусмотрена возможность просмотра статистики команды  по отдельным турнирам.</br>
Для недопущения ситуации, когда команда не доиграла матч  или матч перенесли, или матч был несколько раз загружен в новом лобби с лоуда, будет ручная правка таких матчей, для недопущения отображения не точной статистики.</br>
Разрабатываются алгоритмы для вычисления различных показателей для команды.</font></center></br>
<font color=red>Желающие помочь финансово, вот мои реквизиты: R290734600528 и Z357495498296</font>'; */

	$text .= '</body></html>';
	echo $text;
?>