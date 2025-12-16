<div id="sidebar">
    <div class="brand-box">
        <a href="index.php" class="brand-text text-uppercase text-decoration-none text-white">
            <i class="bi bi-watch"></i> LUXURY TIME
        </a>
    </div>
    
    <nav class="nav flex-column">
        <a href="index.php?act=home" class="nav-link <?php echo ($act=='home')?'active':''; ?>">
            <i class="bi bi-grid-1x2-fill"></i> Tổng quan
        </a>
        
        <div class="text-uppercase small fw-bold mt-4 mb-2 px-4 text-secondary" style="font-size: 0.7rem;">Quản lý</div>
        
        <a href="index.php?act=danhmuc" class="nav-link <?php echo (strpos($act,'dm')!==false || $act=='danhmuc')?'active':''; ?>">
            <i class="bi bi-tags-fill"></i> Danh mục
        </a>
        
        <a href="index.php?act=listsp" class="nav-link <?php echo (strpos($act,'sp')!==false)?'active':''; ?>">
            <i class="bi bi-box-seam-fill"></i> Sản phẩm
        </a>
        
        <a href="index.php?act=donhang" class="nav-link <?php echo ($act=='donhang')?'active':''; ?>">
            <i class="bi bi-cart-fill"></i> Đơn hàng
        </a>
        
        <a href="index.php?act=khachhang" class="nav-link <?php echo ($act=='khachhang')?'active':''; ?>">
            <i class="bi bi-people-fill"></i> Khách hàng
        </a>

        <div class="text-uppercase small fw-bold mt-4 mb-2 px-4 text-secondary" style="font-size: 0.7rem;">Báo cáo</div>

        <a href="index.php?act=thongke" class="nav-link <?php echo ($act=='thongke')?'active':''; ?>">
            <i class="bi bi-bar-chart-fill"></i> Thống kê
        </a>
    </nav>
</div>