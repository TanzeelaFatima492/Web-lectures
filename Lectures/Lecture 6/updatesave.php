<?php
include 'connection.php' ;
echo "Welcome ...<br>" ;
$rn = $_POST["rollno"] ;
$nm = $_POST["sname"] ;
$cl = $_POST["sclass"] ;

$query = "Update student SET SName='$nm',  SClass='$cl' where RollNo='$rn';" ;


$runq = mysqli_query($con, $query);
if($runq)
{
	echo "<h2 style='color:green;'>
		
	Data Updated Successfully</h2>";
}
else
{
	echo "<h2 style='color:red;'>Data not Updated.</h2>";
}
?>