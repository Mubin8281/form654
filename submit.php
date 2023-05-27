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

// Retrieve form data
$id=$_POST['id'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone_no = $_POST['phone'];
$dob = $_POST['dob'];
$addres = $_POST['address'];

// Insert the data into the database
$sql = "INSERT INTO p_details (id,fullname, email, phone_no, dob, addres) VALUES ('$id','$fullname', '$email', '$phone_no', '$dob', '$addres')";

if ($conn->query($sql) === TRUE) {
    header("Location: ins_form.html");
exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
