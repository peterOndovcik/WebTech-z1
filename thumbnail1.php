<?php
header('Content-type: image/png');  
include 'graf1.php';
  
$img="graf.jpeg";
$img = imagecreatefromjpeg($img);

$width = imagesx( $img );
$height = imagesy( $img );

$thumbWidth = 200;
$new_width = $thumbWidth;
$new_height = floor( $height * ( $thumbWidth / $width ) );

$tmp_img = imagecreatetruecolor( $new_width, $new_height );

imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );

imagejpeg( $tmp_img );
?> 