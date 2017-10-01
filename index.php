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
    <li><a href="\Burri\PHP-Übungen Teil 2\Formular.php">Formular</a></li>
    <li><a href="\Burri\PHP-Übungen Teil 2\Rechner.html">Rechner</a></li>
</ul>
<ul>
    Unterrichtsbeispiel 30.09.2017:
    <li><a href="Burri/Login/index.php">login</a></li>
</ul>
<p>Uebungsblatt 3:</p>
<ul>
    <?php
    for($Aufgaben = 1;$Aufgaben <= 2;$Aufgaben++){
        $Link = "\Burri\PHP-Übungen Teil 3\Aufgabe_".$Aufgaben.".php";
        print("<li><a href=\"".$Link."\"> Aufgabe ".$Aufgaben."</a></li>");
    }

    ?>
</ul>
<p>Uebungsblatt 4:</p>
<ul>
    <?php
    for($Aufgaben = 1;$Aufgaben <= 1;$Aufgaben++){
        $Link = "\Burri\PHP-Übungen Teil 4\Aufgabe_".$Aufgaben.".php";
        print("<li><a href=\"".$Link."\"> Aufgabe ".$Aufgaben."</a></li>");
    }

    ?>

</body>
</html>