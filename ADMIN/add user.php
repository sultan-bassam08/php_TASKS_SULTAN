<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    

    // Image upload
    $targetDir = "uploads/";
    $profileImage = basename($_FILES["profile_image"]["name"]);
    $targetFilePath = $targetDir . $profileImage;
    move_uploaded_file($_FILES["profile_image"]["tmp_name"], $targetFilePath);

    $stmt = $pdo->prepare("INSERT INTO users (name, email, profile_image) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $profileImage]);

    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Add User</h2>
        <form action="add user.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="profile_image">Profile Image</label>
                <input type="file" class="form-control-file" id="profile_image" name="profile_image" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
