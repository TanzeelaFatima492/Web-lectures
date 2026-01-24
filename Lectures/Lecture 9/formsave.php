<?php
include 'connection.php';
$rn = $_POST["rollno"];
$nm = $_POST["sname"];
$cl = $_POST["sclass"];
$query = "INSERT INTO student (RollNum, SName, SClass) VALUES ('$rn','$nm','$cl')";
$runq = mysqli_query($con, $query);
if($runq) {
    echo "<h2 style='color:green;'> Data Saved Successfully</h2>";
} else {
    echo "<h2 style='color:red;'>Data not saved</h2>";
}
?>