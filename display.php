<style>
    .table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 8px;
            border: 1px solid #ccc;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table tr:hover {
            background-color: #eaeaea;
        }


</style>
<?php
$servername = "localhost"; // Replace with your server name if necessary
$username = "mubin"; // Replace with your database username
$password = "1234"; // Replace with your database password
$dbname = "blueferns"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM p_details";
$result = $conn->query($sql);

// Generate the HTML table
if ($result->num_rows > 0) {
    echo "<table border=2px class=table>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Date of Birth</th>
                <th>Address</th>
            </tr>";
            echo '</thead>';
            echo '<tbody>';

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['fullname']."</td>
                <td>".$row['email']."</td>
                <td>".$row['phone_no']."</td>
                <td>".$row['dob']."</td>
                <td>".$row['addres']."</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

// Close the connection
$conn->close();
?>
