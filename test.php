<?php
// $woeid = 638242;
$weather = file_get_contents ("https://www.metaweather.com/api/location/638242");


$weather = json_decode($weather, true);

?>

<?php
// echo $weather[0]["woeid"];
// print_r ($weather);

// print_r ($weather);


$ort = $weather["consolidated_weather"];
$bla = $weather ["title"];
// echo $bla;

$weather = $weather["consolidated_weather"][0];
$min_temp = $weather["min_temp"];
$min_temp = round($min_temp);
// echo $min_temp;

$max_temp = $weather["max_temp"];
$max_temp = round($max_temp);
// echo $max_temp;

$weatherstate = $weather["weather_state_abbr"]. ".svg";

// $datum = date ("d.m.y");

$morgen = strtotime("+1 day");
$morgenist = date ("d.m.20y", $morgen);
$uebermorgen = strtotime ("+2 day");
$uebermorgenist = date ("d.m.20y", $uebermorgen);

$abbr = $weather["weather_state_abbr"];


$weather_morgen=$ort[1];
$min_temp_m = $weather_morgen["min_temp"];
$min_temp_m = round($min_temp_m);

$max_temp_m = $weather_morgen["max_temp"];
$max_temp_m = round($max_temp_m);

$weatherstate_m = $weather_morgen["weather_state_abbr"] . ".svg";
$abbr_m = $weather_morgen["weather_state_abbr"];


$weather_uebermorgen=$ort[2];
$min_temp_um = $weather_uebermorgen["min_temp"];
$min_temp_um = round($min_temp_um);

$max_temp_um = $weather_uebermorgen["max_temp"];
$max_temp_um = round($max_temp_um);

$weatherstate_um = $weather_uebermorgen["weather_state_abbr"] . ".svg";
$abbr_um = $weather_uebermorgen["weather_state_abbr"];


$min_temp_m = round($min_temp_m);


function status_m($abbr_m =""){
  if ($abbr_m == "c") {
    echo "Die Sonne lacht! Perfektes Eiswetter!";
}
  elseif ($abbr_m == "lc") {
    echo "Warm genug für eine Kugel (oder zwei...)";

}

elseif ($abbr_m == "hr") {
  echo "Volle Deckung! Komm' lieber zu uns in Warme!";
}
else {
  echo "Ganz einfach: ist es warm, iss' ein Eis! Ist es kalt: trink' ein Käffchen ¯\_(ツ)_/¯";
}

}

function status_um($abbr_um =""){
  if ($abbr_um == "c") {
    echo "Die Sonne lacht! Perfektes Eiswetter!";
}
  elseif ($abbr_um == "lc") {
    echo "Warm genug für eine Kugel (oder zwei...)";

}

elseif ($abbr_um == "hr") {
  echo "Volle Deckung! Komm' lieber zu uns in Warme!";
}
else {
  echo "Ganz einfach: ist es warm, iss' ein Eis! Ist es kalt: trink' ein Käffchen ¯\_(ツ)_/¯";
}

}





function status($abbr =""){
  if ($abbr == "c") {
    echo "Die Sonne lacht! Perfektes Eiswetter!";
}
  elseif ($abbr == "lc") {
    echo "Warm genug für eine Kugel (oder zwei...)";

}

elseif ($abbr == "hr") {
  echo "Volle Deckung! Komm' lieber zu uns in Warme!";
}
else {
  echo "Ganz einfach: ist es warm, iss' ein Eis! Ist es kalt: trink' ein Käffchen ¯\_(ツ)_/¯";
}

}


 ?>
