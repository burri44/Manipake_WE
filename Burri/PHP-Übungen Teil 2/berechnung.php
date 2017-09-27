<html>
<head>
    <title>Zinsberechnung</title>
</head>
<body>
<h1>Berechnungen:</h1>
<?php
$Jahren = $_POST['Jahre'];
$Wert = $_POST["wert"];
$Zins = $Wert *0.015;
if($Jahren >= 6){
    $Zins = $Wert * 0.011;
}
elseif($Jahren >= 3){
    $Zins = $Wert * 0.009;
}
else{
    $Zins = $Wert * 0.008;
}
$Total10 = ($Wert*pow(1.015,$Jahren));
print "Sie legen ein Kapitel von Fr.".round( $Wert)." .-- bei uns an</br></br>";
print "Sie erhaltenim ersten Jahr einen Zins von Fr. ".round($Zins).".--</br></br>";
print "In ".$Jahren." Jahren haben Sie ein Kapital von Fr. ".round($Total10).".--</br></br>";
echo "Es lohnt sich in jedem Fall, Ihr Geld bei uns anzulegen!!";

?>
</body>
</html>