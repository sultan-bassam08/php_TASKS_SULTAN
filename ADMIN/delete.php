<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the user from the database
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    $stmt->execute([$id]);

    // Redirect back to index page after deletion
    header('Location: index.php');
    exit;
}
