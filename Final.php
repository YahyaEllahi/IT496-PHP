<?php
//connection
require 'connect5.php';

$array_all= array();
$array_string= array();

$inputFile = fopen("character.txt", "r");

while(!feof($inputFile)) {
$array_all[] = fgets($inputFile);
}

//foreach($array_all as $q) {
  //  echo $q . "<br>";
//}

foreach($array_all as $q) {
 if ((int)$q == 0 && $q != "0"){
     $array_string[] = $q;
 
   }
    else{
$array_int[] = (int)$q;
   }
}
foreach ($array_string as $q){
echo $q.'<br>';
}

foreach ($array_int as $q){
echo $q.'<br>';
}

print_r($array_string);

print_r(str_split($q));

$result = array_merge($array_string, str_split($q));
print_r($result);

generate_password();

function generate_password($length = 20){
  $str = '';
  $max = strlen($result) - 1;

  for ($i=0; $i < $length; $i++)
    $str .= $result[mt_rand(0, $max)];

  return $str;
}



?>