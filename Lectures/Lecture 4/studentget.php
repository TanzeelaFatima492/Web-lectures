<?php 
include 'connection.php';
echo "<br>";

$runq = mysqli_query($con, "select * from Student;");
	while($data = mysqli_fetch_assoc($runq))
	{
		echo $data['RollNum'] ;
		echo " ";
		echo $data['SName'] ;
		echo " ";
		echo $data['SClass'] ;
		echo "<br>";
	}

 ?>
