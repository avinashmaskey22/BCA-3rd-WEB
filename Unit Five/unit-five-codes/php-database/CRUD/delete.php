<?php

/* Follow this steps to execute a query in database(manadate):
    a. Connect with db server and select your db
    b. Write SQL. For php, SQL are strings
    c. Execute SQL
    d. Optional. Fetch your data.
*/

//db connection
$conn = mysqli_connect("localhost", "root", "", "kmc_bca", 3307);

// SQL to delete record
$sql = "DELETE FROM student WHERE s_id = 5";

//executing a SQL query
$query = mysqli_query($conn, $sql); //this function returns true or false

if ($query) {
    //success
    echo "Record Deleted Successfully.";
} else {
    echo mysqli_error($conn); //this function prints db errors
}