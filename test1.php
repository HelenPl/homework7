<?php 
$json = file_get_contents(__DIR__ . '/tests/file.txt');
$result = json_decode($json, true);
		$test1 = $result[0];
		//$test2 = $result[1];
		//$test3 = $result[2];

if(isset($_GET['choose'])){
if(isset($result[0]['true answer'])) {
	$y = $result[0]['true answer'];

if(isset($_GET['answer'])) {
   $x = $_GET['answer'];

if($x === $y){
	require_once 'img.php';
	} else {
		require_once 'imagefalse.php';
}
}
}
}

if ($_GET['Num'] != 1) {
	http_response_code(404);
	echo '404 Not Found';
	exit;
} 


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test.php</title>
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="list.php"> список тестов</a></li>
				<li><a href="admin.php">добавить тест</a></li>
			</ul>
		</nav>
	</header>
<form action="" method="post">
	<p><label>Имя<input type="text" name="name"></label></p>
</form>
<h2>Тест1</h2>
<form action="<?= $_SERVER['PHP_SELF']?>" method="get">
   <p><b>Каким морем не омывается Австралия?</b></p>
    <p><label><input name="answer" type="radio" value="Тасманово">Тасманово море</label></p>
    <p><label><input name="answer" type="radio" value="Коралловое">Коралловое море</label></p>
    <p><label><input name="answer" type="radio" value="море Баффина" c>море Баффина</label></p>
	<p><input name="choose" type="submit" value="Выбрать"></p>
  </form> 


</body>
</html>