<?php





function Ean8(){



$arrayA = ["___XX_X","__XX__X","__X__XX","_XXXX_X","_X___XX","_XX___X","_X_XXXX","_XXX_XX","_XX_XXX","___X_XX"];
$arrayB = ["_X__XXX","_XX__XX","__XX_XX","_X____X","__XXX_X","_XXX__X","____X_X","__X___X","___X__X","__X_XXX"];
$arrayC = ["XXX__X_","XX__XX_","XX_XX__","X____X_","X_XXX__","X__XXX_","X_X____","X___X__","X__X___","XXX_X__"];
$codebarre = "";
$normal = "X_X";
$central = "_X_X_";
$PartieUn = [];
$PartieTwo = [];
$tableau = str_split($codebarre);


for ($i = 0 ; $i <= 3; $i += 1){
    $PartieUn[]= $tableau[$i];
}
for ($i = 4 ; $i <= 7; $i += 1){
    $PartieTwo[]= $tableau[$i];
}
foreach ($PartieUn as $key => $value){
    $PartieUn[$key] = $arrayA[$value];
}
foreach ($PartieTwo as $key => $value){
    $PartieTwo[$key] = $arrayC[$value];
}

$message = $normal . implode($PartieTwo) . $central . implode($PartieTwo) . $normal;
$finalmessage = str_split($message);

echo "<div style='display: flex; margin: 50px;'>";
foreach ($finalmessage as $value){
    if($value === 'X'){
        echo "<div class='black' style ='background-color: black; height: 100px; width: 3px;'></div>";
    } else{
        echo "<div class='white' style ='background-color: white; height: 100px; width: 3px;'></div>";
    }
}
echo "</div>";
}










