<?php
//Henter klassen SuperHero
require_once 'classes/SuperHero.php';

//Laver Superman i SuperHero klassen
$superman = new SuperHero;

$superman->HeroName = "Superman";
$superman->AliasName = "Clark Kent";
$superman->SuperPowers = "Kan flyve, har superkræfter, er usårlig, har radarsyn";
$superman->Weakness = "Kan ikke tåle kryptonit (mister sine superkræfter og kan dø)";
$superman->Courage = "Beskytter mennesker";
$superman->Morale = "Gør altid alt rigtigt";

//Udskriver info om Superman
echo "Egenskaber for " . $superman->HeroName . "<br><br>" .
"Alias: " . $superman->AliasName . "<br>" .
"Superkræfter: " . $superman->SuperPowers . "<br>" .
"Svaghed: " . $superman->Weakness . "<br>" .
"Natur: " . $superman->Courage . "<br>" .
"Moral: " . $superman->Morale . "<br>";