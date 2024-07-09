<?php
session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['age'] = $_POST['age'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Received Data with Session</title>
</head>
<body>
    <p>Name: <?php echo htmlspecialchars($_SESSION['name']); ?></p>
    <p>Age: <?php echo htmlspecialchars($_SESSION['age']); ?></p>
</body>
</html>
