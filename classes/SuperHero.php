<?php
class SuperHero {
    public $HeroName;
    public $AliasName;
    public $SuperPowers;
    public $Weakness;
    public $Courage;
    public $Morale;

    //Construct metoden til at gøre info indtastning nemmere
function __construct($HeroName, $AliasName, $SuperPowers, $Weakness, $Courage, $Morale) {
    $this->HeroName = $HeroName;
    $this->AliasName = $AliasName;
    $this->SuperPowers = $SuperPowers;
    $this->Weakness = $Weakness;
    $this->Courage = $Courage;
    $this->Morale = $Morale;
}
};

