<?php

	use Parse\ParseQuery;
	use Parse\ParseObject;

	include 'IncludeParse.php';

	function getAllRestaurants(){

		
		try {
		$query = new ParseQuery("Restaurant");
		$results = $query->find();

		}
		catch (ParseException $ex){
			echo $ex;
		}
		return $results;
	}

	$restaurants = getAllRestaurants();

	function getRandomRestaurant($listRestaurant){

		$random= rand(0,count($listRestaurant)-1);

		return $listRestaurant[$random];

	}

	if ($restaurants != null) {
		$restaurant = getRandomRestaurant($restaurants);

		echo $restaurant->get('name');
		echo '<br>';
		echo $restaurant ->get('description');
		echo '<br>';
		echo $restaurant ->get('address');
		echo '<br>';
		echo $restaurant ->get('city');
		echo '<br>';
		echo $restaurant ->get('postal');
		echo '<br>';
		$photo = $restaurant ->get('picture');
		if($photo != null) {
			echo '<img width="200px" src="'.$photo->getURL().'"/>';
		}

	}
	
?>