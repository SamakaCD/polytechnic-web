<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>

<?php
if ($_POST["user"] == "admin" && $_POST["pass"] == "123456"){
	echo "Ви ввійшли як Адміністратор";
}
else if ($_POST["user"] == "user" && $_POST["pass"] == "654321"){
	echo "Ви ввійшли як коистувач";
}else
	echo "користувача не знайдено"
?>

</body>
</html>