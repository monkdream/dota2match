<?php
	/*
		������ ������, ������� ��� ������ �����
		�������� ��� ����� ��  ������ ���� ������� � ������ 
		����� ����� ������� �� ���
	*/
    session_start();
	unset($_SESSION['password']);
    unset($_SESSION['login']); 
    unset($_SESSION['id']);
	session_destroy();
	Header("Location: index.php");
?>