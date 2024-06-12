<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <?php
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        echo "<h1>Welcome, $name!</h1>";
    } else {
        echo "<h1>Welcome, Guest!</h1>";
    }
    ?>
</body>
</html>
