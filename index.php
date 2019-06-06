<!DOCTYPE html>

<?php
include "test.php";

 ?>

<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nicht so tolle Wetter App</title>

    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="hero is-fullheight is-dark is-bold">
      <div class="container has-text-centered">
        <div class="content is-small">
          Das Wetter in <?php echo $bla ?> am <?php echo date("d.m.y") ?>: <br>
          <p> Übrigens, morgen ist der <?php echo $morgenist ?> :-)  </p>
          <p> Und übermorgen ist der <?php echo $uebermorgenist ?> :-)  </p>
        </div>

      <div class="rel state">
        <img src="img/<?php echo $weatherstate ?>" alt="Wetter Icon" width="200" height="200">
        <p>
          <span class="min-temp">
            <?php echo $min_temp ?> °C
          </span>

          <span class="max-temp">
            <?php echo $max_temp ?> °C
          </span>
        </p>
        </div>

        <div class="content is-large state">
          <p class="is-size-1 is-uppercase has-text-weight-bold">
            <?php status($abbr) ?> <br>


          </p>
        </div>
      </div>
      </div>
    </div>
  </body>
</html>
