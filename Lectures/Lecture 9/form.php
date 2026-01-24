<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post Method</title>
</head>
<body>
    <h1 align="center">Welcome to University of Kotli Azad Kashmir</h1>
    <h2 align="center">Student Input Form</h2>
    <table border="2" width="25%" align="center" height="100px">
        <form action="formsave.php" method="Post">
            <tr>
                <td align="right">Roll No:</td>
                <td><input type="Number" name="rollno"></td>
            </tr>
            <tr>
                <td align="right">Name:</td>
                <td><input type="text" name="sname"></td>
            </tr>
            <tr>
                <td align="right">Class:</td>
                <td><input type="text" name="sclass"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="Submit">
                    <button>
                        <a href="view.php"> View</a>
                    </button>
                </td>
            </tr>
        </form>
    </table>
</body>
</html>