<?php

$side1= 14.8;
$side2 = 20.3;
$side3 = 25.3;

$angle1 = 36;
$angle2 = 53;
$angle3 = 91;

//formula for perimeter of triangle
$perimeter = $side1+$side2+$side3;

//constant to calculate area
$x = $perimeter/2;

//formula for calculating area 
$area = sqrt($x * ($x - $side1)*($x - $side2)*($x - $side3));

//Sine for angle 1
$sine = sin(deg2rad($angle1));

//Cosine for angle 1
$cosine = cos(deg2rad($angle1));

//Tangent for angle 1
$tangent = tan(deg2rad($angle1));

//printing results 
echo '<br/>';
echo "side1= 14.8".'<br/>';
echo "side2 = 20.3".'<br/>';
echo "side3 = 25.3".'<br/>';
echo '<br/>';
echo "angle1 = 36".'<br/>';
echo "angle2 = 53".'<br/>';
echo "angle3 = 91".'<br/>';
echo '<br/>';
echo "Perimeter = ".$perimeter.'<br/>';
echo '<br/>';
//echo "Area = ".$x.'<br/>';

echo "Area = ".$area.'<br/>';
echo '<br/>';
echo "Sine = ".$sine.'<br/>';
echo '<br/>';
echo "Cosine = ".$cosine.'<br/>';
echo '<br/>';
echo "Tangent = ".$tangent.'<br/>';
echo '<br/>';

?>