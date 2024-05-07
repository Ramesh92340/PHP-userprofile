<?php

include "dbcon.php";

if (isset($_GET['editbtn'])) {
    $userId = $_GET['editbtn'];

    $query = "SELECT * FROM signup WHERE id = '$userId'";  // Specify the column name here
    $result = mysqli_query($conn, $query);
    
    if (!$result) {
        die("Database query failed: " . mysqli_error($conn));
    }
    //echo "sucussfull";
    // Assuming you want to fetch a single row based on the provided id
    $userData = mysqli_fetch_assoc($result);
    
    // Now you can use $userData to display or populate the edit form fields
}

?>

<form action="update.php" method="post">
  
   
    <h5>UserName -<input name = "username" type = "text" placeholder = "Enter Name" value="<?php echo $userData['username'];?>"/> </h5><br>
    <h5>Email   -<input name= "email" type = "email" placeholder = "Enter Email"   value="<?php echo $userData['email']; ?>" />  </h5><br>
<input name= "id" type = "hidden" placeholder = "Enter Email"   value="<?php echo $userData['id']; ?>" />  </h5><br>
    <h5>Password    -<input name = "password" type = "Password" placeholder = "Enter Password"    value="<?php echo $userData['password']; ?>"/>  </h5><br> 
    <button>Update </button>
</form>