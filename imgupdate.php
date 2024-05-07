
<?php
session_start(); // Start the session if not already started
$conn = new mysqli("localhost", "root", "", "krifydemo");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection and other setup
    
    // Sanitize input
    $id = $_POST['image_id'];
    // echo $id; exit;
    // Validate uploaded file
    $allowedTypes = ['image/jpeg', 'image/png']; // Adjust allowed types as needed
    $maxFileSize = 5 * 1024 * 1024; // 5 MB
    if (in_array($_FILES['image']['type'], $allowedTypes) && $_FILES['image']['size'] <= $maxFileSize) {
        $newImagePath = "uploads/" . $_FILES['image']['name'];
       
        if (move_uploaded_file($_FILES['image']['tmp_name'], $newImagePath)) {
            // Update image path in the database for the user using prepared statement
            // echo $newImagePath."jskdshds".$id; exit; 
            // $query = "UPDATE images SET image_path = $newImagePath  WHERE id = $id";
            $query = "UPDATE images SET image_path = '$newImagePath' WHERE id = '$id'";
            // echo $query; exit;
            $result = mysqli_query($conn, $query);
            // Execute prepared statement and handle result

            echo "Image updated successfully!";

            header("Location: display.php");
            exit;
        } else {
            echo "Error updating image.";
        }
    } else {
        echo "Invalid image format or size.";
    }
}
?>


