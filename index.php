<?php

require_once "_header.php";

echo "
    hello fellowship ! <br> 
    The ring bearer is $ringBearer <br> 
    The ring creator is $ringCreator <br>
    ";

$ringBearer = "Gollum";
echo "The ring has been stolen by $ringBearer <br>";
$fellowshipOfTheRing = $fellowshipOfTheRing + 1;
echo "$fellowshipOfTheRing <br>";
echo "$middleEarth <br>";
echo $ringBearerSentence . 
    " and $ringCreator is looking after <br>";
include "wizard.php";

require_once "_footer.php";