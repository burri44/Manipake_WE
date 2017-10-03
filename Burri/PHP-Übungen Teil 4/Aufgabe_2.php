<html>
<head>
    <title> BMI-Rechner</title>
</head>
<body>
<h2>Berechnen Sie ihren BMI</h2>
<form action = "Aufgabe_2.php" method = "POST">
    Grösse <input type = "text" name = "grösse"><br>
    Gewicht <input type = "text" name = "gewicht"><br>
    <input type = "submit" value = "senden">
</form>

<?php
if(isset($_POST['grösse']) && isset($_POST['gewicht'])){
include 'bodyMass.php';
$bmi = calculate($grösse, $gewicht);
print("Ihr BMI beträgt: ".$bmi);
}

?>

</body>
</html>