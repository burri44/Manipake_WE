<?php

$zahl_1 = $_POST["zahl1"];
$zahl_2 = $_POST["zahl2"];
$operator = $_POST["operator"];
$text = "Das Ergebnis der Rechung ".$zahl_1.$operator.$zahl_2." gibt ";
if($operator == "+"){
    print( $text.($zahl_1+$zahl_2));
}
elseif($operator == "-"){
    print( $text.($zahl_1-$zahl_2));
}
elseif($operator == "*"){
    print( $text.($zahl_1*$zahl_2));
}
else{
    print( $text.($zahl_1/$zahl_2));
}
