<?php
if(isset($_GET['del_id'])){
    $conn->query("DELETE FROM categories WHERE id=".intval($_GET['del_id']));
    echo "<script>window.location.href='index.php?act=danhmuc';</script>";
}
$list = $conn->query("SELECT * FROM categories ORDER BY id DESC");
?>
<div class="card p-4">
    <div class="d-flex justify-content-between mb-3">
        <h5 class="fw-bold">Danh mục sản phẩm</h5>
        <a href="index.php?act=adddm" class="btn btn-primary btn-sm">Thêm danh mục</a>
    </div>
    <table class="table table-hover">
        <thead><tr><th>ID</th><th>Tên danh mục</th><th>Hành động</th></tr></thead>
        <tbody>
            <?php while($row = $list->fetch_assoc()): ?>
            <tr>
                <td>#<?php echo $row['id']; ?></td>
                <td class="fw-bold"><?php echo $row['name']; ?></td>
                <td>
                    <a href="index.php?act=editdm&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">Sửa</a>
                    <a href="index.php?act=danhmuc&del_id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Xóa danh mục này?')">Xóa</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>