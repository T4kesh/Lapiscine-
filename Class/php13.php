<?php

function CodeEan13($ean)
{
$arrayA = ["___XX_X", "__XX__X", "__X__XX", "_XXXX_X", "_X___XX", "_XX___X", "_X_XXXX", "_XXX_XX", "_XX_XXX", "___X_XX"];
$arrayB = ["_X__XXX", "_XX__XX", "__XX_XX", "_X____X", "__XXX_X", "_XXX__X", "____X_X", "__X___X", "___X__X", "__X_XXX"];
$arrayC = ["XXX__X_", "XX__XX_", "XX_XX__", "X____X_", "X_XXX__", "X__XXX_", "X_X____", "X___X__", "X__X___", "XXX_X__"];

$arrayMotif = ["AAAAAA", "AABABB", "AABBAB", "AABBBA", "ABAABB", "ABBAAB", "ABBBAA", "ABABAB", "ABABBA", "ABBABA"];
$ean = "";
$arrayEAN = str_split($ean);
$firstEan = [];
$secondEan = [];
$keyEan = $arrayEAN[0];
$normal = "X_X";
$central = "_X_X_";


echo "arrayEAN";
echo "<br>";
print_r($arrayEAN);
echo "<br>";


for ($i = 1; $i <= 6; $i += 1) {
    $firstEan[] = $arrayEAN[$i];
}

for ($i = 7; $i < 13; $i += 1) {
    $secondEan[] = $arrayEAN[$i];
}

$keyModuleEan = $arrayMotif[$keyEan];
$keyModuleEan = str_split($keyModuleEan);


echo "<br>";
echo "keyEan";
echo "<br>";
print_r($keyEan);
echo "<br>";
echo "<br>";
echo "keyModuleEan";
echo "<br>";
print_r($keyModuleEan);
echo "<br>";
echo "<br>";
echo "firstEan";
echo "<br>";
print_r($firstEan);
echo "<br>";
echo "<br>";
echo "secondEan";
echo "<br>";
print_r($secondEan);
echo "<br>";
echo "<br>";


foreach ($firstEan as $key => $value) {
    if ($keyModuleEan[$key] === 'A') {
        $firstEan[$key] = $arrayA[$value];
    }

    if ($keyModuleEan[$key] === 'B') {
        $firstEan[$key] = $arrayB[$value];
    }
}
foreach ($secondEan as $key => $value) {
    $secondEan[$key] = $arrayC[$value];
}


print_r($firstEan);
echo "<br>";
print_r($secondEan);
echo "<br>";
echo "MessageEan";
echo "<br>";

$messageEan = $normal . (implode($firstEan)) . $central . (implode($secondEan)) . $normal;
print_r($messageEan);
echo "<br>";
echo "<br>";
$finalMessageEan = str_split($messageEan);


print_r($finalMessageEan);
echo "<br>";

echo "<div style='display: flex; margin: 50px;'>";

foreach ($finalMessageEan as $value) {
    if ($value === "X") {
        echo "<div class='black' style ='background-color: black; height: 100px; width: 3px;'></div>";
    } else {
        echo "<div class='white' style ='background-color: white; height: 100px; width: 3px;'></div>";
    }
}
echo "</div>";
}
