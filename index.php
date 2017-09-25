<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>hello</title>
</head>
<body>
<h1>Burri's Übungen</h1>
<p>Übungsblatt 1:</p>
<ul>
    <?php
    for($Aufgaben = 1;$Aufgaben <= 7;$Aufgaben++){
        $Link = "\Burri\PHP-Übungen Teil 1\Aufgabe_".$Aufgaben.".php";
     print("<li><a href=\"".$Link."\"> Aufgabe ".$Aufgaben."</a></li>");
    }

?>
</ul>
</body>
</html>