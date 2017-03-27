<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
	</head>
	<body>
	<?php 
	echo "Get метод";
		
		echo "<br>Get метод не підтримує передачі файлів<br>";
		echo "Привіт " . $_GET["user"] . "<br>";
		echo "Твій новий пароль: " . $_GET["pass"] . "<br>";
		echo "А також твоя електронна адреса: " . $_GET["mail"] . "<br>"; 
		echo "Я знаю що ти ";
		if ($_GET["radio"]=="male") 
			echo "Чоловік";
		else
			echo "Жінка";

		if ($_GET["option"] != "t0")
		echo "<br>І ти живеш в " . $_GET["option"] . " регіоні.";
		$exe="driver";
		if($_GET["exe"]==$exe){
			exec("$exe".".exe");
		} 
		else{
			echo "<br>Файл не існує або не вибрано.";
		}
		?>

	</body>
</html>