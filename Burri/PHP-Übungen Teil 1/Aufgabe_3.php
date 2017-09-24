<html>
<head>
    <title>Aufgabe 3</title>
</head>
<body>
<?php
print("<h1>Aufgabe 3</h1>");
print("<table border='1'>".
"<tr><td>Server_Name</td><td>".  $_SERVER["SERVER_NAME"]."</td></tr>".
"<tr><td>SERVER_SOFTWARE</td><td>".  $_SERVER["SERVER_SOFTWARE"]."</td></tr>".
"<tr><td>Server_PROTOCOL</td><td>".  $_SERVER["SERVER_PROTOCOL"]."</td></tr>".
"<tr><td>PHP-SELF</td><td>".  $_SERVER["PHP_SELF"]."</td></tr>".
"<tr><td>REMOTE_ADDR</td><td>".  $_SERVER["REMOTE_ADDR"]."</td></tr>".
"<tr><td>HTTP_USER_AGENT</td><td>".  $_SERVER["HTTP_USER_AGENT"]."</td></tr>".
"</table>"
);
?>
</body>
</html>