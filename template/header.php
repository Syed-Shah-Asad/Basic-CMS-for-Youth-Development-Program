
<?php 
session_start();
include('connection.php'); 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Planning Commision & Reform</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	 <link href="css/mystyles.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/small-business.css" rel="stylesheet">
	<script type="text/javascript" src="jquery.js"></script>

  </head>

  <body>

     <!-- navbar fixed top-->
    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	<div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
         <button type="button" class= "navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
        </button>
        
            	<a class="navbar-brand" href="./index.php"><span class="glyphicon glyphicon-home"></span> Young Development Fellows - Planning Commission</a>
        </div>
       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <ul class="nav navbar-nav navbar-right">
            <li><a href="contact_us.php">Contact us</a></li>
  	      		<li class="hidden-xs"><a>|</a></li>
            <li>
			
			<?php
			if(isset($_SESSION['slogin']) || isset($_SESSION['tlogin']) || isset($_SESSION['llogin']))
			{
				 echo'<a href="logout.php">Log Out</a>';
		    }
			else
			{
				 echo '<a href="login.php">Login</a>';
			} 
			?>
            </li>
            	<li class="hidden-xs"><a>|</a></li>
            <li>
            <?php

            if(isset($_SESSION['slogin']) || isset($_SESSION['tlogin']) || isset($_SESSION['llogin']))
			{
				 echo'<a href="portal.php">CMS</a>';
		    }
						
		    ?>
			
			</li>
    	</ul>
       </div> 
        </div>   
        <!-- end container for navbar-->	
  	</nav>
    <!-- End of navbar -->
    
	
    <div class="container main">
      
      <hr>