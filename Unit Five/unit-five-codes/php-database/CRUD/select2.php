<?php require_once 'db-connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
        <?php
        $sql = "SELECT * FROM student";
        $query = mysqli_query($conn, $sql);

        if (mysqli_num_rows($query) <= 0) {
            echo "No data found in table.";
        } else {
            //fetch all data from a table at one go
            // $data = mysqli_fetch_all($query, MYSQLI_ASSOC);

            //fetch a data from a table one row at a time
            // $row = mysqli_fetch_assoc($query);
            $i = 1;
            while ($row = mysqli_fetch_assoc($query)) {
                echo $row['s_id'] . " " . $row['full_name'] . " " . $row['email'] . " " . $row['address'] . " " . $row['contact_number'] . "<br><br>";
            }
        }

        ?>
    </table>
</body>

</html>