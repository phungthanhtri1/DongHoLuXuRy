<?php
// 1. Tính tổng doanh thu (Chỉ tính đơn đã giao thành công: status = 1)
$sql_revenue = "SELECT SUM(total_money) as total FROM orders WHERE status = 1";
$revenue = $conn->query($sql_revenue)->fetch_assoc()['total'] ?? 0;

// 2. Đếm số liệu
$count_orders = $conn->query("SELECT COUNT(*) as c FROM orders")->fetch_assoc()['c'];
$count_products = $conn->query("SELECT COUNT(*) as c FROM products")->fetch_assoc()['c'];
$count_users = $conn->query("SELECT COUNT(*) as c FROM users")->fetch_assoc()['c'];
?>

<h4 class="mb-4 fw-bold">Báo cáo Thống kê</h4>

<div class="row g-4 mb-4">
    <div class="col-md-3">
        <div class="card text-white bg-success h-100 shadow-sm border-0">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-title mb-0 opacity-75">DOANH THU</h6>
                        <h3 class="fw-bold my-2"><?php echo number_format($revenue); ?> đ</h3>
                    </div>
                    <i class="bi bi-currency-dollar fs-1 opacity-25"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-white bg-primary h-100 shadow-sm border-0">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-title mb-0 opacity-75">TỔNG ĐƠN HÀNG</h6>
                        <h3 class="fw-bold my-2"><?php echo $count_orders; ?></h3>
                    </div>
                    <i class="bi bi-cart-check fs-1 opacity-25"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-white bg-warning h-100 shadow-sm border-0">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-title mb-0 opacity-75">SẢN PHẨM</h6>
                        <h3 class="fw-bold my-2"><?php echo $count_products; ?></h3>
                    </div>
                    <i class="bi bi-box-seam fs-1 opacity-25"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-white bg-info h-100 shadow-sm border-0">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-title mb-0 opacity-75">KHÁCH HÀNG</h6>
                        <h3 class="fw-bold my-2"><?php echo $count_users; ?></h3>
                    </div>
                    <i class="bi bi-people fs-1 opacity-25"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="alert alert-light border shadow-sm">
    <strong><i class="bi bi-info-circle-fill text-primary"></i> Lưu ý:</strong>
    <ul class="mb-0 mt-1 ps-3 text-muted small">
        <li>Doanh thu chỉ được tính từ các đơn hàng có trạng thái <strong>"Đã giao"</strong>.</li>
        <li>Các đơn hàng "Hủy" hoặc "Chờ xử lý" sẽ không được cộng vào doanh thu.</li>
    </ul>
</div>