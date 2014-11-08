<!DOCTYPE html>
<html>
<body>

	<?php
                            

			session_start();
			include('connection.php');
                        
			
			$mem=$_POST["mem"];
	
                        
                        
			$username = $_POST["username"];
			$password = $_POST["password"];
			
		if($mem == "fellow")
		{

                      
			$sql = "select * 
					from  fellow	
					where username = '$username' and password = '$password'";

			
			$query = mysql_query($sql);
			
			if(mysql_num_rows($query) == 1)
			{	
				$res=mysql_query ("select username, fellow_id from fellow where username='$username'" );
				while($name1=mysql_fetch_array($res))
				{	
				        $pass=$name1['fellow_id'];
					$_SESSION['pass'] = $pass;
                                        $_SESSION['slogin'] = 1;
                                        $_SESSION['tlogin'] = 0;
                                        $_SESSION['llogin'] = 0;
					header("Location: portal.php");
				}
				
								
			}
			
		else
			{
				header("Location: login.php?data=e");
				
			}
		
                
		}
		else if($mem == "manager")
			{
                       
				$sql = "select * 
				from  manager	
				where username = '$username' and password = '$password'";

                        
				$query = mysql_query($sql);
			
				if(mysql_num_rows($query) == 1)
				{	
					$res=mysql_query ( "select username, manager_id from manager where username='$username'" );
					while($name1=mysql_fetch_array($res))
					{	
				        $pass=$name1['manager_id'];
						$_SESSION['pass'] = $pass;
                        $_SESSION['tlogin'] = 1;
                        $_SESSION['slogin'] = 0;
                        $_SESSION['llogin'] = 0;
						header("Location: portal.php");
					}
				}
				else
				{
					header("Location: login.php?data=e");
				
				}
			
			}
               else if($mem == ("ceo") )
					{
						$sql = "select * 
						from  manager	
						where username = '$username' and password = '$password'";
				  
						$query = mysql_query($sql);
				
						if(mysql_num_rows($query) == 1)
						{	
								$res=mysql_query ( "select username, ceo_id from ceo where username='$username'" );
								while($name1=mysql_fetch_array($res))
								{	
									$pass=$name1['ceo_id'];
									$_SESSION['pass'] = $pass;
									$_SESSION['tlogin'] = 0;
									$_SESSION['slogin'] = 0;
									$_SESSION['llogin'] = 1;
									header("Location: portal.php");
								}
						}
						else
						{
							header("Location: login.php?data=e");
						}
					}
					else
					{
						header("Location: login.php?data=e");
					}
				
	?>
</body>
</html>