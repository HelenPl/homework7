<?php 

$text = 'Правильный ответ 5';

$image = imagecreatetruecolor(380, 420);

$backColor = imagecolorallocate($image, 255, 75, 75);
$textColor = imagecolorallocate($image, 222, 82, 70);


$boxFile = __DIR__. '/frog.png';
if(!file_exists($boxFile)) {
	echo 'файл с картинкой не найден';
	exit;
}

$imBox = imagecreatefrompng($boxFile);

imagefill($image, 0, 0, $backColor);

imagecopy($image, $imBox, 10, 10, 0, 0, 354, 400);


$fontFile = __DIR__ . '/10.12_4_cyr-lat.ttf';
if (!file_exists($fontFile)) {
	echo 'файл со шрифтом не найден';
	exit;
}

imagettftext($image, 40, 40, 60, 350, $textColor, $fontFile, $text);

header('Content-Type: image/png');

imagepng($image);