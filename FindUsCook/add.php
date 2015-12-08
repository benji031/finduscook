<?php 

include_once "../Methods/Restaurant.php";
if(isset($_POST)){
echo var_dump($_POST);

$myRest = new Restaurant($_POST['latitude'], $_POST['longitude'], $_POST['fast'], $_POST['adresse'], $_POST['city'], $_POST['description'], $_POST['name'], $_POST['postal'], $_POST['website']);

$myRest->add();
}


?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8" />
	<link href="bootstrap.css" rel="stylesheet" media="all" type="text/css">
	<link href="bootstrap-slider-master/css/bootstrap-slider.css" rel="stylesheet">
	<link href="bootstrap-slider-master/dependencies/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet" media="all" type="text/css">

	<title>Ajouter un restaurant</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<div class="container">
		
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<img class="logo" src="logo.FindUSCook.png">
				<form action="/FindUsCook/add.php" method="post">
					<div class="form-group btn btn-default">
						<label for="image">Image</label>
						<input type="file" id="image">
					</div>
					<div class="form-group">
						<label for="name">Nom du restaurant</label>
						<input type="text" class="form-control" id="name" placeholder="Name" name="name">
					</div>
					<div class="form-group">
						<label for="adresse">Adresse</label>
						<input type="text" class="form-control" id="address" placeholder="Address" name="address">
						<input type="text" class="form-control" id="codePostal" placeholder="Postal" name="postal">
						<input type="text" class="form-control" id="city" placeholder="City" name="city">
					</div>
					<div class="form-group">
						<label for="latitude">Latitude</label>
						<input type="text" class="form-control" id="latitude" placeholder="Latitude" name="latitude">
					</div>
					<div class="form-group">
						<label for="longitude">Longitude</label>
						<input type="text" class="form-control" id="longitude" placeholder="Longitude" name="longitude">
					</div>
					<div class="form-group">
						<label for="site">Site internet</label>
						<input type="text" class="form-control" id="site" placeholder="Website" name="website">
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<input type="text" class="form-control" id="description" placeholder="Description" name="description">
					</div>
					<label for="type">Type</label>
					<select class="form-control">
						<option>Pizza</option>
						<option>Sushi</option>
						<option>Fast Food</option>
					</select>
				    <fieldset>
				    	<label>Is fast</label>
				        <input type="radio" value="true" name="fast"/>
				        <input type="radio" value="false" name="fast"/>
			        </fieldset>

					<button type="submit" class="btn btn-default">Envoyer</button>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="bootstrap-slider-master/dependencies/js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap-slider-master/js/bootstrap-slider.js"></script>
	<script type="text/javascript" src="bootstrap-slider-master/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap-slider-master/js/npm.js"></script>
</body>
</html>