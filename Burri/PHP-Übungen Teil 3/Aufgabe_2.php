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
if(isset($_POST['ausw'])){

    $text = $_POST['ausw'];
    $daten = file("log.txt");
    $zeilen = sizeof($daten);
    $ausgabe[$text][0] = 0;
    $ausgabe[$text][1] = 0;

    for($x = 0;$x < $zeilen;$x++){
        $daten[$x] = explode('|', $daten[$x]);
        $email = $daten[$x][2];
        $time = $daten[$x][1];
        $email = str_replace(' ','',$email);
        echo $email."+".$text."<br>";
        if(strcmp($email, $text) == 0){
            echo $email." ".$time;
        if($ausgabe[$text][0] == 0){
            $ausgabe[$text][0] = $time;
        }
        else{
            $ausgabe[$text][1] = $time;
        }
        }
    }
    echo ($ausgabe[$text][1]-$ausgabe[$text][0]);
}

?>

<form action = "Aufgabe_2.php" method = "POST">
    <input type = "text" name = "name">Name</br>
    <input type = "text" name = "Email">Email</br>
    <input type = "submit" value = "speichern">
</form>
<form action = "Aufgabe_2.php" method = "POST">
    <p>E-Mail-Adresse Zeit auswerten</p>
    <input type = "text" name = "ausw">
    <input type = "submit" value = "auswerten">
</form>

</body>
</html>