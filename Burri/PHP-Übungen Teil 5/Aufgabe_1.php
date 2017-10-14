<html>

<head>
    <title>Formular</title>
</head>
<body>
<?php

include "verifyForm.php";
if(isset($_POST['vname'])){
    $vname = $_POST['vname'];
    $nname = $_POST['nname'];
    if(verify($vname, $nname)){
        print "Eintrag wurde gespeichert";
    }
    else{
        print "Eingaben sind falsch";

    }
}
?>
<form action = "Aufgabe_1.php" method = "POST">
    Ihr Vorname: <input type = "text" name = "vname">
    Ihr Nachname: <input type = "text" name = "nname">
    <input type = "submit" value = "absenden">

</form>

</body>
</html>