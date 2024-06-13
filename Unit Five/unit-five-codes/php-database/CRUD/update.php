<?php

/* Follow this steps to execute a query in database(manadate):
    a. Connect with db server and select your db
    b. Write SQL. For php, SQL are strings
    c. Execute SQL
    d. Optional. Fetch your data.
*/

//db connection
$conn = mysqli_connect("localhost", "root", "", "kmc_bca", 3307);

$sql = "UPDATE student
        SET
        full_name = 'Angel Di Maria',
        email = 'angel@gmail.com'
        WHERE s_id = 1";

//executing a SQL query
$query = mysqli_query($conn, $sql); //this function returns true or false

if ($query) {
    //success
    echo "Record Updated Successfully.";
} else {
    echo mysqli_error($conn); //this function prints db errors
}