 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Green Blink Light in PHP</title>
    <!-- Link the CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- The PHP code generates this HTML span -->
    <?php

    $con = @mysqli_connect("localhost","root","","it6");
	if($con)
	{
		echo '<span class="status-dot green-blink">● You are online</span>';	
	}
	else
	{
		echo '<span class="status-dot red">● You are offline.</span>';
	}

    ?>

</body>
</html>
