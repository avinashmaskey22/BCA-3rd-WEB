<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the name from the form submission
    $name = $_POST['name'];

    // Redirect to another internal file
    header("location: welcome.php?name=". $name);
    exit();
}
?>
