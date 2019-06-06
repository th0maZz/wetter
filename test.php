<?php
// $woeid = 638242;
$weather = file_get_contents ("https://www.metaweather.com/api/location/638242");


$weather = json_decode($weather, true);

?>

<?php
// echo $weather[0]["woeid"];
// print_r($weather);

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
$morgenist = date ("d.m.y", $morgen);
$uebermorgen = strtotime ("+1 day");
$uebermorgenist = date ("d.m.y", $uebermorgen);

$abbr = $weather["weather_state_abbr"];

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
  echo "Brrr! Komm' doch auf einen Kaffee vorbei!";
}




}


 ?>
