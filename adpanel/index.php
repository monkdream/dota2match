<?php
	session_start();
	
	include('db\db.php');
	
	if (!$db)
		$content = "Ошибка соединения с базой данных.";
	else
		{
		if (!$db_select)
			$content = "Ошибка выбора базы данных.";
		else
			{		
				$content = "base cool connect</br>"; // все новости которые будут выведены на странице
				
				// если логин и пароль не пусты то все хорошо, выводим админ панель
				if (!empty($_SESSION['login']) and !empty($_SESSION['id']))
				{
					$content .="Вы вошли на сайт, как ".$_SESSION['login']."<br><a  href='#'><font color=gren>Эта ссылка доступна только  зарегистрированным пользователям</font></a> <a href='LogOff.php'>выход</a>";
					// сделать шаблон панели администратора 
				}
				else	
					// форма для входа в админ панель, возможно сделать на js  плавающую по центру экрана
					// или просто в красивом дизайне по центру экрана
				 $content .= '<form action="LogOn.php" method="post"><label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15"></p>
    <p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>
    <p>
    <input type="submit" name="submit" value="Войти"></form>';

				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
			}
		}
	echo $content;
	echo '</br></br></br><center><font color=red>админ панель</font></center>';
?>