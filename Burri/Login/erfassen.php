    <html>
    <head>
        <meta charset="UTF-8">
        <title>Login Fenster</title>
    </head>
    <body>
        <?php
        if (isset($_POST['benutzer']))
        {
           $login=$_POST['benutzer'].";".$_POST['passwort'].";\n";
           
           $dz=fopen("logins.csv", "a");
           fwrite($dz, $login);
           fclose($dz);
           
           header("Location:index.php");
        }
         
        ?>
        <h4>Erfassung Login</h4>
        <form action="erfassen.php" method="post">
            <input type="text" name="benutzer" value="" /> Benutzer <br/>
            <input type="password" name="passwort" value="" /> Passwort <br/>
            <input type="password" name="passwort2" value="" /> Passwort wiederholen<br/>
            <input type="submit" value="erfassen" />
            <input type="reset" value="reset" />          
        </form>
    </body>
</html>
