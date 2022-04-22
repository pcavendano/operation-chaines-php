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
	$trim_password = ctype_space($unverified_password);
	$error_code = 'has spaces at beginning or end';
	for($i=0; $i < strlen($unverified_password);$i++){
		if (strlen($unverified_password) == trim($unverified_password)) {
			return  'has spaces at beginning or end';
			if(strpos($unverified_password[$i], ' ') !== false){}

		}
	}



	$unverified_password = $trim_password == true? "true":"false";
	echo $error_code;
	return $error_code;
};


$password_1 = " 0&a24223A2 ";
$password_2 = "0 &a22223A2";
$password_3 = "0(&a24223A2";
$password_4 = "0ê&a22223A2";
$password_5 = "0e&a22222A2";
$password_6 = "2e&a22222A2";
$password_7 = "0&a22223A";

echo '<div>'."Exercice 2".'</div>' ;
echo "<p>";
echo 'Chaîne du mot de passe contrôlée : '.$password_1 .' -> valide </p>';
echo '<div class = "password">'.'Validation ave la fonction password_verification -> Le mot de passe est '.password_verification($password_1)."<br>"."<br>"."</div>";
echo 'Chaîne du mot de passe contrôlée : '.$password_2 .' -> valide </p>';
echo '<div class = "password">'.'Validation ave la fonction password_verification -> Le mot de passe est '.password_verification($password_2)."<br>"."<br>"."</div>";
echo 'Chaîne du mot de passe contrôlée : '.$password_3 .' -> valide </p>';
echo '<div class = "password">'.'Validation ave la fonction password_verification -> Le mot de passe est '.password_verification($password_3)."<br>"."<br>"."</div>";
echo 'Chaîne du mot de passe contrôlée : '.$password_4 .' -> valide </p>';
echo '<div class = "password">'.'Validation ave la fonction password_verification -> Le mot de passe est '.password_verification($password_4)."<br>"."<br>"."</div>";
echo 'Chaîne du mot de passe contrôlée : '.$password_5 .' -> valide </p>';
echo '<div class = "password">'.'Validation ave la fonction password_verification -> Le mot de passe est '.password_verification($password_5)."<br>"."<br>"."</div>";
echo 'Chaîne du mot de passe contrôlée : '.$password_6 .' -> valide </p>';
echo '<div class = "password">'.'Validation ave la fonction password_verification -> Le mot de passe est '.password_verification($password_6)."<br>"."<br>"."</div>";
echo 'Chaîne du mot de passe contrôlée : '.$password_7 .' -> valide </p>';
echo '<div class = "password">'.'Validation ave la fonction password_verification -> Le mot de passe est '.password_verification($password_7)."<br>"."<br>"."</div>";
echo "</p>";


?>