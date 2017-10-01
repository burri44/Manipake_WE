<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Fenster</title>
    </head>
    <body>
        <?php
        // Session starten oder übernehmen
        session_start();
        
        if (ini_get("session.use_cookies")) 
        {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params["path"],
            $params["domain"], $params["secure"], $params["httponly"]);
        }
        
        // Session beenden (bei Logout)
        session_destroy();
        ?>
        <h4>Login Fenster</h4>
        <form action="login_b.php" method="post">
            <input type="text" name="benutzer" value="" /> Benutzer <br/>
            <input type="password" name="passwort" value="" /> Passwort <br/>
            <input type="submit" value="login" />
            <input type="reset" value="reset" />          
        </form>
        <br/> <a href="erfassen.php"> Neues Login erfassen</a>
    </body>
</html>
