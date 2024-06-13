<?php

/* Follow this steps to execute a query in database(manadate):
    a. Connect with db server and select your db
    b. Write SQL. For php, SQL are strings
    c. Execute SQL
    d. Optional. Fetch your data.
*/

//db connection
$conn = mysqli_connect("localhost", "root", "", "kmc_bca", 3307);

//sql query to create a table in a database
$sql = "CREATE TABLE products(
    product_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    product_description VARCHAR(255),
    price INT NOT NULL
)";

//executing a SQL query
$query = mysqli_query($conn, $sql); //this function returns true or false

if ($query) {
    //success
    echo "Table Created Successfully.";
} else {
    echo mysqli_error($conn); //this function prints db errors
}