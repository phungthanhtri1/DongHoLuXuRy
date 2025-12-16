<?php
// Lấy ID từ URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Lấy thông tin cũ
$query = $conn->query("SELECT * FROM products WHERE id = $id");
$product = $query->fetch_assoc();

if (!$product) {
    echo "<script>alert('Sản phẩm không tồn tại!'); window.location.href='index.php?act=listsp';</script>";
    exit;
}

// Xử lý khi bấm nút Cập nhật
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['description'];
    $image = $product['image']; // Mặc định giữ ảnh cũ

    // Nếu người dùng chọn ảnh mới
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = "../uploads/";
        $image = time() . "_" . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir . $image);
    }

    $sql = "UPDATE products SET name='$name', price='$price', image='$image', description='$desc' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Cập nhật thành công!'); window.location.href='index.php?act=listsp';</script>";
    } else {
        echo "<div class='alert alert-danger'>Lỗi: " . $conn->error . "</div>";
    }
}
?>

<div class="card shadow-sm border-0 w-75 mx-auto">
    <div class="card-header bg-warning bg-opacity-10 py-3">
        <h5 class="mb-0 fw-bold text-warning-emphasis">Cập nhật: <?php echo $product['name']; ?></h5>
    </div>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $product['name']; ?>" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">Giá bán</label>
                    <input type="number" name="price" class="form-control" value="<?php echo $product['price']; ?>" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Hình ảnh</label>
                <div class="d-flex align-items-center gap-3 mb-2">
                    <?php if ($product['image']): ?>
                        <img src="../uploads/<?php echo $product['image']; ?>" class="rounded border" style="width: 80px; height: 80px; object-fit: cover;">
                    <?php endif; ?>
                    <input type="file" name="image" class="form-control">
                </div>
                <small class="text-muted fst-italic">* Để trống nếu không muốn thay đổi ảnh.</small>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Mô tả</label>
                <textarea name="description" class="form-control" rows="5"><?php echo $product['description']; ?></textarea>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-warning px-4 text-white fw-bold"><i class="bi bi-pencil-square"></i> Cập nhật</button>
                <a href="index.php?act=listsp" class="btn btn-secondary px-4">Hủy</a>
            </div>
        </form>
    </div>
</div>