<?php
include 'db.php';
$id = $_GET['id'];

if ($_POST) {
    $name  = $_POST['name'];
    $email = $_POST['email'];

    $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
    header("Location: list.php");
}

$user = $conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();
?>

<form method="post">
    <input name="name" value="<?= $user['name'] ?>">
    <input name="email" value="<?= $user['email'] ?>">
    <button>Lưu</button>
</form>
