<?php
include 'db_connect.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $user_name = $_POST['user_name'];
    $user_phone = $_POST['user_phone'];
    $user_email = $_POST['user_email'];
    $user_address = $_POST['user_address'];

    try {
        // Prepare the SQL query with placeholders
        $sql = "INSERT INTO user (user_name, user_phone, user_email, user_address) 
                VALUES (:user_name, :user_phone, :user_email, :user_address)";
        
        // Prepare the statement
        $stmt = $conn->prepare($sql);

        // Bind the parameters to the placeholders
        $stmt->bindParam(':user_name', $user_name);
        $stmt->bindParam(':user_phone', $user_phone);
        $stmt->bindParam(':user_email', $user_email);
        $stmt->bindParam(':user_address', $user_address);

        // Execute the statement
        $stmt->execute();

        echo "New record created successfully!";
    } catch (PDOException $e) {
        // Catch and display any errors
        echo "Error: " . $e->getMessage();
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New record</title>
        <link rel="stylesheet"
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
       

</head>
<body>
    
    <div class="container my-5">
        <h2>Create New User</h2>
    <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name ="user_name" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name ="user_email" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name ="user_phone" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name ="user_address" value="">
                </div>
            </div>
     
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
               </div>
                <div class="col-sm-3 d-grid">
                     <a class="btn btn-outline-primary" href="index.php" role="button">Cancel</a>
                </div>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>

    
</body>
</html>