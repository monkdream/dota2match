<?php
	/*
		чистим сессию, удаляем все данные входа
		возможно еще какие то  данные буду хранить в сессии 
		нужно будет чистить их тут
	*/
    session_start();
	unset($_SESSION['password']);
    unset($_SESSION['login']); 
    unset($_SESSION['id']);
	session_destroy();
	Header("Location: index.php");
?>