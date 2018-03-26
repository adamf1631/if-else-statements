
<?php

$info=$_POST['info'];

if (ctype_upper($info)) {
	echo "Chill out, Dude";
} else {
	echo "Its all Good, Bro!";
}

?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<form action="index_test.php" method="POST">
	<input type="text" name="info">
	<button type="submit">Submit</button>
</form>
</body>
</html>