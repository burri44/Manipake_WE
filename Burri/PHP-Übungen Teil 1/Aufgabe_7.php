<html>
<head>
    <title>Aufgabe 7</title>
</head>
<body>
<?php
print("<table border = 2>");
for($zeilen = 32;$zeilen <= 47;$zeilen++){
    print("<tr>");
    for($spalten = 0;$spalten < 224;$spalten = $spalten +16){
        $x = $zeilen + $spalten;

        print("<td>".$x." <b>"."&#".$x.";</b>"."</td>");
    }
    print("</tr>");
}
print("</table>");
?>
</body>
</html>