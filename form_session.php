<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pass Data with Session</title>
</head>
<body>
    <form action="page_session.php" method="POST">
        Name: <input type="text" name="name"><br>
        Age: <input type="text" name="age"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
