<?php
$id = $_GET['id'];
$post = $conn->query("SELECT * FROM posts WHERE id=$id")->fetch_assoc();

if($_SERVER['REQUEST_METHOD']=='POST'){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $status = isset($_POST['status']) ? 1 : 0;
    
    $img = $post['image']; // Giữ ảnh cũ
    if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){
        $img = time()."_".$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/".$img);
    }

    $sql = "UPDATE posts SET title='$title', image='$img', content='$content', status='$status' WHERE id=$id";
    if($conn->query($sql)){
        echo "<script>window.location.href='index.php?act=listbv';</script>";
    }
}
?>
<div class="card p-4 mx-auto" style="max-width: 800px;">
    <h5 class="mb-4 fw-bold">Chỉnh sửa bài viết</h5>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label fw-bold">Tiêu đề</label>
            <input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label fw-bold">Hình ảnh</label>
            <input type="file" name="image" class="form-control mb-2">
            <?php if($post['image']) echo "<img src='../uploads/{$post['image']}' width='100' class='rounded border'>"; ?>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Nội dung</label>
            <textarea name="content" class="form-control" rows="6" required><?php echo $post['content']; ?></textarea>
        </div>

        <div class="mb-4 form-check form-switch">
            <input class="form-check-input" type="checkbox" name="status" id="status" <?php echo ($post['status']==1)?'checked':''; ?>>
            <label class="form-check-label" for="status">Hiển thị bài viết</label>
        </div>

        <button class="btn btn-warning px-4 text-white">Cập nhật</button>
        <a href="index.php?act=listbv" class="btn btn-light ms-2">Hủy</a>
    </form>
</div>