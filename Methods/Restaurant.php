<?php

use Parse\ParseQuery;
use Parse\ParseObject;
use Parse\ParseGeoPoint;

include __DIR__.'/IncludeParse.php';

class Restaurant {

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
		$this->_coord = new ParseGeoPoint(floatval($latitude),floatval($longitude));
		$this->_description = $description;
		$this->_isFast = $isFast;
		$this->_nom = $nom;
		$this->_postal = $postal;
		$this->_website = $website;
		$this->_isValidated = false;
	}



	function add(){
		
		$resto = new ParseObject("Restaurant");
		$myIsFast = ($this->_isFast == "true")?true:false;
		$resto->set("address",$this->_address);
		$resto->set("city",$this->_city);
		$resto->set("coord",$this->_coord);
		$resto->set("description",$this->_description);
		$resto->set("fast",$myIsFast);
		$resto->set("name",$this->_nom);
		$resto->set("postal",$this->_postal);
		$resto->set("website",$this->_website);
		$resto->set("validated", $this->_isValidated);

		try {
		  $resto->save();
		  return $resto->getObjectId();
		} catch (ParseException $ex) {
		  // Execute any logic that should take place if the save fails.
		  // error is a ParseException object with an error code and message.
		  echo 'Failed to create new object, with error message: ' . $ex->getMessage();
		}
	}
}
?>
