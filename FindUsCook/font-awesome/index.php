<!DOCTYPE html>
<html>

<head>
	
  <meta charset="utf-8" />

  <link href="style.css" rel="stylesheet" media="all" type="text/css">
  <link href="bootstrap.css" rel="stylesheet" media="all" type="text/css">
  <link href="bootstrap-slider-master/css/bootstrap-slider.css" rel="stylesheet">
  <link href="bootstrap-slider-master/dependencies/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">

  <title>Accueil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="body">

        <div class="row">
            <div id="page" class="col-md-offset-4 col-xs-12 col-md-4">
            <img class="logo" src="logo_FindUSCook.png">
                <p>Type de restaurant :</p>
                <form action="find.php" method="get" accept-charset="utf-8" role="form">
                    

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
                    
                    <p>Pressé(e) ?</p>
                    <div class="radio">
                        
                            <input type="radio" name="optionsradio" id="optionsradio1" value="oui" checked>
                        <label for="optionsradio1">Oui</label>
                    </div>
                    <div class="radio">
                        
                            <input type="radio" name="optionsradio" id="optionsradio2" value="non">
                        <label for="optionsradio2">Non</label>
                    </div>
                <!-- <p>Tu aime le sexe ?</p>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsradio2" id="optionsradio1" value="oui" checked>Oui
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsradio2" id="optionsradio2" value="non" disabled>Non
                    </label>
                </div> -->
                
                <div class="slider-example">
                    <p>Distance :</p><br/>
                    <input id="ex8" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="50" data-slider-step="1" data-slider-value="10"/>
                </div>
                <div class="button_go">
                    <button class="btn btn-default" type="submit">Find me a restaurante</button>
                </div>   
            </form>
        </div>
    </div>
</div>



<script type="text/javascript" src="bootstrap-slider-master/dependencies/js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap-slider-master/js/bootstrap-slider.js"></script>

<script>
    $(document).ready(function()
    {
                // With JQuery
                $("#ex8").slider({
                    tooltip: 'always'
                });
            });

</script>


</body>

</html>