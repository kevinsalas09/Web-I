<?php
$ceu = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", 
"France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", 
"Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", 
"Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", 
"Austria" => "Vienna", "Poland" => "Warsaw");

$temps = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
?>
<html>

<head>
    <title>WorkShop 2</title>
</head>

<body>
    <h1 style="text-align: center;">WorkShop 2</h1>
    <h3>Countries and Capitals</h3>
    <?php ksort($ceu);
    foreach ($ceu as $key => $value)
        echo "The capital of ".$key." is ".$value.".<br />";
    ?>
    <h3>Temperatures</h3>
    <?php
    $uniquetemps = array_unique($temps);
    $average = 0;
    foreach ($uniquetemps as $value){
        $average+=$value;
    }
    $average = $average / count($uniquetemps);
    echo("Average temperature is: " . $average);
    sort($uniquetemps);
    $lowest = array_slice($uniquetemps, 0, 5);
    $highest = array_slice($uniquetemps, count($uniquetemps) - 5, count($uniquetemps) - 1);
    echo("<br />");
    echo("<br /> List of 5 lowest temperatures (no duplicates): ");
    $tempstr = "";
    foreach ($lowest as $value){
        $tempstr .= strval($value) . ", ";
    }
    echo rtrim($tempstr,", ");
    echo("<br />");
    echo("<br /> List of 5 highest temperatures (no duplicates): ");
    $tempstr = "";
    foreach ($highest as $value){
        $tempstr .= strval($value) . ", ";
    }
    echo rtrim($tempstr,", ");
    ?>
</body>

</html>