<?php

$marineUnits = array('Intercessors', 'Aggressors', 'Terminators', 'Eradicators');
$chaosUnits = ['Noise marines', 'Havocs', 'Possessed', 'Warp talons'];

echo '<h1>'.$marineUnits[1].'</h1>';
echo '<h1>'.$chaosUnits[0].'</h1>';

echo '<h2>Unidades de marines del Caos:</h2><ul>';

sort($chaosUnits);
for ($i=0; $i< count($chaosUnits); $i++){
    echo '<li>'.$chaosUnits[$i].'</li>';
}
echo '</ul>';


echo '<h2>Unidades de marines leales:</h2><ul>';

arsort($marineUnits);
foreach( $marineUnits as $unit){
    echo '<li>'.$unit.'</li>';
}
echo '</ul>';

$daemons = ['slaanesh'=> 'daemonettes', 'khorne'=>'bloodletters', 'tzeench'=> 'horrors', 'nurgle'=> 'nurglings'];

echo '<h2>Demonios del caos:</h2><ul>';

foreach( $daemons as $god => $daemon ){
    echo '<li><b>'.ucfirst($god).':</b>   '.ucfirst($daemon).'</li>';
}
echo '</ul>';

$legions = [
    1=>
    ["primarch"=>"Lion ElJohnson",
        "legion"=> "Dark Angels"],
    ["primarch"=>"REDACTED",
        "legion"=> "REDACTED"],
    ["primarch"=>"Fulgrim",
        "legion"=> "Emperor's Children"],
    ["primarch"=>"Perturabo",
        "legion"=> "Iron Warriors"],
    ["primarch"=>"The Khan",
        "legion"=> "White Scars"],
    ["primarch"=>"Leman Russ",
        "legion"=> "Space Furries"]
];

array_pop($legions);
$legions[6] = ["primarch"=>"Leman Russ", "legion"=> "Space Wolves"];
array_push($legions, ["primarch"=>"Rogal Dorn", "legion"=> "Imperial Fists"]);
unset($legions[2]);


echo '<h1>Legiones de los Adeptus Astartes:</h1><ul>';
foreach($legions as $number=> $legion){
    echo '<li><strong>#'.$number.':</strong>   ';
    foreach($legion as $key=>$name){
        echo '<b>'.ucfirst($key).':</b> '.$name.' <br>';
    }
    echo '</li>';
}
echo '</ul>';

$randomIndex = array_rand($legions);
echo '<h1>Legión del mes: '.$legions[$randomIndex]["legion"].'</h1>';

$reverseLegions = array_reverse($legions);
echo '<h1>Legiones vistas desde atrás:</h1><ul>';
foreach($reverseLegions as $number=> $legion){
    echo '<li><strong>#'.$number.':</strong>   ';
    foreach($legion as $key=>$name){
        echo '<b>'.ucfirst($key).':</b> '.$name.' <br>';
    }
    echo '</li>';
}
echo '</ul>';

echo array_search(  ["primarch"=>"Fulgrim", "legion"=> "Emperor's Children"], $legions).'<br>';
echo count($legions).'<br>';
echo sizeof($legions).'<br>';