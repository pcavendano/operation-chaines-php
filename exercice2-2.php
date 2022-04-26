<?php
$tab_notes_billets= [100,50,20,10,5,2,1];
$montants = [
	3844,
	5266,
	144,
	686
];

function coupures_billets($montant, $tab_coupures){
	$tmp_array=[];
	for($i=0; $i< count($tab_coupures); $i++){
		if($tab_coupures[$i] <= $montant){
			$tmp_val = intdiv($montant, $tab_coupures[$i]);
			$tmp_array[$i][0]=$tmp_val;
			$tmp_array[$i][1]=$tab_coupures[$i];
			$montant = $montant - $tmp_array[$i][0] * $tab_coupures[$i];
		}
	}
return $tmp_array;
}



function aficher_coupures($montant, $coupures){
	echo "<h2>Décomposition de $montant$</h2>";
	$index=0;
	foreach($coupures as $coupure){
		echo '<p><span class="num">';
		echo $coupure[0];
		echo '</span><span> billet (s) de </span><span class="num">';
		echo $coupure[1];
		echo '</span></p>';
		$index++;
}
}

// execution des fonctions

echo '<div>'."Exercice 2 question 2".'</div>' ;
for($i=0;$i<count($montants);$i++){
	$coupures = coupures_billets($montants[$i], $tab_notes_billets);
	aficher_coupures($montants[$i], $coupures);
}


?>