<?php
$id = $_GET['id'];
$dm = $conn->query("SELECT * FROM categories WHERE id=$id")->fetch_assoc();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $conn->query("UPDATE categories SET name='$name' WHERE id=$id");
    echo "<script>window.location.href='index.php?act=danhmuc';</script>";
}
?>
<div class="card p-4 w-50 mx-auto">
    <h5 class="mb-3">Sửa danh mục</h5>
    <form method="POST">
        <input type="text" name="name" class="form-control mb-3" value="<?php echo $dm['name']; ?>" required>
        <button class="btn btn-warning">Cập nhật</button>
        <a href="index.php?act=danhmuc" class="btn btn-secondary">Hủy</a>
    </form>
</div>