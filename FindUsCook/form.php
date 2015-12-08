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
      <input type="text" placeholder="coordonees?" name="coordonees"/>
      <input type="text" placeholder="Description" name="description"/>
      <fieldset>
        <input type="radio" value="Fast" value="Fast" name="fast"/>
        <input type="radio" value="Normal" Value="Normal" name="fast"/>
      </fieldset>
      <input type="text" placeholder="Nom" name="nom"/>
      <input type="text" placeholder="CP" name="Postal"/>
      <input type="text" placeholder="Site Web" name="website"/>
      <input type="submit" value="Envoyer"/>
    </form>
  </body>
</html>
