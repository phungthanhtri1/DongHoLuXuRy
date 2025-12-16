<?php
include 'db.php';

if ($_POST) {
    $name  = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users(name,email) VALUES('$name','$email')";
    $conn->query($sql);
    header("Location: list.php");
}
?>

<form method="post">
    <input name="name" placeholder="Tên">
    <input name="email" placeholder="Email">
    <button>Thêm</button>
</form>
