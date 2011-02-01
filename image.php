<?php
// Add values to the graph
if(isset($_GET['ranks'])){	
	$graphValues=array_reverse(explode(',',$_GET['ranks']));
	$counter=count($graphValues);
	}





// Define .PNG image
header("Content-type: image/png");
$imgWidth=100;
$imgHeight=100;

// Create image and define colors
$image=imagecreate($imgWidth, $imgHeight);
$colorWhite=imagecolorallocate($image, 255, 255, 255);
$colorGrey=imagecolorallocate($image, 192, 192, 192);
$colorBlue=imagecolorallocate($image, 0, 0, 255);

//border
imageline($image, 0, 0, 0, 90, $colorGrey);
imageline($image, 0, 0, 90, 0, $colorGrey);
imageline($image, 90, 0, 90, 90, $colorGrey);
imageline($image, 0, 90, 90, 90, $colorGrey);


// Create grid
for ($i=0; $i<10; $i++){
imageline($image, $i*9, 0, $i*9, 90, $colorGrey);
imageline($image, 0, $i*9, 90, $i*9, $colorGrey);
}

// Create line graph
for ($i=0; $i<$counter-1; $i++){
switch($i):
case 0:
if($graphValues[$i]!=0)
imagestring($image,5,0,$graphValues[$i]*.3,$graphValues[$i],$colorBlue);
imageline($image, $i*9, ($graphValues[$i])*.3, ($i+1)*9, ($graphValues[$i+1])*.3, $colorBlue);
break;
case $counter-2:
imagestring($image,3,$i*9,$graphValues[$i+1]*.3,$graphValues[$i+1],$colorBlue);
default:
imageline($image, $i*9, ($graphValues[$i])*.3, ($i+1)*9, ($graphValues[$i+1])*.3, $colorBlue);
endswitch;
}
/*

// Create bar charts
for ($i=0; $i<10; $i++){
imagefilledrectangle($image, $i*25, (250-$graphValues[$i]), ($i+1)*25, 250, $colorDarkBlue);
imagefilledrectangle($image, ($i*25)+1, (250-$graphValues[$i])+1, (($i+1)*25)-5, 248, $colorLightBlue);
}
*/


imagepng($image);
imagedestroy($image);

