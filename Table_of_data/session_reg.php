<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>

<form method="POST">
    Name: <input type="text" name="name" required><br>
    E-mail: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" value="Submit">
</form>

<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION["users"])) {
        $_SESSION['users'] = [];
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $newUser = [
        "name" => $name,
        "email" => $email,
        "password" => $password,
    ];
    $_SESSION["users"][] = $newUser;
}

if (!empty($_SESSION["users"])) {
    echo "<h2>Registered Users</h2>";
    echo "<table id='userTable' border='1'>";
    echo "<tr><th>Name</th><th>Email</th><th>Password</th></tr>";

    foreach ($_SESSION["users"] as $user) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($user["name"]) . "</td>";
        echo "<td>" . htmlspecialchars($user["email"]) . "</td>";
        echo "<td>" . htmlspecialchars($user["password"]) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<button onclick='toggleTable()'>Hide/Show Table</button>"; // Add the button here
}
?>

<script>
    function toggleTable() {
        var table = document.getElementById("userTable");
        if (table.style.display === "none") {
            table.style.display = "table"; // Make the table visible
        } else {
            table.style.display = "none";  // Hide the table
        }
    }
</script>

</body>
</html>
