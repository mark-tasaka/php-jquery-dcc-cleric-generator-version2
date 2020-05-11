<?php


function getDeity($input)
{
    $a00 = array("Shul", "God of the Moon", "Lawful");
    $a01 = array("Klazath", "God of War", "Lawful");
    $a02 = array("Ulesh", "God of peace", "Lawful");
    $a03 = array("Choranus", "The Seer Father, lord of creation", "Lawful");
    $a04 = array("Daenthar", "The Mountain Lord, greater god of earth and industry", "Lawful");
    $a05 = array("Gorhan", "the Helmed Vengeance, god of valour and chivalry", "Lawful");
    $a06 = array("Justicia", "Goddess of justice and mercy", "Lawful");
    $a07 = array("Aristemis", "The Insightful One, demi-goddess of true seeing & strategy", "Lawful");
    $a08 = array("Amun Tor", "God of mysteries & riddles", "Neutral");
    $a09 = array("Ildavir", "Goddess of nature", "Neutral");
    $a10 = array("Pelagia", "Goddess of the sea", "Neutral");
    $a11 = array("Cthulhu", "Priest of the Old Ones", "Neutral");
    $a12 = array("Ahriman", "God of death & disease", "Chaos");
    $a13 = array("Hidden Lord", "God of secrets", "Chaos");
    $a14 = array("Azi Dahaka", "Demon prince of storms & waste", "Chaos");
    $a15 = array("Bobugbubilz", "Demon lord of evil amphibians", "Chaos");
    $a16 = array("Cadixtat", "Chaos titan", "Chaos");
    $a17 = array("Nimlurun", "The unclean one, lord of filth & pollution", "Chaos");
    $a18 = array("Malotoch", "Carrion crow god", "Chaos");

    $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18);
    
    return $array1[$input];
    
}

function getDeityWeapons($input)
{
    $weapons = "";

    if($input >=0 && $input <=7)
    {
        $weapons = "Club, mace, sling, staff & warhammer";
    }

    if($input >=8 && $input <=11)
    {
        $weapons = "Dagger, mace, sling, staff & sword (any)";
    }

    if($input >11)
    {
        $weapons = "Axe (any), bow (any), dagger, dark & flail";
    }

    return $weapons;
}


function getDeityUnholy($input)
{
    $unholy = "";

    if($input >=0 && $input <=7)
    {
        $unholy = "Undead, demons, devils, chaotic extraplanar creatures, monsters, Chaos Primes, chaotic humanoids & chaotic dragons";
    }

    if($input >=8 && $input <=11)
    {
        $unholy = "Mundane animals, undead, demons, devils, monsters, lycanthropes & perversions of nature";
    }

    if($input >11)
    {
        $unholy = "Angles, paladins, lawful dragons, Lords of Law, Lawful Primes & Law-aligned humaniods";
    }

    return $unholy;

}


?>