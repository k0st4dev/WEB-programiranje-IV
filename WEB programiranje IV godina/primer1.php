<?php

$boje=array("crvena", "plava", "zuta", "zelena");
$duzina = count($boje);
for($x=0;$x<$duzina;$x++)
{
    if($x==($duzina-2))
    echo $boje[$x];
    else if($x!=($duzina-1))
    echo $boje[$x].', ';
    else if($x==($duzina-1))
    echo " i ".$boje[$x];

    
}
?>