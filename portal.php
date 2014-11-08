
<?php							
                        include('template/header.php');
						
						
						
                        if(!(isset($_SESSION['slogin']) || isset($_SESSION['tlogin']) || isset($_SESSION['llogin'])))
                        {
						
                         header("Location: login.php");
                        }

                        
                        if($_SESSION['slogin'])
                        {
							echo "<h3>  <img src = 'fellow.jpg' width = '50' height ='50'> Welcome Fellow to CMS portal   </h3>";
							echo '<br>';
							echo '<br>';
							$pass = $_SESSION['pass'];
                            echo '<ul>';
							echo '<li><a href="myassignment.php">Assignments </a></li>';
							echo '<br>'; 
							echo '</ul>';
                        }
                        if($_SESSION['tlogin'])
                         {
						    echo '<p>';                                       
							echo "<h3> <img src = 'manager.jpg' width = '60' height ='60'> Welcome Manager to CMS portal </h3>";  
							echo '<br>';
							echo '<br>';
							$pass = $_SESSION['pass'];
						
							echo '<ul>';
							echo '<li><a href="assignment.php">Post An Assignment</a> </li>';
							echo '<br>';
							echo '<li><a href="myassignment.php">View All Assignments</a> </li>';
							echo '<br>';
		                    echo '</ul>';                                                                                                                                                                                                      
		                    echo '</p>';
				}
                         if($_SESSION['llogin'])
                         {
						    echo '<p>';
							echo "<h3> <img src = 'ceo.png' width = '90' height ='90'> Welcome CEO to CMS portal</h3>";
							echo '<br>';
							echo '<br>';
							$pass = $_SESSION['pass'];
							echo '<ul>';
							echo '<li><a href="display_fellow.php">Display Fellows </a> </li>';                                                                                                                                               
							echo '<br>';
                            echo '<li><a href="display_manager.php">Display Managers </a> </li> ';
							echo '<br>';
							echo '<li><a href="add_fellow.php">Manage Fellows </a> </li>';                                                                                                                                               
							echo '<br>';
                            echo '<li><a href="add_manager.php">Manage Managers </a> </li> ';
							echo '<br>';
                            echo '</ul>';                                                                                                                                                                                                                                                 
		                    
						 }
                         echo '<br>';
                         echo '<br>';
                       
                        
						
						include('template/footer.php');
            ?>
			
		