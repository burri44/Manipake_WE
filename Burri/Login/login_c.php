<?php
session_start();

include "pruef.inc.php";

echo "Guten Tag ".$_SESSION['name'];
echo "<br/>";
echo "Ihre Session-ID lautet: ".session_id()."<br/>";
?>
<a href="index.php">Logout</a>

