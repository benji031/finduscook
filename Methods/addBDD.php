<?php

use Parse\ParseQuery;
use Parse\ParseObject;
use Parse\ParseGeoPoint;

include 'IncludeParse.php';

$coordonees = new ParseGeoPoint($_POST['coordonees']);
$resto = new ParseObject("Restaurant");

$resto->set("Adresse",$_POST['adresse']);
$resto->set("city",$_POST['city']);
$resto->set("coord",$coordonees);
$resto->set("description",$_POST['description']);
$resto->set("fast",$_POST['fast']);
$resto->set("name",$_POST['nom']);
$resto->set("postal",$_POST['Postal']);
$resto->set("website",$_POST['website']);

try {
  $resto->save();
  echo 'New object created with objectId: ' . $resto->getObjectId();
} catch (ParseException $ex) {
  // Execute any logic that should take place if the save fails.
  // error is a ParseException object with an error code and message.
  echo 'Failed to create new object, with error message: ' . $ex->getMessage();
}
?>
