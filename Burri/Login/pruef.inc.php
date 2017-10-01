<?php
if (@$_SESSION['eingeloggt']!='ak23')
{
    echo "Sie haben hier keinen Zugriff <br/>";
    echo "<a href='index.php'>Hier gehts zum Login</a>";
    exit();
} 
?>
