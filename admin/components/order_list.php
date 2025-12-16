<?php
if (isset($_GET['st_id'])) {
    $conn->query("UPDATE orders SET status={$_GET['st']} WHERE id={$_GET['st_id']}");
    echo "<script>window.location.href='index.php?act=donhang';</script>";
}
?>
<div class="card p-4">
    <table class="table table-hover align-middle">
        <thead>
            <tr>
                <th>Mã</th>
                <th>Khách hàng</th>
                <th>Tổng tiền</th>
                <th>Ngày đặt</th>
                <th>Trạng thái</th>
                <th>Xử lý</th>
            </tr>
        </thead>
        <tbody>
            <?php $res = $conn->query("SELECT * FROM orders ORDER BY id DESC");
            while ($row = $res->fetch_assoc()): ?>
                <tr>
                    <td><span class="badge bg-light text-dark border">#<?php echo $row['id']; ?></span></td>
                    <td>
                        <div class="fw-bold"><?php echo $row['customer_name']; ?></div>
                        <div class="small text-muted"><?php echo $row['phone']; ?></div>
                    </td>
                    <td class="fw-bold text-primary"><?php echo number_format($row['total_money']); ?> đ</td>
                    <td class="small text-secondary"><?php echo date('d/m H:i', strtotime($row['created_at'])); ?></td>
                    <td>
                        <?php if ($row['status'] == 1) echo '<span class="badge bg-success bg-opacity-10 text-success px-3">Hoàn thành</span>';
                        elseif ($row['status'] == 2) echo '<span class="badge bg-danger bg-opacity-10 text-danger px-3">Đã hủy</span>';
                        else echo '<span class="badge bg-warning bg-opacity-10 text-warning px-3">Chờ xử lý</span>'; ?>
                    </td>
                    <td>
                        <?php if ($row['status'] == 0): ?>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light border dropdown-toggle" type="button" data-bs-toggle="dropdown">Action</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item text-success" href="index.php?act=donhang&st_id=<?php echo $row['id']; ?>&st=1">Duyệt đơn</a></li>
                                    <li><a class="dropdown-item text-danger" href="index.php?act=donhang&st_id=<?php echo $row['id']; ?>&st=2">Hủy đơn</a></li>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>