<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
</head>
<body>


<form action="usa.php" method="GET">
	<input type="" name="from">
	<input type="" name="message">
	<button>Отправить</button>		
</form>

<h1>
<?php
	echo $_GET["from"];
	echo $_GET["where"];
	echo $_GET["text"];	
?>
</h1>
</body>
</html>