<?php

require('../Methods/RestaurantManager.php');

class Test extends PHPUnit_Framework_TestCase
{
    public function testGetAllRestaurantArroundNull()
    {
        $resto_manager = new RestaurantManager(12.0, 13.4);

        $list_restos = $resto_manager->getAllRestaurantsAround(1);

        //var_dump($list_restos);

        $this->assertEquals(null, $list_restos);

        // array_push($stack, 'foo');
        // $this->assertEquals('foo', $stack[count($stack)-1]);
        // $this->assertEquals(1, count($stack));

        // $this->assertEquals('foo', array_pop($stack));
        // $this->assertEquals(0, count($stack));
    }

    public function testGetRandomRestaurantArround() {
        $resto_manager = new RestaurantManager(43.6249627, 1.4304408);

        $list_restos = $resto_manager->getAllRestaurantsAround(1);

        $this->assertEquals(1, count($list_restos));
    }
}
?>