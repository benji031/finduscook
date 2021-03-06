<?php

use Parse\ParseQuery;
use Parse\ParseObject;
use Parse\ParseGeoPoint;

include 'IncludeParse.php';

class Restaurant{

	private $_latitude;
	private $_longitude;
	private $_isFast;
	private $_address;
	private $_city;
	private $_coord;
	private $_description;
	private $_nom;
	private $_postal;
	private $_website;
	private $_isValidated;

	function __construct($latitude, $longitude, $isFast, $address, $city, $description, $name, $postal, $website){
		$this->_latitude = $latitude;
		$this->_longitude = $longitude;
		$this->_isFast = $isFast;
		$this->_address = $address;
		$this->_city = $city;
		$this->_coord = $coord;
		$this->_description = $description;
		$this->_isFast = $isFast;
		$this->_nom = $nom;
		echo "je t'aime pas > " + $this->_nom;
		$this->_postal = $postal;
		$this->_website = $website;
		$this->_isValidated = false;
	}



	function add(){
		echo $this->_nom;
		$coordonees = new ParseGeoPoint(floatval($this->_latitude),floatval($this->_longitude));
		$resto = new ParseObject("Restaurant");
		$isFast = ($this->_isFast == "true")?true:false;
		$resto->set("address",$this->_address);
		$resto->set("city",$this->_city);
		$resto->set("coord",$this->coordonees);
		$resto->set("description",$this->_description);
		$resto->set("fast",$this->$isFast);
		$resto->set("name",$this->_nom);
		$resto->set("postal",$this->_postal);
		$resto->set("website",$this->_website);
		$resto->set("validated", $this->_isValidated);

		try {
		  $resto->save();
		  echo 'New object created with objectId: ' . $resto->getObjectId();
		} catch (ParseException $ex) {
		  // Execute any logic that should take place if the save fails.
		  // error is a ParseException object with an error code and message.
		  echo 'Failed to create new object, with error message: ' . $ex->getMessage();
		}
	}
}

echo var_dump($_POST);

$myRest = new Restaurant($_POST['latitude'], $_POST['longitude'], $_POST['fast'], $_POST['adresse'], $_POST['city'], $_POST['description'], $_POST['name'], $_POST['postal'], $_POST['website']);

$myRest->add();
?>
