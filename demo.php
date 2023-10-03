<?php

//echo "Hello World!<br>";
//echo "My name is Ha";

?> 
<!--HTML Code can be written in PHP file-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Demo</title>
</head>
<body>
    <!-- <button 
    style="width: 200px; height: 30px; color:blue">
    Click me
</button> -->
    <form action="demo.php" method = "get">
    <label>username:</label>
    <input type = "text" name ="username"><br>
    <label>password:</label>
    <input type = "password" name ="password"><br>
    <input type = "submit" value ="Login">
    </form>
</body>
</html>
<?php
    echo $_GET["username"];
    echo $_GET["password"];
?>
 

