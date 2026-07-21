<?php
$marks = 75;

switch(true){

    case ($marks >= 90):
        echo "Grade: A+";
        break;

    case ($marks >= 80):
        echo "Grade: A";
        break;

    case ($marks >= 70):
        echo "Grade: B";
        break;

    case ($marks >= 60):
        echo "Grade: C";
        break;

    case ($marks >= 35):
        echo "Grade: D";
        break;

    default:
        echo "Result: Fail";
}

?>