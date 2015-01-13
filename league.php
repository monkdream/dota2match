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
		
//-------- старт  таймера для определения времени обработки запроса
	$time_pre = microtime(true);
	
	$url = 'http://api.steampowered.com/IDOTA2Match_570/GetLeagueListing/v1/?language=en_us&key=462FDBDFF80554225C863D613A58EEEA&format=xml';
	// Наёчинаем парсинг XML файла
        $xml = simplexml_load_file($url);
		//var_dump($xml);
	if ($xml == true) {
		//echo 'good</br>';
		$i = sizeof($xml->leagues->league);
		echo 'Количество турниров зарегистрованных в доте: '.$i;
		
		$last_league = 20;		// количество выводимых последних добавленных лиг
		$info_league = '';
		$t = 0;
		while($t < $last_league)
		{
			$info_league .= ($t+1).'. <font color=green>'.$xml->leagues->league[$i-1]->name.'</font></br>'.'ID league: '.$xml->leagues->league[$i-1]->leagueid.'</br>'.			'Description league: '.$xml->leagues->league[$i-1]->description.'</br>'.			'Tournament url: '.$xml->leagues->league[$i-1]->tournament_url.'</br></br>';
			$t++;
			$i--;
		}
		$text .= $info_league;
	}
	else 
		echo '<font color = red>Sorry, error connect to database \'(</font>';
	
	// ---- время окончания таймера
	$time_post = microtime(true);
	// вычисляем затраченное время на обработку всех запросов
	$exec_time = $time_post - $time_pre;
	echo '</br>Время обратки запроса: '.$exec_time.'</br></br>';
	
	$text .= '</body></html>';
	echo $text;
?>