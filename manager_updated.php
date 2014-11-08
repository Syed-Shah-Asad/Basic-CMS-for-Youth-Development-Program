<?php
		session_start();
		include('connection.php');

		$pass=$_SESSION['pass'];
		$check=$_POST["submit"];
		echo $check;
		echo '<br>';
		

		$username=$_POST['username'];
		echo $username;
		echo '<br>';
		
		$password=$_POST['password'];
		echo $password;
		echo '<br>';
		
		if(empty($username) || empty($password) )
		{
			header("Location: add_manager.php?data=e");
		}
		else
		{
				echo "check1";
				echo '<br>';
				
				if($check=="Update")
				{
					echo "updating"; 
					mysql_query(" UPDATE manager SET
					username='$username', password='$password' WHERE 
					username='$username'") ;
		
					header("Location: add_manager.php?data3=u");
					
				} 
				elseif($check=="Delete")
					{
						$d = mysql_query("DELETE 
									FROM manager 
									WHERE username='$username' and password='$password' ");
						
						$res = mysql_affected_rows();
						if($res==1)
						{
							header("Location: add_manager.php?data2=d");
						}
						else
						{
							header("Location: add_manager.php?data=e");
						}
					
			}
			elseif($check=="Insert")
				{
					mysql_query(" 	INSERT 
									INTO manager (username,password) 
									VALUES ('$username', '$password') ");
				
					header("Location: add_manager.php?data1=i");
				}
				else
				{
					header("Location: add_manager.php?data=e");
				}
	
		}
?>