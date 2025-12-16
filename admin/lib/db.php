<?php
$conn = new mysqli("localhost", "root", "mysql", "duan1");
$conn->set_charset("utf8");
if ($conn->connect_error) {
    die("Lỗi kết nối DB: " . $conn->connect_error);
}
