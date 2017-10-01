<html>
<head>
    <meta charset = "UTF-8">
    <title>Login erfassen</title>
</head>
<body>
<?php

if(isset ($_POST['benutzer']))
{
    //erzeugen eines Login-Eintrags
    $login = $_POST['benutzer'].";".$_POST['passwort'].";\n";
    $dz = fopen("logins.csv","a");
    fwrite($dz, $login);
    fclose($dz);
}

?>
<h3>Login erfassen</h3>
<form action = "<?php $_SERVER['PHP_SELF'] ?>" method = "POST">
    <input type = "text" name = "benutzer" value = ""> Benutzer <br/>
    <input type = "text" name = "passwort" value = ""> Passwort <br/>
    <input type = "text" name = "passwort2" value = ""> Passwort wiederholen <br/>
    <input type = "submit" value = "login"/>
    <input type = "reset" value = "reset"/>
</form></br>
</body>
</html>