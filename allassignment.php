<?php
include('template/header.php');

$pass=$_SESSION['pass'];

$res = mysql_query("select *
						from course
						where tid = $pass");

echo '<h3 align="center">Assignments</h3>';	
echo '<br>';					
echo "<table class='table'>
<tr>
<th>Assignmnent No</th>
<th>Student Reg</th>
<th>Course Name</th>
<th>Assignment Topic</th>
<th>Marks</th>

</tr>";
while($name1 = mysql_fetch_array($res)) 
{
    		
	$c = $name1['cid'];
	$cname = $name1['name'];
	$q = mysql_query("select * from assignment where cid = $c");
	
	while($row = mysql_fetch_array($q))
	{
	$sid = $row['sid'];
	$w = mysql_query("select * from student where sid = $sid");
	$name2 = mysql_fetch_array($w);
	$regno = $name2['regno'];
	echo "<tr>";
    echo "<td>" . $row['assno'] . "</td>";
	echo "<td>" . $regno . "</td>";
	echo "<td>" . $cname . "</td>";
    echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['marks'] . "</td>";
    echo "</tr>";
    }
}
echo "</table>";




include('template/footer.php');
?>