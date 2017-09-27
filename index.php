<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>hello</title>
</head>
<body>
<h1>Burri's Uebungen</h1>
<p>Uebungsblatt 1:</p>
<ul>
    <?php
    for($Aufgaben = 1;$Aufgaben <= 7;$Aufgaben++){
        $Link = "\Burri\PHP-Übungen Teil 1\Aufgabe_".$Aufgaben.".php";
     print("<li><a href=\"".$Link."\"> Aufgabe ".$Aufgaben."</a></li>");
    }

?>
</ul>
<ul>
    Uebungsblatt 2:
    <li><a href="\Burri\PHP-Übungen Teil 2\Formular.html">Formular</a></li>
</ul>
</body>
</html>