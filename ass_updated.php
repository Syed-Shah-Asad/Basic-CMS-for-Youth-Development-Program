<?php
		session_start();
		include('connection.php');

		$pass=$_SESSION['pass'];
		$check=$_POST["submit"];
		$question=$_POST["myText"];
	
		if ($check =="Insert")
		{
		   {
		   	echo $question;
			mysql_query("insert into `assignment` (question) values ('$question')");
			header("Location: myassignment.php");
		   }
		}
		else 
		{
			header("Location: assignment.php?data=e");
		}
		
		
?>