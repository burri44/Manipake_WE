<html>
<head>
    <meta charset = "UTF-8">
    <title>Cookie</title>
</head>
<body>
<form action="cookie2.php" method="POST">
    <input type ="text" name = "vname" value"<?php
    if(isset($_COOKIE['vorname']))
        echo $_COOKIE['vorname'];
    ?>"/>Vorname</br>
    <input type ="text" name = "nname" value"<?php
    if(isset($_COOKIE['nachname']))
        echo $_COOKIE['nachname'];
    ?>"/>Nachname</br>
    <input type ="submit" value="submit"></br>
</form>
<?php

?>
</body>
</html>