<?php

$temperature = 40;

if($temperature < 10){
    echo "It's cold";
}
else if(($temperature > 10) and ($temperature < 25)){
    echo "It's warm";
}
else if($temperature > 25){
    echo "It's Hot";
}
else{
    echo "Invalid Input";
}

echo "<br>";

$day = 1;

switch($day){
    case 1: {
        echo "Monday";
        break;
    }
    case 2: {
        echo "Tuesday";
        break;
    }
    case 3: {
        echo "Wednesday";
        break;
    }
    case 4: {
        echo "Thursday";
        break;
    }
    case 5: {
        echo "Friday";
        break;
    }
    case 6: {
        echo "Saturday";
        break;
    }
    case 7: {
        echo "Sunday";
        break;
    }
    default : {
        echo "Invalid Input";
    }
}

?>