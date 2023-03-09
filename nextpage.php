<?php
session_start();
if (!$_SESSION['authenticated']) {
    header('Location: index.html');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Next page</title>
</head>
<body>
	<h1>Welcome</h1>
	<p>What would you like to sort today?</p>
</body>
</html>