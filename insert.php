<?php
$servername = "localhost";
$username = "root";
$password = "mydb";
$dbname = "srigroups";
$name = $_POST['fname'];
$email = $_POST['email'];
$mobile = $_POST['phone'];
$message = $_POST['Message'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `ContactForm`(`name`, `email`, `mobile`, `message`) VALUES ('$name','$email','$mobile','$message')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
