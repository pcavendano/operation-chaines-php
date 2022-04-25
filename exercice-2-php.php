<?php
/*
* Codez la fonction qui contrôle une chaîne de caractères issue de la saisie d'un mot de passe avec les contraintes suivantes :
* Chaque caractère doit être (après avoir éliminé les caractères espaces éventuels au début et à la fin) :
* soit une lettre alphabétique non accentuée majuscule ou minuscule,
* soit un chiffre,
* soit un caractère spécial parmi les caractères !#$%&*+-:;=
*/
//Cette chaîne de caractères doit contenir au moins :
//10 caractères
// une lettre alphabétique non accentuée majuscule
// une lettre alphabétique non accentuée minuscule
// un chiffre
// un caractère spécial parmi les caractères !#$%&*+-:;=
// 6 caractères différents

function password_verification($unverified_password){
	$trimed_password = trim($unverified_password);
	$error_code = array (
		array("espaces", "Les espaces ne sont pas permis"),
		array("pas assez long","Le mot de passe n'est pas assez long"),
		array("6 differents","Le mot de passe n'utilise pas 6 characteres differents")
	);
	$valid_password= "Mot de passe valid";
	$valid_char = 0;
	$one_min=0;
	$one_maj = 0;
	$one_num = 0;
	$one_special = 0;
	$one_char = 0;
	$six_chars_array = [];
	$pass_len = strlen($trimed_password);
	if ($pass_len < 10){
		return $error_code[1][1];
	}
	for($i=0; $i < $pass_len;$i++){

		$char_val = $trimed_password[$i];
		if ($char_val === " ") {
			$error = $error_code[0][1];
			$valid_password = "Mot de passe invalid";
			return  $valid_password;
		}
		$iter = ord($char_val);
		if((ord($char_val) >= 48 and ord($char_val) <= 57) || (ord($char_val) >= 65 and ord($char_val) <= 90) || (ord($char_val) >= 97 and ord($char_val) <= 122) || (ord($char_val) >= 35 and ord($char_val) <= 38) || (ord($char_val) >= 42 and ord($char_val) <= 43) || (ord($char_val) >= 58 and ord($char_val) <= 59) || (ord($char_val) == 33 ) || (ord($char_val) == 49) || (ord($char_val) == 61)){
			//verifie la valeur unicode pour les chiffres, les lettres majuscules et minuscules
			if((ord($char_val) >= 48 and ord($char_val) <= 57)){
				if(!in_array(ord($char_val), $six_chars_array)){
					array_push($six_chars_array, ord($char_val));
				}
				$one_num = 1;
			}
			if (ord($char_val) >= 65 and ord($char_val) <= 90){
				if(!in_array(ord($char_val), $six_chars_array)){
					array_push($six_chars_array, ord($char_val));
				}
				$one_maj = 1;
			}
			if (ord($char_val) >= 97 and ord($char_val) <= 122) {
				if(!in_array(ord($char_val), $six_chars_array)){
					array_push($six_chars_array, ord($char_val));
				}
				$one_min = 1;
			}
			if (ord($char_val) >= 35 and ord($char_val) <= 38){
				if(!in_array(ord($char_val), $six_chars_array)){
					array_push($six_chars_array, ord($char_val));
				}
				$one_char = 1 ;

			}
			if ((ord($char_val) >= 42 and ord($char_val) <= 43) ){
				if(!in_array(ord($char_val), $six_chars_array)){
					array_push($six_chars_array, ord($char_val));
				}
				$one_char = 1 ;
			}
			if(ord($char_val) >= 58 and ord($char_val) <= 59){
				if(!in_array(ord($char_val), $six_chars_array)){
					array_push($six_chars_array, ord($char_val));
				}
				$one_char = 1;
			}
			if (ord($char_val) == 33 ){
				if(!in_array(ord($char_val), $six_chars_array)){
					array_push($six_chars_array, ord($char_val));
				}
				$one_char = 1;
			}
			if (ord($char_val) == 49) {
				if(!in_array(ord($char_val), $six_chars_array)){
					array_push($six_chars_array, ord($char_val));
				}
				$one_char = 1;
			}
			if (ord($char_val) == 61){
				if( !in_array(ord($char_val), $six_chars_array)){
					array_push($six_chars_array, ord($char_val));
				}
				$one_char = 1;
			}
			$valid_char = 1;
		}else{
			$valid_password = "Mot de passe invalid";
			return  $valid_password;
		}


	}
	if ($valid_char == 1 && $one_num == 1 && $one_maj == 1 && $one_min == 1 && count($six_chars_array) >= 6){
		return $valid_password;
	}else{
		return $error_code[2][1];
	}

};


$password_1 = " 0&a24223A2 ";
$password_2 = "0 &a22223A2";
$password_3 = "0(&a24223A2";
$password_4 = "0ê&a22223A2";
$password_5 = "0e&a22222A2";
$password_6 = "2e&a22222A2";
$password_7 = "0&a22223A";

//Execution du programme

echo '<div>'."Exercice 2 ".'</div>' ;
$letreuni =ord("Z");
echo '<div>'.$letreuni.'</div>' ;
echo "<p>";
echo 'Chaîne du mot de passe contrôlée : '.$password_1 .' -> valide </p>';
echo '<div class = "password">'.'Validation ave la fonction password_verification -> '.password_verification($password_1)."<br>"."<br>"."</div>";
echo 'Chaîne du mot de passe contrôlée : '.$password_2 .' -> non valide </p>';
echo '<div class = "password">'.'Validation ave la fonction password_verification ->'.password_verification($password_2)."<br>"."<br>"."</div>";
echo 'Chaîne du mot de passe contrôlée : '.$password_3 .' -> non valide </p>';
echo '<div class = "password">'.'Validation ave la fonction password_verification -> '.password_verification($password_3)."<br>"."<br>"."</div>";
echo 'Chaîne du mot de passe contrôlée : '.$password_4 .' -> non valide </p>';
echo '<div class = "password">'.'Validation ave la fonction password_verification -> '.password_verification($password_4)."<br>"."<br>"."</div>";
echo 'Chaîne du mot de passe contrôlée : '.$password_5 .' -> valide </p>';
echo '<div class = "password">'.'Validation ave la fonction password_verification -> '.password_verification($password_5)."<br>"."<br>"."</div>";
echo 'Chaîne du mot de passe contrôlée : '.$password_6 .' -> non valide </p>';
echo '<div class = "password">'.'Validation ave la fonction password_verification -> '.password_verification($password_6)."<br>"."<br>"."</div>";
echo 'Chaîne du mot de passe contrôlée : '.$password_7 .' -> non valide </p>';
echo '<div class = "password">'.'Validation ave la fonction password_verification -> '.password_verification($password_7)."<br>"."<br>"."</div>";
echo "</p>";
?>