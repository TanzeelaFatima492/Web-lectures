<?php
include 'connection.php';
echo "<br>";
$runq = mysqli_query($con, "select * from Student;");
echo "<table border='1' width=50% align=center>
<caption>Student Information</caption>
<th>Roll No</th>
<th>Name</th>
<th>Class</th>
<th colspan=2>Action</th>" ;
while($data = mysqli_fetch_assoc($runq)) {
    echo "<tr><td align=center>" ;
    echo $data['RollNum'] ;
    echo " </td><td>";
    echo $data['SName'] ;
    echo "</td><td align=center> ";
    echo $data['SClass'] ;
    ?>
    </td>
    <td align=center><a href="updateform.php?rn=<?php echo $data['RollNum']; ?>">Edit</a> </td>
    <td align=center><a onclick="return confirm('Are you sure?')" href="delete.php?rn=<?php echo $data['RollNum']; ?>">Delete</a> </td>
    </tr>
<?php } ?>
</table>