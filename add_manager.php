
<?php include('template/header.php'); ?>

<div class="row">
        <div class="col-lg-4 col-lg-offset-4">
          <div class="well text-center">
			
			<?php
			 if(isset($_GET['data']))
			{
				if($_GET['data'] = 'e')
					echo '<font color="red"> Invalid entry </font> ';
					
			}
			if(isset($_GET['data1']))
			{
				if($_GET['data1'] = 'i')
					echo '<font color="blue"> Data Inserted </font> ';
			}
			if(isset($_GET['data2']))
			{
				if($_GET['data2'] = 'd')
					echo '<font color="red"> Data Deleted </font> ';
			}if(isset($_GET['data3']))
			{
				if($_GET['data3'] = 'u')
					echo '<font color="green"> Data Updated </font> ';
			}if(isset($_GET['data4']))
			{
				if($_GET['data4'] = 'a')
					echo '<font color="Red"> Entry Exists </font> ';
			}
			?>
			 
			
<h3> Managers </h3>
<form action="manager_updated.php" method="post">

Username			<input type="text" name="username" class="form-control"><br>
Password			<input type="text" name="password" class="form-control"><br>


<input type="submit" name="submit" value="Update" class="btn btn-success btn-lg">
<input type="submit" name="submit" value="Insert" class="btn btn-primary btn-lg">
<input type="submit" name="submit" value="Delete" class="btn btn-danger btn-lg">

</form> 

           </div>
        </div>
      </div>
<?php
		if(!(isset($_SESSION['pass'])))
                  {
                        header("Location: admin.php");
                  }           	        	
                        
		
		echo '<br>';
		$pass=$_SESSION['pass'];

		echo '<br>';
?>
<?php 		include('template/footer.php');  ?>


