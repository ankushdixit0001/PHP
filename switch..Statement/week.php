<?php
    echo"Enter your choice between(1-7) for getting day:";
    $day=6;
    switch($day) {
        case 1 :
            echo"\n Sunday";
            break;
        case 2 :
            echo"\n Monday";
            break;
        case 3 :
            echo"\n Tuesday";
            break;
        case 4 :
            echo"\n Wednesday";
            break;
        case 5 :
            echo"\n Thursday";
            break;
        case 6 :
            echo"\n Friday";
            break;
        case 7 :
            echo"\n Saturday";
            break;
        default:
            echo"\n Enter a valid choice.";
    }

?>