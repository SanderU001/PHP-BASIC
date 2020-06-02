<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Title</title>
    <?php
      include 'includes/functions.php'
    ?>
  </head>
  <?php
      include 'includes/menu.php'
    ?>
    <form action="producten.php" method="get"><!-- dit laten staan! -->
    <?php
      echo "Hieronder een lijst met producten die je bij ons kunt bestellen en de prijs per stuk:";
      $productnummer = $_GET['productnummer'] ?? 0;
      $aantalProd = $_GET['aantal'] ?? 0;
      $leeftijd = $_GET['leeftijd'] ?? 0;
      $producten = array("appels", "peren", "chocolade", "pindakaas", "boter", "meloen", "cola", "papier", "tabak", "sla");
      $prijs = array(0.25, 0.30, 1.50, 1.99, 1.79, 3.69, 2.24, 1.99, 10, 0.99);
      $totaal= $prijs [$productnummer];
      echo $totaal;
      $productnaam= $producten [$productnummer];
      echo $productnaam;   
      $totaal = $prijs[$productnummer] * $aantalProd;
    
      ?>

      <table>
      <tr>
          <th>#</th>
          <th>product</th>
          <th>prijs per stuk</th>
      </tr>
      <tr>
          <td>0</td>
          <td> <?php echo $producten[0]; ?> </td>
          <td><?php echo $prijs[0]; ?></td>
      </tr>
      <tr>
          <td>1</td>
          <td> <?php echo $producten[1]; ?> </td>
          <td><?php echo $prijs[1]; ?></td>
      </tr>
      <tr>
          <td>2</td>
          <td> <?php echo $producten[2]; ?> </td>
          <td><?php echo $prijs[2]; ?></td>
      </tr>
      <tr>
          <td>3</td>
          <td> <?php echo $producten[3]; ?> </td>
          <td><?php echo $prijs[3]; ?></td>
      </tr>
      <tr>
          <td>4</td>
          <td> <?php echo $producten[4]; ?> </td>
          <td><?php echo $prijs[4]; ?></td>
      </tr>
      <tr>
          <td>5</td>
          <td> <?php echo $producten[5]; ?> </td>
          <td><?php echo $prijs[5]; ?></td>
      </tr>
      <tr>
          <td>6</td>
          <td> <?php echo $producten[6]; ?> </td>
          <td><?php echo $prijs[6]; ?></td>
      </tr>
      <tr>
          <td>7</td>
          <td> <?php echo $producten[7]; ?> </td>
          <td><?php echo $prijs[7]; ?></td>
      </tr>
      <tr>
          <td>8</td>
          <td> <?php echo $producten[8]; ?> </td>
          <td><?php echo $prijs[8]; ?></td>
      </tr>
      <tr>
          <td>9</td>
          <td> <?php echo $producten[9]; ?> </td>
          <td><?php echo $prijs[9]; ?></td>
      </tr>
      </table>

    

    <p>Vul hieronder het productnummer in van het product wat je wilt bestellen en de hoeveelheid.</p> 
    <p><label>productnummer: </label><input type="text" name="productnummer"> &nbsp;&nbsp;<label>aantal: </label><input type="text" name="aantal"></p><!-- dit laten staan! -->
    
    <p>Vul je leeftijd in voor korting</p>
    <p><label>leeftijd: </label><input type="text" name="leeftijd"></p><!-- dit laten staan! -->
    <p><button type="submit" name="submit">Bereken totaal</button></p><!-- dit laten staan! -->
    <p>voor <?php getAmount(); echo " ". $productnaam; ?> betaal je: <?php echo $totaal; ?></p>
    <p>je bent <?php echo $leeftijd; ?> dus je korting is: <?php korting() ?> </p>

    </form><!-- dit laten staan! -->
  </body>
</html>