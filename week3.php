<?php
	
//creating three different arrays
$array_all = array();
$array_int = array();
$array_string = array();
//open and read text file
$inputFile = fopen("input.txt", "r");
//input all text to an array
while(!feof($inputFile)) {
$array_all[] = fgets($inputFile);
}
//print array having everything from the text file
echo "array_all<br>";
foreach($array_all as $q) {
    echo $q . "<br>";
}

//separating numbers from the text or viceversa
foreach($array_all as $q) {
 if ((int)$q == 0 && $q != "0"){
     $array_string[] = $q;
 
   }
    else{
$array_int[] = (int)$q;
   }
}

//sorting and printing array for integers
asort($array_int);
echo'<br>';
foreach ($array_int as $q){
echo $q.'<br>';
}
//sorting and printing array for the text
asort($array_string);
echo '<br>';
foreach ($array_string as $q){
echo $q.'<br>';
}

//file close
fclose($inputFile);
?>