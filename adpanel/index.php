<?php
	session_start();
	
	include('db\db.php');
	
	if (!$db)
		$content = "������ ���������� � ����� ������.";
	else
		{
		if (!$db_select)
			$content = "������ ������ ���� ������.";
		else
			{		
				$content = "base cool connect</br>"; // ��� ������� ������� ����� �������� �� ��������
				
				// ���� ����� � ������ �� ����� �� ��� ������, ������� ����� ������
				if (!empty($_SESSION['login']) and !empty($_SESSION['id']))
				{
					$content .="�� ����� �� ����, ��� ".$_SESSION['login']."<br><a  href='#'><font color=gren>��� ������ �������� ������  ������������������ �������������</font></a> <a href='LogOff.php'>�����</a>";
					// ������� ������ ������ �������������� 
				}
				else	
					// ����� ��� ����� � ����� ������, �������� ������� �� js  ��������� �� ������ ������
					// ��� ������ � �������� ������� �� ������ ������
				 $content .= '<form action="LogOn.php" method="post"><label>��� �����:<br></label>
    <input name="login" type="text" size="15" maxlength="15"></p>
    <p>
    <label>��� ������:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>
    <p>
    <input type="submit" name="submit" value="�����"></form>';

				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
			}
		}
	echo $content;
	echo '</br></br></br><center><font color=red>����� ������</font></center>';
?>