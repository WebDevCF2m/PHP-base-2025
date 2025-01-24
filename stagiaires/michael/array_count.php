<?php
// on peut remplir un tableau en mettant la variable avec []
$cf2m[]="un";
$cf2m[]="deux";
$cf2m[]="trois";
var_dump($cf2m);
$lulu=["a"];

function myCount(array $tab)
{
    if(!empty($tab)){
        $nb =0;
        foreach($tab as $i){
            $nb++;
        }
        return $nb;
    }
    return "vide";
}

echo count ($cf2m);
echo "<hr>";
echo myCount($cf2m);
echo "<hr>";
echo myCount($lulu);