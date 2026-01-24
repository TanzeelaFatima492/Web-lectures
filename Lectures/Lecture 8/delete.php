<?php
include 'connection.php';
$rn = $_GET['rn'];
$query = "Delete from student where RollNum = '$rn'";
$runq = mysqli_query($con, $query);
if($runq){
    echo "Data Deleted Successfully..";
} else {
    echo "Data not Deleted..";
}
?>
<button><a href="view.php"> View</a></button>
