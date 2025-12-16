<?php
session_start();
define('COMPONENT_PATH', __DIR__ . '/components/');
require_once 'lib/db.php';

// Lấy hành động từ URL, mặc định là home
$act = isset($_GET['act']) ? $_GET['act'] : 'home';

// Danh sách tiêu đề trang tương ứng với hành động
$titles = [
    'home' => 'Tổng quan hệ thống',
    
    // Sản phẩm
    'listsp' => 'Danh sách sản phẩm',
    'addsp' => 'Thêm sản phẩm mới',
    'editsp' => 'Cập nhật sản phẩm',
    
    // Danh mục
    'danhmuc' => 'Quản lý Danh mục',
    'adddm' => 'Thêm danh mục',
    'editdm' => 'Sửa danh mục',

    // Bài viết (Tin tức)
    'listbv' => 'Quản lý Tin tức',
    'addbv' => 'Viết bài mới',
    'editbv' => 'Chỉnh sửa bài viết',

    // Khác
    'donhang' => 'Quản lý đơn hàng',
    'khachhang' => 'Danh sách khách hàng',
    'thongke' => 'Báo cáo doanh thu'
];

// Gán tiêu đề, nếu không có trong danh sách thì để mặc định
$title = isset($titles[$act]) ? $titles[$act] : 'Admin Panel';

// Điều hướng (Switch Case)
switch ($act) {
    case 'home': $component = 'main_content.php'; break;
    
    // --- SẢN PHẨM ---
    case 'listsp': $component = 'product_list.php'; break;
    case 'addsp': $component = 'product_add.php'; break;
    case 'editsp': $component = 'product_edit.php'; break;

    // --- DANH MỤC ---
    case 'danhmuc': $component = 'category_list.php'; break;
    case 'adddm': $component = 'category_add.php'; break;
    case 'editdm': $component = 'category_edit.php'; break;

    // --- BÀI VIẾT (TIN TỨC) ---
    case 'listbv': $component = 'post_list.php'; break;
    case 'addbv': $component = 'post_add.php'; break;
    case 'editbv': $component = 'post_edit.php'; break;

    // --- ĐƠN HÀNG & KHÁCH HÀNG ---
    case 'donhang': $component = 'order_list.php'; break;
    case 'khachhang': $component = 'user_list.php'; break;
    
    // --- BÁO CÁO ---
    case 'thongke': $component = 'report.php'; break;

    default: $component = 'main_content.php'; break;
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f3f4f6; height: 100vh; display: flex; overflow: hidden; }
        
        /* Sidebar */
        #sidebar { width: 260px; background: #111827; color: #9ca3af; display: flex; flex-direction: column; flex-shrink: 0; transition: all 0.3s; }
        .brand-box { padding: 20px; text-align: center; border-bottom: 1px solid #1f2937; margin-bottom: 10px; }
        .brand-text { color: #fff; font-weight: 700; letter-spacing: 1px; font-size: 1.2rem; text-decoration: none; }
        .nav-link { color: #9ca3af; padding: 12px 20px; margin: 4px 12px; border-radius: 8px; font-size: 0.95rem; display: flex; align-items: center; transition: 0.2s; }
        .nav-link:hover { background: #1f2937; color: #fff; }
        .nav-link.active { background: #3b82f6; color: #fff; box-shadow: 0 4px 6px -1px rgba(59, 130, 246, 0.5); }
        .nav-link i { margin-right: 12px; font-size: 1.1rem; }
        
        /* Content */
        #content { flex-grow: 1; overflow-y: auto; display: flex; flex-direction: column; }
        .main-header { background: #fff; padding: 15px 30px; border-bottom: 1px solid #e5e7eb; display: flex; align-items: center; justify-content: space-between; }
        .page-content { padding: 30px; }
        .card { border: none; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); background: #fff; }
    </style>
</head>
<body>
    
    <?php include COMPONENT_PATH . 'sidebar.php'; ?>

    <div id="content">
        <div class="main-header">
            <h4 class="m-0 fw-bold text-dark"><?php echo $title; ?></h4>
            <div class="user-info d-flex align-items-center gap-2">
                <div class="text-end lh-1">
                    <span class="d-block fw-bold text-dark small">Admin</span>
                    <small class="text-success" style="font-size: 0.7rem;">● Online</small>
                </div>
                <img src="https://ui-avatars.com/api/?name=Admin&background=random" class="rounded-circle" width="40">
            </div>
        </div>

        <div class="page-content">
            <?php 
                if(file_exists(COMPONENT_PATH . $component)) {
                    include COMPONENT_PATH . $component; 
                } else {
                    echo "<div class='alert alert-danger'>Không tìm thấy file chức năng: <strong>$component</strong>. <br>Hãy kiểm tra lại xem bạn đã tạo file này trong thư mục <code>admin/components/</code> chưa.</div>";
                }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>