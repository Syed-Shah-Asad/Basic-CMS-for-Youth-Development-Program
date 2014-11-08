<?php
include('template/header.php');

$pass=$_SESSION['pass'];



echo '<h3 align="center">Assignments</h3>';	
		$row = mysql_query("select * from fellow where fellow_id=$pass");
		$name3 = mysql_fetch_array($row);
	    echo '<h4 align="center"> Welcome  ' . $name3['username'] . "</h4>";	

echo '<br>';					
echo "<table class='table'>
<tr>
<th>No. </th>
<th>Assignment</th>

</tr>";

	
	$row1 = mysql_query("select *
						from assignment");
						
    while($name2 = mysql_fetch_array($row1))
	{
		echo "<tr>";
	    echo "<td>" . $name2['assignment_id'] . "</td>";
	    echo "<td>" . $name2['question'] . "</td>";
		
		echo "</tr>";
	}
	
  
    echo "</table>";




include('template/footer.php');
?>