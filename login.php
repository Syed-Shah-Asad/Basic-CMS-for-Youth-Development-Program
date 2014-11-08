<?php include('template/header.php'); ?>

      <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
          <div class="well text-center" id="loginform">
			<?php
			
			if(isset($_GET['data']))
			{
				if($_GET['data'] == 'e')
				{	
		          echo '<font color="red">Invalid username or password</font>';
				  echo '<br>';
				  echo '<br>';
			    }
			}
		?>
		<img src = "logins.png" width = "70" height = "70">
		<h3>Login</h3>
		<form action="process_login.php" method="post">
			<input type="radio" name="mem" value="manager">manager 
			 <input type="radio" name="mem" value="fellow">fellow
			 <input type="radio" name="mem" value="ceo">CEO 
			<input type="text" name="username" placeholder="User name" class="form-control"><br>
			<input type="password" name="password" placeholder="Password" class="form-control"><br>
			<input type="submit" name="submit" value="Login" class="btn btn-primary btn-lg">
		</form>

            
          </div>
        </div>
      </div>

     
     <?php include('template/footer.php') ?>
