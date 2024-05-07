<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "krifydemo");
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}
$id=$_SESSION["user_id"];
// echo $id; exit;
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['upload'])) {

    $imageName = $_FILES['image']['name'];
    $imageTmp = $_FILES['image']['tmp_name'];

    // Check if the uploaded file is an image
    $allowedFormats = array("image/jpeg", "image/png", "image/gif", "image/jpg");
    if (in_array($_FILES['image']['type'], $allowedFormats)) {
        // Specify the folder where images will be saved
        $uploadPath = "uploads/";

        // Save the image to the local folder
        $destination = $uploadPath . $imageName;
        move_uploaded_file($imageTmp, $destination);
        $currentDate = date("Y-m-d H:i:s");
        // Insert image information into the database
        $query = "INSERT INTO images (user_id,image_path,created_at) VALUES ('$id','$destination','$currentDate')";
        if (mysqli_query($conn, $query)) {
            echo "Image uploaded and data saved successfully.";
            header("Location: display.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Invalid file format. Allowed formats: JPEG, PNG, GIF.";
    }
}
mysqli_close($conn);
?>
