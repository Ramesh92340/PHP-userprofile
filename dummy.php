<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
 
<




<div class="container table-responsive py-5"> 
    <h2>User Details</h2>
    <!-- <a class="text-right btn btn-success" href="index.php">Add</a> -->
    <table class="table table-bordered table-hover">


        <thead>
            <tr>
                <th>s.no</th>
                <th>email</th>
                <th>name</th>
                <th>password</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach( $result as $rows){ ?>    
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $rows["email"]; ?></td>
                    <td><?php echo $rows["username"]; ?></td>
                    <td><?php echo $rows["password"]; ?></td>

                    
                    <td><a class="btn btn-primary" href="edit.php?editbtn=<?php echo $rows['id']; ?>">Edit</a>
                    <a class="btn btn-danger" href="delete.php?id=<?php echo $rows['id']; ?>">Delete</a> 
                    <a class="btn btn-secondry" href="logout.php?id=<?php echo $rows['id']; ?>">logout</a></td>

                </tr>
            <?php } ?>   
        </tbody>
    </table>

        
</body>
</html>