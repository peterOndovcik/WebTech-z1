<?php

$data2013 = array(20, 11, 13, 7, 5, 0, 1);
$data2014 = array(20, 19, 6, 3, 1, 0, 1);
$data2015 = array(9, 19, 22, 0, 0, 0, 3);
$font = "./arial.ttf";

$columns = count($data2013);


$width = 1500;
$height = 700;
$padding = 30;

$column_width = $width / ($columns + 5) + 100;

$im = imagecreate(1500, 1800);
$black = imagecolorallocate($im, 0, 0, 0);
$white = imagecolorallocate($im, 255, 255, 255);
$red = imagecolorallocate($im, 255, 0, 0);
$green = imagecolorallocate($im, 0, 255, 0);


imagefilledrectangle($im, 0, 0, 1500, 1800, $white); // aby biele pozadie 

$max_value1 = max($data2013);

$ascii_value = 65;

for ($i = 0; $i < $columns; $i++) {

    $column_height = ($height / 100) * (( $data2013[$i] / $max_value1) * 95);

    $x1 = (($i + 2) * $column_width) * 0.45;
    $y1 = ($height - $column_height) * 0.45;
    $x2 = ((($i + 2) * $column_width) - $padding) * 0.45 - 20;
    $y2 = $height * 0.45;

    if ($i > -1 && $i < 5) {
        imagefilledrectangle($im, $x1 + 200, $y1 + 20, $x2 + 200, $y2 + 20, $green);
        $str = chr($ascii_value);
        imagettftext($im, 20, 0, $x1 + 170, $y2 + 50, $black, $font, $str);
        imagettftext($im, 20, 0, $x1 + 170, $y1+10, $black, $font, $data2013[$i]);
    } else {
        imagefilledrectangle($im, $x1 + 200, $y1 + 20, $x2 + 200, $y2 + 20, $red);

        if ($i == 5) {
            imagettftext($im, 20, 0, $x1 + 170, $y2 + 50, $red, $font, "FX");
            imagettftext($im, 20, 0, $x1 + 170, $y1, $black, $font, $data2013[$i]);
        } else if ($i == 6) {
            imagettftext($im, 20, 0, $x1 + 170, $y2 + 50, $red, $font, "FN");
            imagettftext($im, 20, 0, $x1 + 170, $y1, $black, $font, $data2013[$i]);
        }
    }

    $ascii_value++;
}


//y-axis
imageline($im, ($column_width / 2) + 200, $y2 + 20, ($column_width / 2) + 200, 20, $black);
//x-axis
imageline($im, ($column_width / 2 + 200), $y2 + 20, $x2 + 200, $y2 + 20, $black);


imagettftext($im, 30, 0, 700, 80, $black, $font, '2012/2013');
imagettftext($im, 20, 0, 1000, 400, $black, $font, 'Znamka');
imagettftext($im, 20, 90, 260, 250, $black, $font, 'Pocet studentov');


$max_value2 = max($data2014);

$ascii_value = 65;
for ($i = 0; $i < $columns; $i++) {

    $column_height = ($height / 100) * (( $data2014[$i] / $max_value2) * 95);

    $x1 = (($i + 2) * $column_width) * 0.45;
    $y1 = ($height - $column_height) * 0.45;
    $x2 = ((($i + 2) * $column_width) - $padding) * 0.45 - 20;
    $y2 = $height * 0.45;

    if ($i > -1 && $i < 5) {
        imagefilledrectangle($im, $x1 + 200, $y1 + 620, $x2 + 200, $y2 + 620, $green);
        $str = chr($ascii_value);
        imagettftext($im, 20, 0, $x1 + 170, $y2 + 650, $black, $font, $str);
        imagettftext($im, 20, 0, $x1 + 170, $y1+600, $black, $font, $data2014[$i]);
    } else {
        imagefilledrectangle($im, $x1 + 200, $y1 + 620, $x2 + 200, $y2 + 620, $red);

        if ($i == 5) {
            imagettftext($im, 20, 0, $x1 + 170, $y2 + 650, $red, $font, "FX");
            imagettftext($im, 20, 0, $x1 + 170, $y1+600, $black, $font, $data2014[$i]);
        } else if ($i == 6) {
            imagettftext($im, 20, 0, $x1 + 170, $y2 + 650, $red, $font, "FN");
            imagettftext($im, 20, 0, $x1 + 170, $y1+600, $black, $font, $data2014[$i]);
        }
    }

    $ascii_value++;
}


//y-axis
imageline($im, ($column_width / 2) + 200, $y2 + 620, ($column_width / 2) + 200, 620, $black);
//x-axis
imageline($im, ($column_width / 2 + 200), $y2 + 620, $x2 + 200, $y2 + 620, $black);


imagettftext($im, 30, 0, 700, 680, $black, $font, '2013/2014');
imagettftext($im, 20, 0, 1000, 1000, $black, $font, 'Znamka');
imagettftext($im, 20, 90, 260, 850, $black, $font, 'Pocet studentov');

$max_value3 = max($data2015);

$ascii_value = 65;
for ($i = 0; $i < $columns; $i++) {

    $column_height = ($height / 100) * (( $data2015[$i] / $max_value3) * 95);

    $x1 = (($i + 2) * $column_width) * 0.45;
    $y1 = ($height - $column_height) * 0.45;
    $x2 = ((($i + 2) * $column_width) - $padding) * 0.45 - 20;
    $y2 = $height * 0.45;

    if ($i > -1 && $i < 5) {
        imagefilledrectangle($im, $x1 + 200, $y1 + 1220, $x2 + 200, $y2 + 1220, $green);
        $str = chr($ascii_value);
        imagettftext($im, 20, 0, $x1 + 170, $y2 + 1250, $black, $font, $str);
        imagettftext($im, 20, 0, $x1 + 170, $y1+1200, $black, $font, $data2015[$i]);
    } else {
        imagefilledrectangle($im, $x1 + 200, $y1 + 1220, $x2 + 200, $y2 + 1220, $red);

        if ($i == 5) {
            imagettftext($im, 20, 0, $x1 + 170, $y2 + 1250, $red, $font, "FX");
            imagettftext($im, 20, 0, $x1 + 170, $y1+1200, $black, $font, $data2015[$i]);
        } else if ($i == 6) {
            imagettftext($im, 20, 0, $x1 + 170, $y2 + 1250, $red, $font, "FN");
            imagettftext($im, 20, 0, $x1 + 170, $y1+1200, $black, $font, $data2015[$i]);
        }
    }

    $ascii_value++;
}


//y-axis
imageline($im, ($column_width / 2) + 200, $y2 + 1220, ($column_width / 2) + 200, 1220, $black);
//x-axis
imageline($im, ($column_width / 2 + 200), $y2 + 1220, $x2 + 200, $y2 + 1220, $black);


imagettftext($im, 30, 0, 700, 1280, $black, $font, '2014/2015');
imagettftext($im, 20, 0, 1000, 1600, $black, $font, 'Znamka');
imagettftext($im, 20, 90, 260, 1300, $black, $font, 'Pocet studentov');
header('Content-type: image/jpeg');
imagejpeg($im, "graf2.jpeg", 100);
//imagejpeg($image);
//imagepng($image);
chmod("graf2.jpeg", 0755);
imagedestroy($im);
?>