<?php
// Start der Session
session_start();

$benutzer=$_POST['benutzer'];
$passwort=$_POST['passwort'];

    $merker=false;
    $login=$_POST['benutzer'].";".$_POST['passwort'].";\n";
    // Datei logins.csv wird zeilenweise in Array geschrieben
    $logins=file("logins.csv");
    for($i=0; $i<sizeof($logins); $i++)
    {
        if($logins[$i]==$login)
        {
        $merker = true;
        }     
    }
    if ($merker)
    {
        $_SESSION['eingeloggt']='ak23';
        $_SESSION['name']=$benutzer;    
        echo "Herzlich wilkommen im VIP-Bereich <br/>";
        echo "Ihre Session-ID lautet: ".session_id();
        echo "<br/><a href='login_c.php'> DB-Zugriff </a>";
        echo "<br/><a href='index.php'> Logout </a>";
    }    
      else 
    {
       echo "Login war nicht erfolgreich!<br/>";
       echo "<a href='index.php'> zum Login</a>";
    }
?>
