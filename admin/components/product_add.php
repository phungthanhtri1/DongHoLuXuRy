<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $img = time() . "_" . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/" . $img);
    $conn->query("INSERT INTO products (name,price,image,description) VALUES ('{$_POST['name']}','{$_POST['price']}','$img','{$_POST['description']}')");
    echo "<script>window.location.href='index.php?act=listsp';</script>";
}
?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card p-4">
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label fw-bold small text-uppercase text-secondary">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase text-secondary">Giá bán</label>
                        <input type="number" name="price" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-uppercase text-secondary">Hình ảnh</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label fw-bold small text-uppercase text-secondary">Mô tả</label>
                    <textarea name="description" class="form-control" rows="4"></textarea>
                </div>
                <div class="d-flex gap-2">
                    <button class="btn btn-primary px-4">Lưu lại</button>
                    <a href="index.php?act=listsp" class="btn btn-light px-4">Hủy</a>
                </div>
            </form>
        </div>
    </div>
</div>