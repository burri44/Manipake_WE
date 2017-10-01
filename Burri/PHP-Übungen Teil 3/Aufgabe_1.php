<html>
<head>
    <title> Formular </title>
</head>
<body>

<?php
if(isset($_POST['name'],$_POST['Email'])){
    if($_POST['name'] != ""&&$_POST['Email'] != ""){
    $name = $_POST['name'];
    $email = $_POST['Email'];

    $text = "$name"."|".time()."|".$email."\n";

    $file = fopen("log.txt", "a");
    fwrite($file,$text);
    fclose($file);
    }
}

?>

<form action = "Aufgabe_1.php" method = "POST">
    <input type = "text" name = "name">Name</br>
    <input type = "text" name = "Email">Email</br>
    <input type = "submit" value = "speichern">
</form>

</body>
</html>