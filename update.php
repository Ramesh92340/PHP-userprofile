<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newEmail = $_POST['email'];
    $username = $_POST['username'];
    $newPassword = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $id = $_POST['id'];

    // Establish database connection
    $conn = new mysqli("localhost", "root", "", "krifydemo");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize input
    $newEmail = $conn->real_escape_string($newEmail);
    $newPassword = $conn->real_escape_string($newPassword);
    $id = $conn->real_escape_string($id);

    // Update query
    $query = "UPDATE signup SET email = '$newEmail', username = '$username', password = '$newPassword' WHERE id = '$id'";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "User data updated successfully.";
        header("Location: display.php"); 
        exit(); 
    } else {
        echo "Error updating user data: " . mysqli_error($conn);
    }

    $conn->close();
}
?>



