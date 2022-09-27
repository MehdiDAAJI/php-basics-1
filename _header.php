<?php

//Here I declare all my variables
//I need a variable to declare a ring bearer :
$ringBearer = "Frodo";
$ringCreator = strtoupper("Sauron");
$fellowshipOfTheRing = 9;
$isWearing = true;
$middleEarth = "";
$ringBearerSentence = "The ring is wore by $ringBearer";
$wizard = 'Gandalf';
$fellowshipMembers = ["Frodo", "Sam", "Boromir", "Gandalf", "Gimli", "Legolas", "Aragorn", "Merry", "Pippin"];
$fellowshipDatas = [
    ["Frodo", "Sam", "Boromir", "Gandalf", "Gimli", "Legolas", "Aragorn", "Merry", "Pippin"],
    ["hobbit", "hobbit", "human", "human", "dwarf", "elf", "human", "hobbit", "hobbit"],
    ["sting", "kid sword", "sword and shield", "stick", "axe", "arrow", "two hands sword", "dagger", "dagger"]
];

//Sachant que chaque tableau à l'interieur de mon tableau multidimensionnel à la même longueur :
//Pour le nombre d'entrées de ma Première entrée de tableaux (celle comprenant Frodo, Sam etc...);
//Je boucle
for($fellowshipData = 0; $fellowshipData < count($fellowshipDatas[0]); $fellowshipData++ ){
    //Pour chaque entrée de mon tableau multidimensionnel :
    //Je boucle
    for($index = 0; $index < count($fellowshipDatas); $index++){
        // en décomposant je finis par afficher : TableauMultiDimensionnel[entrée du tableau MultiDimensionnel][Entrée de l'index du tableau "interieur"]
        echo $fellowshipDatas[$index][$fellowshipData] . " ";
    }
    echo " <br>";
}

exit;
echo "I luv PHP <br><br><br>";