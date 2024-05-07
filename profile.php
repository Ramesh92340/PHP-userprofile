<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Your custom CSS (if any) -->
    <style>
        /* Add your custom styles here */
    </style>
</head>
<?php
 if(isset($_GET['editbtn'])) {
    $editbtnId = $_GET['editbtn'];
    
    // Now $editbtnId contains the value of the editbtn parameter (image ID)
  
} 
// echo "Edit Button ID: " . $editbtnId;

?>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Image Upload</h3>
                    </div>
                    <div class="card-body">
                        <form action="imgupdate.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" name="image_id" value="<?php echo $editbtnId; ?>">
                                <label for="image">Select an Image:</label>
                                <input type="file" class="form-control-file" name="image" accept="image/*" required>
                            </div>
                            <button type="submit" name="upload" class="btn btn-primary">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Include Bootstrap JS (if needed) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
