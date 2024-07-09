<?php
$name = $_GET['name'];
$age = $_GET['age'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Received Data with GET</title>
</head>
<body>
    <p>Name: <?php echo htmlspecialchars($name); ?></p>
    <p>Age: <?php echo htmlspecialchars($age); ?></p>
</body>
</html>

