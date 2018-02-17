
<?php

if (isset($_FILES['userfile'])) {
	$file = $_FILES['userfile'];

if (!empty($file['name']) && $file['error'] == UPLOAD_ERR_OK && move_uploaded_file($file['tmp_name'], __DIR__ . '/tests/file.txt')) {
	echo 'Файл загружен';
}else {
	echo 'Файл не загружен, попробуйте еще раз';
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin.php</title>
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

<p>Загрузить JSON-файл c тестом</p>
<form enctype="multipart/form-data" action="" method="post">
<p><input type="file" name="userfile"><br>
<input type="submit" value="Отправить"></p>	

</form>

</body>
</html>