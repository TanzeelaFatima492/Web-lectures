<?php 
include 'connection.php';
echo "<br>";

	$runq = mysqli_query($con, "select * from Student;");
	echo "<table border='1'>
		<caption>Stdent Information</caption>
		<th>Roll No</th>
		<th>Name</th>
		<th>Class</th>
		<th>Action</th>" ;

	while($data = mysqli_fetch_assoc($runq))
	{
		echo "<tr><td>" ; 
		echo $data['RollNum'] ;
		echo " </td><td>";
		echo $data['SName'] ;
		echo "</td><td> ";
		echo $data['SClass'] ;
		echo "</td>";
	?>	
	<td>
		<a href="updateform.php ?rn=<?php echo $data['RollNum']; ?>">
		Edit/Update</a>
	</td>

		</tr>
	<?php } ?>

	</table>