<?php


require 'connect1.php';

//$result = $db -> query("SELECT * FROM inventory");

//$sql = "SELECT Inventory_ID, Part_Number, Descripton, Quantity, Price , Date_Received FROM Inventory";
$result = $db -> query("SELECT * FROM inventory");

//print_r ($result);


//call the funtion
changeColumnName($db);
//change column name of date_received column to date_updated
function changeColumnName($db){
        $db->query("ALTER TABLE `inventory` CHANGE `Date_Received` `Date_Updated` VARCHAR(255);");
    }

//call the function
trimColumn($db);
//trim the description column to a length of 20
function trimColumn($db){
        $db->query("ALTER TABLE `inventory` CHANGE `Description` `Description` VARCHAR(20);");
    }

//function to remove the timestamp from date_received
function removeTimeStamp($dateStr){
		return substr($dateStr,0,10);
	}


//print in table form

if ($result -> num_rows >0) {
    //table heading 
    echo "<table><tr><th>Inventory_ID</th><th>Part_Number</th><th>Descripton</th><th>Quantity</th><th>Price</th><th>Date_Updated</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //calling removeTimeStamp function to remove timestamp from it, leaving behind on the date
        echo "<tr><td>".$row["Inventory_Id"]."</td><td>".$row["Part_Number"]."</td><td>".$row["Description"]."</td><td>".$row["Quantity"]."</td><td>".$row["Price"]."</td><td>".removeTimeStamp($row["Date_Updated"])."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
//close database
$db -> close();

?>
