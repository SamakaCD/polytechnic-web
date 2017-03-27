<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
<?php 
	if(is_uploaded_file($_FILES["filename"]["tmp_name"])){
		if(!move_uploaded_file($_FILES["filename"]["tmp_name"], "./" . $_FILES["filename"]["name"]))
		echo "fasle";
	$uplink= "./" . $_FILES["filename"]["name"];
	$size= "height=\"400\" , width=\"300\"";
	echo "<img src='$uplink' alt='error' $size><br>";}
	echo "Post метод<br>";
	echo "Привіт " . $_POST["user"] . "<br>";
	echo "Твій новий пароль: " . $_POST["pass"] . "<br>";
	echo "А також твоя електронна адреса: " . $_POST["mail"] . "<br>"; 
	echo "Я знаю що ти: ";
	if ($_POST["radio"]=="male") 
		echo "Чоловік";
	else
		echo "Жінка";

	if ($_POST["option"] != "t0")
	echo "<br>І ти живеш в " . $_POST["option"] . " регіоні.";
	$exe="driver";
	if($_POST["exe"]==$exe){
		exec("$exe".".exe");
	} 
	else{
		echo "<br>Файл не існує або не вибрано.";
	}
	?>

</body>
</html>