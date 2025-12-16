<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $conn->query("INSERT INTO categories (name) VALUES ('$name')");
    echo "<script>window.location.href='index.php?act=danhmuc';</script>";
}
?>
<div class="card p-4 w-50 mx-auto">
    <h5 class="mb-3">Thêm danh mục mới</h5>
    <form method="POST">
        <input type="text" name="name" class="form-control mb-3" placeholder="Nhập tên danh mục..." required>
        <button class="btn btn-success">Lưu lại</button>
        <a href="index.php?act=danhmuc" class="btn btn-secondary">Hủy</a>
    </form>
</div>