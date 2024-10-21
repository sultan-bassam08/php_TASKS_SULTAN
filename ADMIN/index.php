<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">User Management</h2>
        <a href="add user.php" class="btn btn-primary mb-3">Add User</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Profile Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'db.php';
                $stmt = $pdo->query("SELECT * FROM users");
                while ($row = $stmt->fetch()) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td><img src='uploads/{$row['profile_image']}' width='50'></td>
                        <td>
                            <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                            <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
