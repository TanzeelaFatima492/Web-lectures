<?php
include 'connection.php';
echo "Update Page<br>";
if (isset($_GET['rn'])) {
    $rn = $_GET['rn'];
    $query = "SELECT * FROM student WHERE RollNum = '$rn'";
    $runq = mysqli_query($con, $query);
    if ($runq) {
        $data = mysqli_fetch_array($runq);
    } else {
        echo "Error fetching data: " . mysqli_error($con);
    }
} else {
    echo "No Roll No provided";
}
?>

<form action="updatesave.php" method="post">
    Roll No: <input type="Number" name="rollno" 
	value="<?php if (isset($data['RollNum'])) 
		echo $data['RollNum']; ?>">
    <br>
    Name: <input type="text" name="sname" value="<?php if (isset($data['SName'])) echo $data['SName']; ?>">
    <br>
    Class: <input type="text" name="sclass" value="<?php if (isset($data['SClass'])) echo $data['SClass']; ?>">
    <br>
    <input type="Submit" name="update" value="Update">
    <button><a href="view.php">View</a></button>
</form>
