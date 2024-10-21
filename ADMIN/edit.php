<?php
include 'db.php';

// Fetch the user information based on ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$id]);
    $user = $stmt->fetch();
}

// Handle the form submission for updating the user
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $profileImage = $user['profile_image']; // Default to existing image if no new one is uploaded

    // Check if a new image is uploaded
    if (!empty($_FILES['profile_image']['name'])) {
        $targetDir = "uploads/";
        $profileImage = basename($_FILES["profile_image"]["name"]);
        $targetFilePath = $targetDir . $profileImage;
        move_uploaded_file($_FILES["profile_image"]["tmp_name"], $targetFilePath);
    }

    // Update the user data in the database
    $stmt = $pdo->prepare("UPDATE users SET name = ?, email = ?, profile_image = ? WHERE id = ?");
    $stmt->execute([$name, $email, $profileImage, $id]);

    // Redirect to index after updating
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit User</h2>
        <form action="edit.php?id=<?= $user['id']; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="profile_image">Profile Image</label>
                <input type="file" class="form-control-file" id="profile_image" name="profile_image">
                <small>Leave blank to keep current image.</small><br>
                <img src="uploads/<?= $user['profile_image']; ?>" width="100" class="mt-2">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
