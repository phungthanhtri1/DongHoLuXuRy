<?php
// Lấy số liệu
$sp_count = $conn->query("SELECT COUNT(*) as c FROM products")->fetch_assoc()['c'];
$dh_count = $conn->query("SELECT COUNT(*) as c FROM orders")->fetch_assoc()['c'];
$kh_count = $conn->query("SELECT COUNT(*) as c FROM users")->fetch_assoc()['c'];
$dt_total = $conn->query("SELECT SUM(total_money) as t FROM orders WHERE status=1")->fetch_assoc()['t'] ?? 0;
?>

<div class="row g-4 mb-4">
    <div class="col-md-3">
        <div class="card p-3 border-start border-4 border-primary h-100">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="text-muted small text-uppercase fw-bold">Doanh thu</span>
                    <h4 class="mb-0 fw-bold text-primary"><?php echo number_format($dt_total / 1000000, 1); ?>M <small class="fs-6 text-muted">vnđ</small></h4>
                </div>
                <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary"><i class="bi bi-currency-dollar fs-4"></i></div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-3 border-start border-4 border-success h-100">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="text-muted small text-uppercase fw-bold">Đơn hàng</span>
                    <h4 class="mb-0 fw-bold text-success"><?php echo $dh_count; ?></h4>
                </div>
                <div class="bg-success bg-opacity-10 p-3 rounded-circle text-success"><i class="bi bi-cart-check fs-4"></i></div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-3 border-start border-4 border-warning h-100">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="text-muted small text-uppercase fw-bold">Sản phẩm</span>
                    <h4 class="mb-0 fw-bold text-warning"><?php echo $sp_count; ?></h4>
                </div>
                <div class="bg-warning bg-opacity-10 p-3 rounded-circle text-warning"><i class="bi bi-box-seam fs-4"></i></div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-3 border-start border-4 border-info h-100">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="text-muted small text-uppercase fw-bold">Khách hàng</span>
                    <h4 class="mb-0 fw-bold text-info"><?php echo $kh_count; ?></h4>
                </div>
                <div class="bg-info bg-opacity-10 p-3 rounded-circle text-info"><i class="bi bi-people fs-4"></i></div>
            </div>
        </div>
    </div>
</div>