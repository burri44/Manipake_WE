<html>
<head>
    <title>Dateneingabe</title>
</head>
<body>
<p> Bitte geben Sie einen Wert ein!</p>
<form action="berechnung.php" method="post">     <p> Wert: <input type="text" name="wert" size="30" title=""/>     </p>
    <p> Bitte geben Sie die Anzahl Jahre ein:</p>
    <select name = "Jahre">
        <?php
        for($zahl = 1; $zahl <= 10; $zahl ++){
            print ("<option value =\"".$zahl."\">".$zahl."</option>");
        }
        ?>
    </select>
    </br>
    <input type="submit" value="Abschicken!"/>     <input type="reset" value="Felder l&ouml;schen!"/>

</form>
</body>
</html> 