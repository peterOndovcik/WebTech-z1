<?php


$image = imagecreatetruecolor(1000, 1500);

$white = imagecolorallocate($image, 255, 255, 255);
$yellow = imagecolorallocate($image, 255, 255, 0);
$black = imagecolorallocate($image, 0, 0, 0);
$blue = imagecolorallocate($image, 0, 0, 255);
$red = imagecolorallocate($image, 255, 0, 0);
$green = imagecolorallocate($image, 0, 255, 0);
$purple = imagecolorallocate($image, 255, 0, 255);

$gray = imagecolorallocate($image, 0xC0, 0xC0, 0xC0);
$darkgray = imagecolorallocate($image, 0x90, 0x90, 0x90);
$navy = imagecolorallocate($image, 0x00, 0x00, 0x80);
$pink = imagecolorallocate($image, 0xFF, 0x99, 0x99);



$data2013 = array(20, 11, 13, 7, 5, 0, 1);
$data2014 = array(20, 19, 6, 3, 1, 0, 0);
$data2015 = array(9, 19, 22, 0, 0, 0, 3);
$font = "./arial.ttf";

function getAngle($values) {
    $columns = count($values);
    $angles = array();
    $final = array();
    $sum = array_sum($values);
    for ($i = 0; $i < $columns; $i++) {
        $angles[$i] = round($values[$i] * (360 / $sum));
    }
    if (array_sum($angles) < 360) {
        $angles[0] += 360 - array_sum($angles);
    }

    $suma = 0;
    for ($i = 0; $i < count($angles); $i++) {
        $suma += $angles[$i];
        $final[$i] = $suma;
    }


    return $final;
}

$newlist1 = getAngle($data2013);
$newlist2 = getAngle($data2014);
$newlist3 = getAngle($data2015);


//FIRST
imagefill($image, 0, 0, $white);
// Make the 3D effect
for ($i = 280; $i > 260; $i--) {
    imagefilledarc($image, 500, $i, 400, 400, 0, $newlist1[0], $blue, IMG_ARC_PIE);
    imagefilledarc($image, 500, $i, 400, 400, $newlist1[0], $newlist1[1], $grey, IMG_ARC_PIE);
    imagefilledarc($image, 500, $i, 400, 400, $newlist1[1], $newlist1[2], $purple, IMG_ARC_PIE);
    imagefilledarc($image, 500, $i, 400, 400, $newlist1[2], $newlist1[3], $red, IMG_ARC_PIE);
    imagefilledarc($image, 500, $i, 400, 400, $newlist1[3], $newlist1[4], $yellow, IMG_ARC_PIE);
    imagefilledarc($image, 500, $i, 400, 400, $newlist1[5], $newlist1[6], $green, IMG_ARC_PIE);
}

imagefilledarc($image, 500, 260, 400, 400, 0, $newlist1[0], $navy, IMG_ARC_PIE);
imagefilledarc($image, 500, 260, 400, 400, $newlist1[0], $newlist1[1], $darkgray, IMG_ARC_PIE);
imagefilledarc($image, 500, 260, 400, 400, $newlist1[1], $newlist1[2], $purple, IMG_ARC_PIE);
imagefilledarc($image, 500, 260, 400, 400, $newlist1[2], $newlist1[3], $red, IMG_ARC_PIE);
imagefilledarc($image, 500, 260, 400, 400, $newlist1[3], $newlist1[4], $yellow, IMG_ARC_PIE);
imagefilledarc($image, 500, 260, 400, 400, $newlist1[5], $newlist1[6], $green, IMG_ARC_PIE);

   imagettftext($image, 25, 0, 430, 50, $black, $font, "2012/2013");
   imagettftext($image, 30, 0, 500, 350, $white, $font, "35.1% A");
   imagettftext($image, 25, 0, 350, 290, $black, $font, "19.3% B");
   imagettftext($image, 25, 0, 350, 185, $black, $font, "22.8% C");
   imagettftext($image, 20, 0, 520, 170, $black, $font, "12.3% D");
   imagettftext($image, 20, 0, 550, 240, $black, $font, "8.8% E");
   imagettftext($image, 20, 0, 650, 260, $black, $font, "1.8% FN");

imagefill($image, 0, 0, $white);

for ($i = 750; $i > 730; $i--) {
   imagefilledarc($image, 500, $i, 400, 400, 0, $newlist2[0], $blue, IMG_ARC_PIE);
   imagefilledarc($image, 500, $i, 400, 400, $newlist2[0], $newlist2[1], $gray, IMG_ARC_PIE);
   imagefilledarc($image, 500, $i, 400, 400, $newlist2[1], $newlist2[2], $purple, IMG_ARC_PIE);
   imagefilledarc($image, 500, $i, 400, 400, $newlist2[2], $newlist2[3], $red, IMG_ARC_PIE);
   imagefilledarc($image, 500, $i, 400, 400, $newlist2[3], $newlist2[4], $yellow, IMG_ARC_PIE);
  }
   
   imagefilledarc($image, 500, 730, 400, 400, 0, $newlist2[0], $navy, IMG_ARC_PIE);
   imagefilledarc($image, 500, 730, 400, 400, $newlist2[0], $newlist2[1], $darkgray, IMG_ARC_PIE);
   imagefilledarc($image, 500, 730, 400, 400, $newlist2[1], $newlist2[2], $purple, IMG_ARC_PIE);
   imagefilledarc($image, 500, 730, 400, 400, $newlist2[2], $newlist2[3], $red, IMG_ARC_PIE);
   imagefilledarc($image, 500, 730, 400, 400, $newlist2[3], $newlist2[4], $yellow, IMG_ARC_PIE);
 
   imagettftext($image, 25, 0, 430, 520, $black, $font, "2013/2014");
   imagettftext($image, 30, 0, 525, 830, $white, $font, "48% A");
   imagettftext($image, 30, 0, 335, 730, $black, $font, "38.3% B");
   imagettftext($image, 20, 0, 540, 650, $black, $font, "12.2% C");
   imagettftext($image, 20, 0, 575, 710, $black, $font, "6.1% D");
   imagettftext($image, 20, 0, 658, 725, $black, $font, "2% E");

   
   
   
imagefill($image, 0, 0, $white);

for ($i = 1210; $i >1190 ; $i--) {
   imagefilledarc($image, 500, $i, 400, 400, 0, $newlist3[0], $blue, IMG_ARC_PIE);
   imagefilledarc($image, 500, $i, 400, 400, $newlist3[0], $newlist3[1], $gray, IMG_ARC_PIE);
   imagefilledarc($image, 500, $i, 400, 400, $newlist3[1], $newlist3[2], $purple, IMG_ARC_PIE);
   imagefilledarc($image, 500, $i, 400, 400, $newlist3[5], $newlist3[6], $green, IMG_ARC_PIE);

}
   

   imagefilledarc($image, 500, 1190, 400, 400, 0, $newlist3[0], $navy, IMG_ARC_PIE);
   imagefilledarc($image, 500, 1190, 400, 400, $newlist3[0], $newlist3[1], $darkgray, IMG_ARC_PIE);
   imagefilledarc($image, 500, 1190, 400, 400, $newlist3[1], $newlist3[2], $purple, IMG_ARC_PIE);
   imagefilledarc($image, 500, 1190, 400, 400, $newlist3[5], $newlist3[6], $green, IMG_ARC_PIE);

   imagettftext($image, 25, 0, 430, 990, $black, $font, "2014/2015");
   imagettftext($image, 30, 0, 560, 1250, $white, $font, "17% A");
   imagettftext($image, 30, 0, 385, 1280, $black, $font, "35.8% B");
   imagettftext($image, 30, 0, 430, 1100, $black, $font, "41.5% C");
   imagettftext($image, 20, 0, 570, 1180, $black, $font, "5.7% FN");

header('Content-type: image/jpeg');
imagejpeg($image, "graf.jpeg", 100);
chmod("graf.jpeg", 0755);
imagedestroy($image);
?>