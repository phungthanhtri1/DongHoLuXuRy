<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $status = isset($_POST['status']) ? 1 : 0;
    
    $img = "";
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
        $img = time()."_".$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/".$img);
    }

    $sql = "INSERT INTO posts (title, image, content, status) VALUES ('$title', '$img', '$content', '$status')";
    if($conn->query($sql)){
        echo "<script>window.location.href='index.php?act=listbv';</script>";
    }
}
?>
<div class="card p-4 mx-auto" style="max-width: 800px;">
    <h5 class="mb-4 fw-bold">Viết bài mới</h5>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label fw-bold">Tiêu đề bài viết</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label fw-bold">Hình ảnh minh họa</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Nội dung</label>
            <textarea name="content" class="form-control" rows="6" required></textarea>
        </div>

        <div class="mb-4 form-check form-switch">
            <input class="form-check-input" type="checkbox" name="status" id="status" checked>
            <label class="form-check-label" for="status">Hiển thị bài viết ngay</label>
        </div>

        <button class="btn btn-success px-4">Đăng bài</button>
        <a href="index.php?act=listbv" class="btn btn-light ms-2">Hủy</a>
    </form>
</div>