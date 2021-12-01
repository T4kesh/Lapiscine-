<?php

function CodeEan8($ean01)
{
$arrayA = ["___XX_X","__XX__X","__X__XX","_XXXX_X","_X___XX","_XX___X","_X_XXXX","_XXX_XX","_XX_XXX","___X_XX"];
$arrayC = ["XXX__X_","XX__XX_","XX_XX__","X____X_","X_XXX__","X__XXX_","X_X____","X___X__","X__X___","XXX_X__"];
$partOne = [];
$partTwo = [];
$ean01 = "";
$tableau = str_split($ean01);
$normal = "X_X";
$central = "_X_X_";


for ($i = 0; $i <= 3; $i += 1){
    $partOne[] = $tableau[$i];
}

for ($i = 4; $i <= 7; $i += 1){
    $partTwo[] = $tableau[$i];
}

foreach($partOne as $key => $value){
    $partOne[$key] = $arrayA[$value];
}
foreach($partTwo as $key => $value){
    $partTwo[$key] = $arrayC[$value];
}
print_r($partOne);

$message = $normal. (implode($partOne)) . $central . (implode($partTwo)) .$normal;



print_r($message);
echo '<br>';
echo '<br>';
echo '<br>';

$strMessage = str_split($message);
print_r($strMessage);
echo '<br>';
echo '<br>';
echo '<br>';


echo "<div style='display: flex;'>";
    foreach($strMessage as $value){
        if ($value === "X") {
            echo "<div class='black' style ='background-color: black; height: 100px; width: 2px;'></div>";
        }
        else
        {
            echo "<div class='white' style ='background-color: white; height: 100px; width: 2px;'></div>";
        }
    }
echo "</div>";
}


