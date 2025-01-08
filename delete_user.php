<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = intval($_POST['id']);

    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    if ($stmt->execute([$id])) {
        echo "<script>alert('User deleted successfully!'); window.location.href='view_users.php';</script>";
    } else {
        echo "Error deleting user.";
    }
}
?>
