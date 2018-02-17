<?php 

$json = file_get_contents(__DIR__ . '/tests/file.txt');
$result = json_decode($json, true);
if(isset($_GET['choose'])){
if(isset($result[2]['true answer'])) {
	$y = $result[2]['true answer'];

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

if ($_GET['Num'] != 3) {
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

<h2>Тест3</h2>
<form action="<?= $_SERVER['PHP_SELF']?>" method="get">
	<p><label>Имя<input type="text" name="name"></label></p>
  	<p><b>Сколько штатов в Австралии?</b></p>
  		<p><label><input name="answer" type="radio" value="6">6</label></p>
  		<p><label><input name="answer" type="radio" value="7">7</label></p>
  		<p><label><input name="answer" type="radio" value="8">8</label></p>
  		<p><label><input name="answer" type="radio" value="9">9</label></p>
  		<p><label><input name="choose" type="submit" value="Выбрать"></label></p>
  	
  </form>


</body>
</html>