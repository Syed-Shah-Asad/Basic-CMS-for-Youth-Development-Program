<?php
		session_start();
		include('connection.php');

		$pass=$_SESSION['pass'];
		
		$check=$_POST["submit"];
		
		$username=$_POST['username'];
//		echo $username;
//		echo '<br>';
		
		$password=$_POST['password'];
//		echo $password;
//		echo '<br>';
		
		if(empty($username) || empty($password))
		{
			header("Location: add_fellow.php?data=e");
		}
		else
		{
				if($check=="Update")
				{
//					echo "updating"; 
					mysql_query(" UPDATE fellow SET username='$username', password='$password'  
					WHERE username='$username' ") ;
					header("Location: add_fellow.php?data3=u");
				} 
				elseif($check=="Delete")
					{
						mysql_query("DELETE FROM fellow 
						WHERE username = '$username' AND password='$password'");
					    
						$res = mysql_affected_rows();
						if($res==1)
						{
							header("Location: add_fellow.php?data2=d");
						}
						else
						{
							header("Location: add_fellow.php?data=e");
						}
						
					}
			elseif($check=="Insert")
				{
					mysql_query(" INSERT INTO fellow (username, password) 
					
					VALUES ('$username', '$password') ");
					
					header("Location: add_fellow.php?data1=i");
					
				}
				else
				{
					header("Location: add_fellow.php?data=e");
				}
		}
?>