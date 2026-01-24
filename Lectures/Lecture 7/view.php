
<?php
include 'connection.php';
echo "Welcome ...<br>";
$runq = mysqli_query($con, "SELECT * FROM Student");
echo "<table border='1'>
<caption>Student Information</caption>
<th>Roll No</th>
<th>Name</th>
<th>Class</th>
<th>Action</th>";
while ($data = mysqli_fetch_assoc($runq)) {
    echo "<tr><td>";
    echo $data['RollNum'];
    echo "</td><td>";
    echo $data['SName'];
    echo "</td><td>";
    echo $data['SClass'];
    echo "</td><td><a href='updateform.php?rn=" 
	. $data['RollNum'] . "'>Edit</a></td></tr>";
}
echo "</table>";
?>