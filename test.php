<?php
	
   $address = "701 East 34th Street, Tacoma, WAsh 98404";
   echo "the address is " . $address . "<br>";
   $url = 'http://www.locationsquare.com/address_parser/results.php?address=' . $address;
  // $url = "http://localhost/geocode/results.php?address=%22701%20East%2034th%20Street,%20Tacoma,%20WA%2098404%22"/
   echo "url is " . $url . "<br>";

	if (file_exists($url))
  {
		echo "File Exists<br>";
	}
	else
	{
		echo "File doesn't exist<br>";
	}
   $xmlvalue = simplexml_load_file($url);
   //$xmlvalue = simplexml_load_file($url) or die("feed not loading");
   var_dump($xmlvalue);
   $street = (string) $xmlvalue->street;
   $city = (string) $xmlvalue->city;
   $state = (string) $xmlvalue->state;
   $zip = (string) $xmlvalue->zip;
   $country = (string) $xmlvalue->country;
      
	echo "<br>";
	echo "street is " . $street . "<br>";
	echo "city is " . $city . "<br>";
	echo "state is " . $state . "<br>";
	echo "zip is " . $zip . "<br>";
	echo "country is " . $country . "<br>";


?>