<?php
if (isset($_GET['del_id'])) {
    $conn->query("DELETE FROM products WHERE id=" . intval($_GET['del_id']));
    echo "<script>window.location.href='index.php?act=listsp';</script>";
}
$result = $conn->query("SELECT * FROM products ORDER BY id DESC");
?>

<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="fw-bold mb-0">Kho hàng</h5>
        <a href="index.php?act=addsp" class="btn btn-primary btn-sm"><i class="bi bi-plus-lg"></i> Thêm mới</a>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Hình ảnh</th>
                    <th width="30%">Tên sản phẩm</th>
                    <th>Giá bán</th>
                    <th class="text-end">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td class="text-muted">#<?php echo $row['id']; ?></td>
                        <td><img src="../uploads/<?php echo $row['image']; ?>" class="rounded" width="50" height="50" style="object-fit:cover; border:1px solid #eee;"></td>
                        <td class="fw-bold"><?php echo $row['name']; ?></td>
                        <td class="text-danger fw-bold"><?php echo number_format($row['price']); ?> đ</td>
                        <td class="text-end">
                            <a href="index.php?act=editsp&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-light text-primary me-1"><i class="bi bi-pencil-square"></i></a>
                            <a href="index.php?act=listsp&del_id=<?php echo $row['id']; ?>" class="btn btn-sm btn-light text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?');"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>