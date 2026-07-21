<?php
$char = 'z'; 

switch($char){
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
    case 'A':
    case 'E':
    case 'I':
    case 'O':
    case 'U':
        echo "$char is a Vowel.";
        break;

    default:
        echo "$char is a Consonant.";
}

?>