<?php
$name = $_POST['name'];
$age = $_POST['age'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Received Data with POST</title>
</head>
<body>
    <p>Name: <?php echo htmlspecialchars($name); ?></p>
    <p>Age: <?php echo htmlspecialchars($age); ?></p>
</body>
</html>
