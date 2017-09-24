<html>
<head>
    <title>Aufgabe 6</title>
</head>
<body>
<?php
echo '<h1> Aufgabe 6</h1>';
print("<table border = '2'>");
for($zahl = 1; $zahl <= 10;$zahl++){
    print("<tr><td>");
    print("Die Reihe mit ".$zahl."  =");
    print("</td>");
    for($multi = 1;$multi <= 10; $multi++){
        print("<td>".$zahl*$multi."</td>");
    }
    print("</tr>");
}
print("</table>");
?>
</body>
</html>