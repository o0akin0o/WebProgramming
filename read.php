<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet" />
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;1,400;1,600&family=Montserrat:ital,wght@0,300;0,400;0,700;1,500&display=swap" rel="stylesheet">
        <title>Restaurant</title>
    </head>
    <body>
        <?php include ('header.php'); ?>
        <h2 class="text-center m-5">UPDATE INFORMATION</h2>
        <?php
            include 'dbshell.php';
            // SQL query to retrieve data from the 'studentsinfo' table
            $sql = "SELECT * FROM studentsinfo";
            // Execute the SQL query and store the result
            $result = $conn->query($sql);
            // Check if there are any results
            if ($result->num_rows > 0) {
                echo "<table class='table'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>City</th>
                                <th>Group ID</th>
                                <th>Features</th>
                            
                            </tr>
                        </thead>
                        <tbody>";
                // Loop through the result set and display data in rows
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['first_name']}</td>
                    <td>{$row['last_name']}</td>
                    <td>{$row['city']}</td>
                    <td>{$row['groupId']}</td>
                    <td>
                        <a href='updatesingle.php?sid={$row['id']}' class='btn btn-warning mr-1'>Update</a>
                        <a onclick=\"return confirm('Do you want to delete this record?');\" href='delete.php?sid={$row['id']}' class='btn btn-danger mr-1'>Delete</a>               
                    </td>
                </tr>";
            }
                echo "<a href='ex7.php' class='btn btn-primary m-3'>Add New Record</a>";
                echo "</tbody></table>";
            } else {
                // Display a message if no results are found
                echo "No results";
            }
            // close the connection when done
            $conn->close();
            ?>
        <?php include 'footer.php'; ?>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
    </body>
</html>