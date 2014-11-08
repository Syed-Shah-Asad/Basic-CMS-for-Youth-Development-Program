<!DOCTYPE html>
<html>
<body>

	<?php
                        
                        

			session_start();
			//include('connect.php');
                        if(!(isset($_SESSION['slogin']) || isset($_SESSION['tlogin'])))
                        {
							header("Location: login.php");
                        }

                        echo "hellow";
                        echo '<br>';
                        echo'<a href="logout.php">Log Out</a>';
                        
            ?>
             

</body>
</html>