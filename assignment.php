
<?php include('template/header.php'); ?>



<div class="row">
        <div class="col-lg-4 col-lg-offset-4">
          <div class="well text-center">

	<?php
			 if(isset($_GET['data']))
			{
				if($_GET['data'] = 'e')
					echo "<font color = 'red'> Invalid data inserted </font>" ;
			}
			{
				if($_GET['data'] = 'i')
					echo "<font color = 'green'> Assignment Posted </font>" ;
			}
		?>
<h3>Add Assignment</h3>

<form action="ass_updated.php" method="post">

<textarea name="myText" rows="10" cols="45"></textarea><br><br><br>

<input type="submit" name="submit" value="Insert" class="btn btn-success btn-lg">


           </div>
        </div>
      </div>
<?php
		if(!(isset($_SESSION['pass'])))
                  {
                        header("Location: login.php");
                  }           	        

                        
		
		
		$pass=$_SESSION['pass'];
       
?>
<?php 		include('template/footer.php');  ?>
 


