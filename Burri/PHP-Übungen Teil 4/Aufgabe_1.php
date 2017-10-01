<html>
<head>
    <title> Dateneingabe</title>
</head>
<body>
<h2>Bitte geben Sie Ihre E-Mail-Adresse ein</h2>
<form action = "Aufgabe_1.php" method = "POST">
Wert <input type = "text" name = "email"><br>
    <input type = "submit" value = "senden">
</form>

<?php
if(isset($_POST['email'])){
    $email = $_POST['email'];
    if(check($email)){
        echo "email address has been saved";
    }
    else{
        echo "email address is not valid";
    }
}

function check($email){
    if(strpos($email, '@') !== false){
        return true;
    }
    else{
        return false;
    }
}
?>

</body>
</html>
