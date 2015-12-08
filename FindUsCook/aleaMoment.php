<?php

	use Parse\ParseQuery;
	use Parse\ParseObject;

	include '../Methods/IncludeParse.php';

	function getAllRestaurantsAround(){

		
		try {
		$query = new ParseQuery("Restaurant");
		$results = $query->find();

		}
		catch (ParseException $ex){
			echo $ex;
		}
		return $results;
	}

	$restaurants = getAllRestaurantsAround();

	function getRandomRestaurant($listRestaurant){

		$random= rand(0,count($listRestaurant)-1);

		return $listRestaurant[$random];

	}


	if ($restaurants != null) {
		$restaurant = getRandomRestaurant($restaurants);

		$name = $restaurant->get('name');
		//echo '<br>';
		$description = $restaurant ->get('description');
		//echo '<br>';
		$addresse = $restaurant ->get('address');
		//echo '<br>';
		$ville = $restaurant ->get('city');
		//echo '<br>';
		$codepostal = $restaurant ->get('postal');

		$website = $restaurant ->get('webSite');
		//echo '<br>';
		$photo = $restaurant ->get('picture');
		if($photo != null) {
			$image = '<img width="200px" class="img-rounded logo" src="'.$photo->getURL().'"/>';
		}

	}
	
?>