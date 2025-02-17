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
        <div class="is-size-4">
          Das Wetter in <?php echo $bla ?> heute, am <?php echo date("d.m.20y") ?>: <br>
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

        <div class="is-size-6">
          <p class="is-size-6">
            <?php status($abbr) ?> <br>


          </p>
        </div>
        <div class="is-flex-tablet has-text-justified-widescreen-only ">

        <div class="is-size-6">
          <br><br><br><br>
          <p> Morgen, am <u><?php echo $morgenist ?></u> wird es </p>
          <p>zwischen <strong><?php echo $min_temp_m ?></strong> °C und <strong>
          <?php echo $max_temp_m ?> </strong>°C.</p> <p> Das heißt: <?php status_m($abbr_m) ?></p>
          <img src="img/<?php echo $weatherstate_m ?>" width="200" alt="">
        </div>
        <div class="is-size-6">
          <br><br><br><br>
          <p> Übermorgen, am <u><?php echo $uebermorgenist ?> </u>wird es </p>
          <p>zwischen <strong><?php echo $min_temp_um ?></strong> °C und
        <strong>  <?php echo $max_temp_um ?></strong> °C.</p> <p> Das heißt: <?php status_m($abbr_um) ?></p>
          <img src="img/<?php echo $weatherstate_um ?>" width="200" alt="">
        </div>
      </div>
      </div>
    </div>
  </body>
</html>
