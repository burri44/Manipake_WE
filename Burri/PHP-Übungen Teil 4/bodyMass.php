<?php


function calculate($grösse, $gewicht){
    $total = $gewicht / ($grösse * 4);
    return $total;
}