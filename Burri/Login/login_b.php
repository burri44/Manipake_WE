<?php
session_start();

$benutzer = $_POST['benutzer'];
$passwort = $_POST['passwort'];
$login = $benutzer.";".$passwort.";\n";

$logins = file("logins.csv");

for($i = 0; $i < sizeof($logins);$i++){
    if($logins[$i] == $login){
        $_SESSION['eingeloggt']='bb2017';
        $_SESSION['name']=$benutzer;
        echo "Herzlich willkommen im VIP-Bereich <br/>";
        echo "Ihre Session-ID lautet: ".session_id()."<br/>";
        echo "<a href = 'login_c.php'> Zur DB-Ausgabe</a>";
    }
    else{
        echo "Login war falsch - kein Zugriff";

    }
}


?>