<?php

use Parse\ParseQuery;

require(__DIR__.'/../Methods/Restaurant.php');

class Test extends PHPUnit_Framework_TestCase
{
    public function testAddRestaurant()
    {

        $myRest = new Restaurant("23", "12", true, "Rue du test unitaire", "AGILE", "Superbe resto qui s'emmerde a faire des tests unitaire.", "Unit tests", "32456", "http://www.facebook.com");
        $objectId = $myRest->add();


        $query = new ParseQuery("Restaurant");
        $query->equalTo("objectId", $objectId);
        $results = $query->find();

        $this->assertEquals(1, count($results));

        $resto = $results[0];
        $this->assertEquals("Rue du test unitaire", $resto->get("address"));
        $this->assertEquals("AGILE", $resto->get("city"));
        $this->assertEquals("Superbe resto qui s'emmerde a faire des tests unitaire.", $resto->get("description"));
        $this->assertEquals("Unit tests", $resto->get("name"));
        $this->assertEquals("32456", $resto->get("postal"));
        $this->assertEquals("http://www.facebook.com", $resto->get("website"));


    }
}
?>