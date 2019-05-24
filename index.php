<?php

session_start();

if(isset($_POST['a'])){
	if(isset($_SESSION['suma'])){
		$_SESSION['suma'] += $_POST['a'];
		$_SESSION['count']++;
	} else {
		$_SESSION['suma'] = 0;
		$_SESSION['count'] = 0;
	}
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
<meta charset="utf-8"/>
</head>
<body>
<?php
if($_SESSION['suma'] >= 100){

$suma = $_SESSION['suma'];
$ile = $_SESSION['count'];
$srednia = $suma / $ile;

ECHO<<<END

Suma wynosi $suma<br>
Podałeś $ile liczb<br>
Średnia wynosi $srednia<br>

END;

$_SESSION['suma'] = 0;
$_SESSION['count'] = 0;
}else{
?>

<form action="" method="POST">
	<input type="number" name="a" autofocus />
	<input type="submit" />
</form>

<?php
}
?>
</body>
</html>