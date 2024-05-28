<?php

/* Q. Write a PHP program to print the following List in an array 
      and display as follows:
    
    a. Bachelor of Information Management
    b. Bachelor of Business Administration
    c. Bachelor of Computer Application
    
*/

$faculties = array(
    'Bachelor of Information Management',
    'Bachelor of Business Administration',
    'Bachelor of Computer Application'
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <ol type="a">
        <?php
        foreach ($faculties as $key => $value) {
        ?>
        <li><?php echo $value; ?></li>
        <?php
        }
        ?>
    </ol>
</body>

</html>