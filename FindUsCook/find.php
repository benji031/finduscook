<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8" />
	<link href="bootstrap.css" rel="stylesheet" media="all" type="text/css">
	<link href="bootstrap-slider-master/css/bootstrap-slider.css" rel="stylesheet">
	<link href="bootstrap-slider-master/dependencies/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
    <link href='https://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<link href="style.css" rel="stylesheet" media="all" type="text/css">

	<title>Resto Aléatoire</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php 
	try{
	//include '../Methods/ParseMethods.php';
		include '../Methods/RestaurantManager.php';



		$restauManager = new RestaurantManager($_POST['lattitude'],$_POST['longitude']);

		$restau = $restauManager->getRandomRestaurantArround(intval($_POST['km']));


	} catch(Exexption $e){
		echo $e;
	}


	?>

	<div class="container">
		
		<div class="row">
			<div class="col-xs-12">
				<?php 
				if ($restau == null) {
					echo "<h3 class=\"restoInfo\">Pas de restau !</h3>";
				}
				else {
					?>
					<?php echo "<img class='img_find' src=\"".$restau->get("picture")->getURL()."\"/>";?>
				<div class="row">
					<h3 class="restoInfo"><?php echo $restau->get("name");?></h3>		
				</div>
				<div class="row">
					<h4 class="restoInfo"><?php echo $restau->get("address");?>, <?php echo $restau->get("postal"); echo $restau->get("city");?></h2>		
					</div>
					<div class="row">
						<?php echo "<a class='lien_restau' target='_blank' href=\"".$restau->get("website")."\">Lien vers le site Web</a>" ?>
					
					</div>
					<div class="row">
						<h5 class="restoInfo"><?php echo $restau->get("description");?></h5>		
					</div>

					<div class="row">
						<button class="btn btn-default buttoncenter findme" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Changez les "critères"</button>
					</div>	
				</div>
					
					<?php
				}
				?>
				
			</div>

			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<form action="find.php" method="post" accept-charset="utf-8">
						<div class="row">
							<div class="collapse" id="collapseExample">
								<div class="well">
									<div class="type">
										<p>Type de restaurant :</p>
										<div class="checkbox checkbox-primary">
											<input type="checkbox" name="optionsCheckbox"  id="optionsCheckbox1" value="pizza">
											<label for="optionsCheckbox1">Pizza</label>
										</div>


										<div class="checkbox checkbox-primary">
											<input type="checkbox" name="optionsCheckbox" id="optionsCheckbox2" value="sushi">
											<label for="optionsCheckbox2">Sushi</label>
										</div>


										<div class="checkbox checkbox-primary">
											<input type="checkbox" name="optionsCheckbox" id="optionsCheckbox3" value="fastfood">
											<label for="optionsCheckbox3">Fast Food</label>
										</div>
									</div>
									<p>Pressé(e) ?</p>
									<div class="radio">

										<input type="radio" name="optionsradio" id="optionsradio1" value="oui" checked>
										<label for="optionsradio1">Oui</label>
									</div>
									<div class="radio">

										<input type="radio" name="optionsradio" id="optionsradio2" value="non">
										<label for="optionsradio2">Non</label>
									</div>                
									<div class="slider-example">
										<p>Distance :</p><br/>
										<input id="ex8" name="km" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-max="50" data-slider-step="1" data-slider-value="10"/>
									</div>
									<input id="lattitude" name="lattitude" type="hidden" />
									<input id="longitude" name="longitude" type="hidden" />

								</div>
							</div>            
							<button class="btn btn-default buttoncenter findme btn_find" type="submit">Trouve moi un restau !</button>
						</div>
					</form>
				</div>
			</div>
		</div>


					<script type="text/javascript" src="bootstrap-slider-master/dependencies/js/jquery.min.js"></script>
    				<script type="text/javascript" src="bootstrap-slider-master/js/bootstrap-slider.js"></script>
    				<script src="../Methods/location.js" type="text/javascript"></script>
    				<script src="bootstrap-slider-master/js/bootstrap.min.js" type="text/javascript" charset="utf-8" ></script>
    				<script src="bootstrap-slider-master/js/npm.min.js" type="text/javascript" charset="utf-8" async defer></script>

					<script>
						$(document).ready(function()
						{
                // With JQuery
                $("#ex8").slider({
                	tooltip: 'always'
                });
                getPosition();
            });

					</script>
				</body>
				</html>