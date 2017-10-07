<html>

<head>
    <title>Formular</title>
</head>
<body>
<?php

include verifyForm.php;

if(isset($_GET['vname'])){
    $vname = $_GET['vname'];
    $nname = $_GET['nname'];
    if(verify($vname, $nname)){
        echo "Bitte alle Felder ausfüllen";
    }
}
?>
<form action = "Aufgabe_1" method = "POST">
   Ihr Vorname: <input type = "text" name = "vname">
    Ihr Nachname: <input type = "text" name = "nname">
    <input type = "submit" value = "absenden">

</form>

</body>
</html>