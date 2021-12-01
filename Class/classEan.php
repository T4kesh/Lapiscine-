<?php

class Ean 
{

    private string $ean;

    public function __construct(string $ean)
    {
        $this->ean = $ean;
    }

    public function getEan(): string
    {
        return $this->ean;
    }

    public function setEan(string $ean): void
    {
        $this->ean = $ean;
    }


    public function draw()
    {
        $implodeEan = str_split($this->ean);

        if (count($implodeEan) == 8) {
           $this->CodeEan8();
        } elseif (count($implodeEan) == 13) {
           $this->CodeEan13();
        }
        $message = implode($this->ean);
        echo $message;
    }

    private function CodeEan8()
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


        $message = $normal. (implode($partOne)) . $central . (implode($partTwo)) .$normal;



        print_r($message);
        echo '<br>';
        echo '<br>';
        echo '<br>';

        $strMessage = str_split($message);
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



    private function CodeEan13()
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
        echo "<br>";
        echo "<br>";
        echo "keyModuleEan";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "firstEan";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "secondEan";
        echo "<br>";
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


        echo "<br>";
        echo "<br>";
        echo "MessageEan";
        echo "<br>";

        $messageEan = $normal . (implode($firstEan)) . $central . (implode($secondEan)) . $normal;
        print_r($messageEan);
        echo "<br>";
        echo "<br>";
        $finalMessageEan = str_split($messageEan);


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



}