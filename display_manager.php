<?php
include('template/header.php');

$pass=$_SESSION['pass'];



echo '<h3 align="center">Current Managers in Planning Commision</h3>';	

echo '<br>';					
echo "<table class='table'>
<tr>
<th>List Of Managers</th>

</tr>";

	
	$row1 = mysql_query("select *
						from manager");
						
    while($name2 = mysql_fetch_array($row1))
	{
		echo "<tr>";
	    echo "<td>" . $name2['username'] . "</td>";
		echo "</tr>";
	}
	
  
    echo "</table>";




include('template/footer.php');
?>