<?php
require_once 'classes/SuperHero.php';

//Laver ny objekter til Batman, Spiderman, Hulk
$batman = new SuperHero(
    "Batman",
    "Bruce Wayne",
"Ingen superkræfter, men er ekstremt stærk og veltrænet. Udstyret med avanceret teknologi, gadgets og et utroligt skarpt sind.",
"Ingen overnaturlige kræfter, så han kan blive såret som en almindelig menneske. Hans mentale tilstand og følelser kan også påvirke hans beslutningstagning.",
"Beskytter Gotham City og dets uskyldige borgere. Han kæmper imod kriminalitet og uretfærdighed med sin viden og kampfærdigheder.",
"Følger en streng moral om ikke at tage liv, selv når han står overfor de mest ondsindede modstandere. Hans metoder kan være hårde, men han søger altid at beskytte de svage og stoppe kriminalitet.");

$spiderman = new SuperHero(
    "Spiderman",
    "Peter Parker",
    "Superstyrke, hurtighed og smidighed, evnen til at klatre på vægge, spider-sense (fornemmelse for fare), kan skyde web med sin egen opfindelse (web-shooters).",
    "Ikke usårlig – kan blive såret som enhver anden. Har også et personligt ansvar, der kan gøre ham sårbar, især for dem han elsker.",
     "Beskytter New York og kæmper mod kriminalitet og superkriminalitet. Han har en stærk følelse af ansvar, og hans heltemod stammer fra hans egen skyldfølelse over ikke at have stoppet sin onkels mord.",
     "Handler altid ud fra princippet om, at med stor magt følger stort ansvar. Han prøver at gøre det rigtige, selv når han møder personlige udfordringer og ofre."
);

$hulk = new SuperHero(
    "Hulk",
    "Bruce Banner",
    "Ekstrem styrke, næsten uovervindelig. Jo mere han bliver vred, jo stærkere bliver han. Uafhængig af skader heles han hurtigt.",
    "Når han er i sin menneskelige form (Bruce Banner), er han en almindelig mand med de samme fysiske begrænsninger som enhver anden. Hans vrede kan også være en uforudsigelig faktor, der gør det svært at kontrollere Hulk.",
    "Bekæmper både ydre trusler og de indre konflikter mellem hans menneskelige og monstrøse side. Hans venskaber og alliancer er ofte præget af hans vanskeligheder med at kontrollere sin vrede.",
    "Selvom han kæmper med sin indre vrede og destruktive natur, forsøger Hulk altid at beskytte de uskyldige og hjælpe dem, der har brug for ham. Han er ofte en forsvarer af de svage, selvom han kæmper for at finde fred med sin destruktive side."
);



//Udskriver info om Batman
echo "Egenskaber for " . $batman->HeroName . "<br><br>" .
"Alias: " . $batman->AliasName . "<br>" . 
"Superkræfter: " . $batman->SuperPowers . "<br>" . 
"Svaghed: " . $batman->Weakness . "<br>" . 
"Natur: " . $batman->Courage . "<br>" . 
"Moral: " . $batman->Morale . "<br><br>";

//Udskriver info om Spiderman
echo "Egenskaber for " . $spiderman->HeroName . "<br><br>" .
"Alias: " . $spiderman->AliasName . "<br>" . 
"Superkræfter: " . $spiderman->SuperPowers . "<br>" . 
"Svaghed: " . $spiderman->Weakness . "<br>" . 
"Natur: " . $spiderman->Courage . "<br>" . 
"Moral: " . $spiderman->Morale . "<br><br>";

//Udskriver info om Hulk
echo "Egenskaber for " . $hulk->HeroName . "<br><br>" .
"Alias: " . $hulk->AliasName . "<br>" . 
"Superkræfter: " . $hulk->SuperPowers . "<br>" . 
"Svaghed: " . $hulk->Weakness . "<br>" . 
"Natur: " . $hulk->Courage . "<br>" . 
"Moral: " . $hulk->Morale . "<br><br>";