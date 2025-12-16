<?php
// Xử lý Xóa
if(isset($_GET['del_id'])){
    $conn->query("DELETE FROM posts WHERE id=".intval($_GET['del_id']));
    echo "<script>window.location.href='index.php?act=listbv';</script>";
}
// Xử lý Ẩn/Hiện nhanh
if(isset($_GET['toggle_id']) && isset($_GET['status'])){
    $new_status = ($_GET['status'] == 1) ? 0 : 1;
    $conn->query("UPDATE posts SET status=$new_status WHERE id=".intval($_GET['toggle_id']));
    echo "<script>window.location.href='index.php?act=listbv';</script>";
}

$list = $conn->query("SELECT * FROM posts ORDER BY id DESC");
?>

<div class="card p-4">
    <div class="d-flex justify-content-between mb-3 align-items-center">
        <h5 class="fw-bold m-0">Danh sách Bài viết</h5>
        <a href="index.php?act=addbv" class="btn btn-primary btn-sm"><i class="bi bi-plus-lg"></i> Viết bài mới</a>
    </div>
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th width="5%">ID</th>
                    <th width="10%">Hình</th>
                    <th width="40%">Tiêu đề</th>
                    <th width="15%">Trạng thái</th>
                    <th width="15%">Ngày tạo</th>
                    <th width="15%" class="text-end">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $list->fetch_assoc()): ?>
                <tr>
                    <td>#<?php echo $row['id']; ?></td>
                    <td>
                        <?php if($row['image']): ?>
                            <img src="../uploads/<?php echo $row['image']; ?>" width="50" class="rounded border">
                        <?php else: ?>
                            <span class="text-muted small">No img</span>
                        <?php endif; ?>
                    </td>
                    <td class="fw-bold"><?php echo $row['title']; ?></td>
                    <td>
                        <a href="index.php?act=listbv&toggle_id=<?php echo $row['id']; ?>&status=<?php echo $row['status']; ?>" 
                           class="badge text-decoration-none <?php echo ($row['status']==1)?'bg-success':'bg-secondary'; ?>">
                           <?php echo ($row['status']==1) ? 'Đang hiện' : 'Đang ẩn'; ?>
                        </a>
                    </td>
                    <td class="small text-muted"><?php echo date('d/m/Y', strtotime($row['created_at'])); ?></td>
                    <td class="text-end">
                        <a href="index.php?act=editbv&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-light text-primary"><i class="bi bi-pencil-square"></i></a>
                        <a href="index.php?act=listbv&del_id=<?php echo $row['id']; ?>" class="btn btn-sm btn-light text-danger" onclick="return confirm('Xóa bài viết này?')"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>