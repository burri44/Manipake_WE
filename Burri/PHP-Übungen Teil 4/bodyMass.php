<?php


/**
 * @param $grösse Grösse
 * @param $gewicht Gewicht
 * @return float|int Gibt BMI zurück
 */
function calculate($grösse, $gewicht){
    $total = $gewicht / ($grösse * 2);
    return $total;
}