<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajout de Restaurant</title>
  </head>
  <body>
    <form action="../Methods/addBDD.php" method="post">
      <input type="text" placeholder="Adresse" name="adresse"/>
      <input type="text" placeholder="Ville" name="city"/>
      <input type="text" placeholder="latitude ?" name="latitude"/>
      <input type="text" placeholder="longitude ?" name="longitude"/>
      <input type="text" placeholder="Description" name="description"/>
      <fieldset>
        <input type="radio" value="true" name="fast"/>
        <input type="radio" value="false" name="fast"/>
      </fieldset>
      <input type="text" placeholder="Nom" name="nom"/>
      <input type="text" placeholder="CP" name="postal"/>
      <input type="text" placeholder="Site Web" name="website"/>
      <input type="submit" value="Envoyer"/>
    </form>
  </body>
</html>
