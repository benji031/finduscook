<?php

	use Parse\ParseQuery;
	use Parse\ParseObject;
	use Parse\ParseGeoPoint;

	include 'IncludeParse.php';

	function getAllRestaurantsAround($klm){

		
		try {

		$userPos = new ParseGeoPoint(floatval($_GET['latitude']),floatval($_GET['longitude']));


		$query = new ParseQuery("Restaurant");

		$query->withinKilometers("coord", $userPos,$klm);
		// Limit what could be a lot of points.
		
		// Final array of objects
		$results = $query->find();


		if($results =null){
			echo "Aucun restaurant n'est disponible dans la zone";
		}


		}
		catch (ParseException $ex){
			echo $ex;
		}
		return $results;
	}

	$restaurants = getAllRestaurantsAround(1);

	function getRandomRestaurant($listRestaurant){

		$random= rand(0,count($listRestaurant)-1);

		return $listRestaurant[$random];

	}


	if ($restaurants != null) {
		$restaurant = getRandomRestaurant($restaurants);

		echo $name = $restaurant->get('name');
		//echo '<br>';
		$description = $restaurant ->get('description');
		//echo '<br>';
		$addresse = $restaurant ->get('address');
		//echo '<br>';
		$ville = $restaurant ->get('city');
		//echo '<br>';
		$codepostal = $restaurant ->get('postal');
		//echo '<br>';
		$photo = $restaurant ->get('picture');
		if($photo != null) {
			$image = '<img width="200px" src="'.$photo->getURL().'"/>';
		}

	}
	
?>

<html>
	<div id="infoposition">
	</div>
</html>

<script>

function maPosition(position) {

 var infopos = "Position déterminée :\n";
 infopos += "Latitude : "+position.coords.latitude +"\n";
 infopos += "Longitude: "+position.coords.longitude+"\n";

 document.getElementById("infoposition").innerHTML = infopos;
 window.location.href="ParseMethods.php?latitude="+position.coords.latitude+"&longitude="+position.coords.longitude;
 

}

 if(navigator.geolocation){
 navigator.geolocation.getCurrentPosition(maPosition);
 navigator.geolocation.getCurrentPosition(getMyLatitude);
 navigator.geolocation.getCurrentPosition(getMyLatitude);
}

</script>