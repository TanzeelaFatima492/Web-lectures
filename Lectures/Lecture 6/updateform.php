<?php 
include 'connection.php' ;
echo "Update Page<br>";
echo $rn=$_GET['rn'];
$query="Select * from student where RollNum = $rn;";
$runq=mysqli_query($con, $query);
$data=mysqli_fetch_array($runq);

//echo @$data[SName];
//echo @$data[SClass];
 ?>
 <form action="updatesave.php" method="Post">
		Roll No: <input type="Number" name="rollno" value="<?php echo @$data[RollNo];?>">
		<br>
		Name: <input type="text" name="sname" value="<?php echo @$data[SName];?>">
		<br>
		Class: <input type="text" name="sclass" value="<?php echo @$data[SClass];?>">
		<br>
		<input type="Submit" name=""> 
		<button><a href="view.php"> View</a></button>
	</form>