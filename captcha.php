<?php 
session_start(); 

$permitted_chars = 'abcdefgjhiklmnopqrsruvwxyzABCDEFGHJKLMNPQRSTUVWXYZ0123456789';

function generate_string($input, $strength = 10) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    return $random_string;
}

$image = imagecreatetruecolor(300, 135);

imageantialias($image, true);

$colors = [];

$red = rand(125, 175);
$green = rand(125, 175);
$blue = rand(125, 175);

for($i = 0; $i < 5; $i++) {
  $colors[] = imagecolorallocate($image, $red - 20*$i, $green - 20*$i, $blue - 20*$i);
}

imagefill($image, 0, 0, $colors[0]);

for($i = 0; $i < 10; $i++) {
  imagesetthickness($image, rand(2, 10));
  $line_color = $colors[rand(1, 4)];
  imagerectangle($image, rand(-10, 290), rand(-10, 50), rand(-10, 290), rand(80, 140), $line_color);
}

$black = imagecolorallocate($image, 0, 0, 0);
$white = imagecolorallocate($image, 255, 255, 255);
$textcolors = [$black, $white];

$fonts = [dirname(__FILE__).'/asset/fonts/Arial.ttf'];

$string_length = 6;
$captcha_string = generate_string($permitted_chars, $string_length);

$_SESSION['vercode'] = $captcha_string;

for($i = 0; $i < $string_length; $i++) {
  $letter_space = 300/$string_length;
  $initial = 15;

  imagettftext($image, 36, rand(-15, 45), $initial + $i*$letter_space, rand(55, 100), $textcolors[rand(0, 1)], $fonts[array_rand($fonts)], $captcha_string[$i]);
}

// Set the content type
header('Content-Type: image/png');
header('Cache-Control: no-cache');

imagepng($image);
imagedestroy($image);
?>