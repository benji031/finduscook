<?

	use Parse\ParseQuery;
	use Parse\ParseObject;
	use Parse\ParseGeoPoint;

	include __DIR__.'/IncludeParse.php';

	class RestaurantManager{


		var $latitude;
		var $longitude;

		function __construct($latitude,$longitude){
			$this->latitude=$latitude;
			$this->longitude=$longitude;
		}


		function getAllRestaurantsAround($klm){

			try {

				$userPos = new ParseGeoPoint(floatval($this->latitude),floatval($this->longitude));


				$query = new ParseQuery("Restaurant");

				$query->withinKilometers("coord", $userPos,$klm);
		
		// Final array of objects
				$results = $query->find();


				if($results != null){
					return $results;
				}
			
			}
			catch (ParseException $ex){
				echo $ex;
			}	

		return null;
	}

		function getRandomRestaurantArround($klm){

			$listRestaurant = $this->getAllRestaurantsAround($klm);

			if($listRestaurant != null){
				$random= rand(0,count($listRestaurant)-1);

				return $listRestaurant[$random];
			}

			return null;
			
		}

}


?>