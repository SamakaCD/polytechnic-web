<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>

<?php
if ($_GET["user"] == "admin" && $_POST["pass"] == "123456"){
	echo "Ви ввійшли як Адміністратор";
}
else if ($_GET["user"] == "user" && $_POST["pass"] == "654321"){
	echo "Ви ввійшли як коистувач";
}else
	echo "користувача не знайдено"
?>

</body>
</html>