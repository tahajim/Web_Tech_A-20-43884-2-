<?php

echo "For loop: [1-20]<br>";
for($num01 = 1; $num01 <= 20; $num01++){
    echo $num01, " ";
    if($num01 == 5){
        break;
    }

}

echo "<br>";

$num02 = 1;
$count = 0;

echo "While Loop Even Number[1-20] <br>";

while ($num02 <= 20) {

    if ($num02 % 2 == 0) {
        echo $num02, " ";
        $count++;
    }

    if ($count == 5) {
        break;
    }

    $num02++;
}

echo "<br>";

$fruits = array(
    "Apple"  => "Red",
    "Banana" => "Yellow",
);

echo "Foreach loop: <br>";
foreach ($fruits as $key => $value) {
    echo $key, " = ", $value, "<br>";
}

?>