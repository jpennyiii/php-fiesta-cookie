<?php
$meandmyself = array(
			array(1,'Bulbasaur','Grass','Poison','Overgrow', 45,49,49),
			array(2,'Ivysaur','Grass','Poison','Overgrow', 60,62,63),
			array(3,'Venusaur','Grass','Poison','Overgrow',80,82,83),
			array(4,'Charmander','Fire','N/A','Blaze', 39,52,43),
			array(5,'Charmeleon','Fire','N/A','Blaze', 58,64,58),
			array(6,'Charizard','Fire','Flying','Blaze', 78,84,78),
			array(7,'Squirtle','Water','N/A','Torrent', 44,48,65),
			array(8,'Wartortle','Water','N/A','Torrent', 59,63,80),
			array(9,'Blastoise','Water','N/A','Torrent', 79,83,100),
			array(10,'Caterpie','Bug','N/A','Shield Dust', 50,20,55),
		)		
		;
			hp_sum($meandmyself);
		// echo hp_sum($meandmyself);
       		ave_attack($meandmyself);
		// echo ave_attack($meandmyself);
function hp_sum($array1){
	$sum =0;
    foreach($array1 as $ar){
    $sum += $ar[5];
    }
    return $sum;
}

function ave_attack($array1){
	$attk = 0;
    $div =0;
    foreach($array1 as $ar){
    	$attk +=$ar[6];
        $div+=1;
    }
	return $attk/$div;
}
?>