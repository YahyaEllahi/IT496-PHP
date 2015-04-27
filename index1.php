<?php
	
    require 'Person.php';
    require 'Address.php';
	$person = new Person;
	$address = new Address;
	echo $person -> firstName = "Yahya".'<br/>';
    echo $person -> lastName = "Ellahi".'<br/>';
	echo $person -> age = "22".'<br/>';
	echo $address -> street1 = "250 Jaycee Court".'<br/>';
	echo $address -> street2 = "Apt 210".'<br/>';
	echo $address -> city = "Mankato".'<br/>';
	echo $address -> state = "MN".'<br/>';
	echo $address -> zipCode = "56001".'<br/>';

?>