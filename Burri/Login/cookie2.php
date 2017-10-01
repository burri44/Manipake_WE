<?php
$zeit = time()+60*60*24*365;
setcookie("vorname", $_POST['vname'],$zeit);
setcookie("nachname", $_POST['nname'],$zeit);

echo $_POST['vname']." Ihre Ware wurde versandt";
?>

