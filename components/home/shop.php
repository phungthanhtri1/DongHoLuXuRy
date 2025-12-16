<!-- Shop Page Start -->
<div class="container-fluid shop py-5">
	<!-- Add: page navigation -->
	<nav aria-label="site-navigation" class="mb-4 text-center">
		<a href="index.php" class="me-3">Home</a>
		<a href="shop.php" class="me-3">Shop</a>
		<a href="single_product.php" class="me-3">Product</a>
		<a href="cart.php" class="me-3">Cart</a>
		<a href="checkout.php" class="me-3">Checkout</a>
		<a href="contact.php">Contact</a>
	</nav>
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    
                    <div class="featured-product mb-4">
                        <h4 class="mb-3">Featured products</h4>
                        <div class="featured-product-item">
                            <div class="rounded me-4" style="width: 100px; height: 100px;">
                                <img src="img/product-3.png" class="img-fluid rounded" alt="Image">
                            </div>
                            <div>
                                <h6 class="mb-2">Luxury Watch</h6>
                                <div class="d-flex mb-2">
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="d-flex mb-2">
                                    <h5 class="fw-bold me-2">$2,999.00</h5>
                                    <h5 class="text-danger text-decoration-line-through">$3,500.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="featured-product-item">
                            <div class="rounded me-4" style="width: 100px; height: 100px;">
                                <img src="img/product-4.png" class="img-fluid rounded" alt="Image">
                            </div>
                            <div>
                                <h6 class="mb-2">Luxury Watch</h6>
                                <div class="d-flex mb-2">
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="d-flex mb-2">
                                    <h5 class="fw-bold me-2">$2,999.00</h5>
                                    <h5 class="text-danger text-decoration-line-through">$3,500.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="featured-product-item">
                            <div class="rounded me-4" style="width: 100px; height: 100px;">
                                <img src="img/product-5.png" class="img-fluid rounded" alt="Image">
                            </div>
                            <div>
                                <h6 class="mb-2">Luxury Watch</h6>
                                <div class="d-flex mb-2">
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="d-flex mb-2">
                                    <h5 class="fw-bold me-2">$2,999.00</h5>
                                    <h5 class="text-danger text-decoration-line-through">$3,500.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="featured-product-item">
                            <div class="rounded me-4" style="width: 100px; height: 100px;">
                                <img src="img/product-6.png" class="img-fluid rounded" alt="Image">
                            </div>
                            <div>
                                <h6 class="mb-2">Luxury Watch</h6>
                                <div class="d-flex mb-2">
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="d-flex mb-2">
                                    <h5 class="fw-bold me-2">$2,999.00</h5>
                                    <h5 class="text-danger text-decoration-line-through">$3,500.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center my-4">
                            <a href="shop.php" class="btn btn-primary px-4 py-3 rounded-pill w-100">View More</a>
                        </div>
                    </div>
                    <a href="#">
                        <div class="position-relative">
                            <img src="img/product-banner-2.jpg" class="img-fluid w-100 rounded" alt="Image">
                            <div class="text-center position-absolute d-flex flex-column align-items-center justify-content-center rounded p-4"
                                style="width: 100%; height: 100%; top: 0; right: 0; background: rgba(242, 139, 0, 0.3);">
                                <h5 class="display-6 text-primary">SALE</h5>
                                <h4 class="text-secondary">Get UP To 50% Off</h4>
                                <a href="shop.php" class="btn btn-primary rounded-pill px-4">Shop Now</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4">
                        <div class="col-xl-7">
                            <div class="input-group w-100 mx-auto d-flex">
                                <input type="search" class="form-control p-3" placeholder="keywords"
                                    aria-describedby="search-icon-1">
                                <span id="search-icon-1" class="input-group-text p-3"><i
                                        class="fa fa-search"></i></span>
                            </div>
                        </div>
                        <div class="col-xl-3 text-end">
                            <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between">
                                <label for="electronics">Sort By:</label>
                                <select id="electronics" name="electronicslist"
                                    class="border-0 form-select-sm bg-light me-3" form="electronicsform">
                                    <option value="volvo">Default Sorting</option>
                                    <option value="volv">Nothing</option>
                                    <option value="sab">Popularity</option>
                                    <option value="saab">Newness</option>
                                    <option value="opel">Average Rating</option>
                                    <option value="audio">Low to high</option>
                                    <option value="audi">High to low</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-2">
                            <ul class="nav nav-pills d-inline-flex text-center py-2 px-2 rounded bg-light mb-4">
                                <li class="nav-item me-4">
                                    <a class="bg-light" data-bs-toggle="pill" href="#tab-5">
                                        <i class="fas fa-th fa-3x text-primary"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="bg-light" data-bs-toggle="pill" href="#tab-6">
                                        <i class="fas fa-bars fa-3x text-primary"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="tab-5" class="tab-pane fade show p-0 active">
                            <div class="row g-4 product">
                                <div class="col-lg-4">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="img/product-3.png" class="img-fluid w-100 rounded-top" alt="">
                                                <div class="product-new">New</div>
                                                <div class="product-details">
                                                    <a href="single_product.php"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center rounded-bottom p-4">
                                                <a href="single_product.php" class="d-block mb-2">Watch</a>
                                                <a href="single_product.php" class="d-block h4">Luxury Watch <br> LX-2025</a>
                                                <del class="me-2 fs-5">$3,500.00</del>
                                                <span class="text-primary fs-5">$2,999.00</span>
                                            </div>
                                        </div>
                                        <div
                                            class="product-item-add border border-top-0 rounded-bottom  text-center p-4 pt-0">
                                            <a href="cart.php"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-random"></i></i></a>
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="img/product-4.png" class="img-fluid w-100 rounded-top" alt="">
                                                <div class="product-new">New</div>
                                                <div class="product-details">
                                                    <a href="single_product.php"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center rounded-bottom p-4">
                                                <a href="single_product.php" class="d-block mb-2">Watch</a>
                                                <a href="single_product.php" class="d-block h4">Luxury Watch <br> LX-2025</a>
                                                <del class="me-2 fs-5">$3,500.00</del>
                                                <span class="text-primary fs-5">$2,999.00</span>
                                            </div>
                                        </div>
                                        <div
                                            class="product-item-add border border-top-0 rounded-bottom  text-center p-4 pt-0">
                                            <a href="cart.php"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-random"></i></i></a>
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="img/product-5.png" class="img-fluid w-100 rounded-top" alt="">
                                                <div class="product-new">New</div>
                                                <div class="product-details">
                                                    <a href="single_product.php"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center rounded-bottom p-4">
                                                <a href="single_product.php" class="d-block mb-2">Watch</a>
                                                <a href="single_product.php" class="d-block h4">Luxury Watch <br> LX-2025</a>
                                                <del class="me-2 fs-5">$3,500.00</del>
                                                <span class="text-primary fs-5">$2,999.00</span>
                                            </div>
                                        </div>
                                        <div
                                            class="product-item-add border border-top-0 rounded-bottom  text-center p-4 pt-0">
                                            <a href="cart.php"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-random"></i></i></a>
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="img/product-6.png" class="img-fluid w-100 rounded-top" alt="">
                                                <div class="product-new">New</div>
                                                <div class="product-details">
                                                    <a href="single_product.php"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center rounded-bottom p-4">
                                                <a href="single_product.php" class="d-block mb-2">Watch</a>
                                                <a href="single_product.php" class="d-block h4">Luxury Watch <br> LX-2025</a>
                                                <del class="me-2 fs-5">$3,500.00</del>
                                                <span class="text-primary fs-5">$2,999.00</span>
                                            </div>
                                        </div>
                                        <div
                                            class="product-item-add border border-top-0 rounded-bottom  text-center p-4 pt-0">
                                            <a href="cart.php"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-random"></i></i></a>
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="img/product-7.png" class="img-fluid w-100 rounded-top" alt="">
                                                <div class="product-new">New</div>
                                                <div class="product-details">
                                                    <a href="single_product.php"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center rounded-bottom p-4">
                                                <a href="single_product.php" class="d-block mb-2">Watch</a>
                                                <a href="single_product.php" class="d-block h4">Luxury Watch <br> LX-2025</a>
                                                <del class="me-2 fs-5">$3,500.00</del>
                                                <span class="text-primary fs-5">$2,999.00</span>
                                            </div>
                                        </div>
                                        <div
                                            class="product-item-add border border-top-0 rounded-bottom  text-center p-4 pt-0">
                                            <a href="cart.php"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-random"></i></i></a>
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="img/product-8.png" class="img-fluid w-100 rounded-top" alt="">
                                                <div class="product-new">New</div>
                                                <div class="product-details">
                                                    <a href="single_product.php"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center rounded-bottom p-4">
                                                <a href="single_product.php" class="d-block mb-2">Watch</a>
                                                <a href="single_product.php" class="d-block h4">Luxury Watch <br> LX-2025</a>
                                                <del class="me-2 fs-5">$3,500.00</del>
                                                <span class="text-primary fs-5">$2,999.00</span>
                                            </div>
                                        </div>
                                        <div
                                            class="product-item-add border border-top-0 rounded-bottom  text-center p-4 pt-0">
                                            <a href="cart.php"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-random"></i></i></a>
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="img/product-9.png" class="img-fluid w-100 rounded-top" alt="">
                                                <div class="product-new">New</div>
                                                <div class="product-details">
                                                    <a href="single_product.php"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center rounded-bottom p-4">
                                                <a href="single_product.php" class="d-block mb-2">Watch</a>
                                                <a href="single_product.php" class="d-block h4">Luxury Watch <br> LX-2025</a>
                                                <del class="me-2 fs-5">$3,500.00</del>
                                                <span class="text-primary fs-5">$2,999.00</span>
                                            </div>
                                        </div>
                                        <div
                                            class="product-item-add border border-top-0 rounded-bottom  text-center p-4 pt-0">
                                            <a href="cart.php"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-random"></i></i></a>
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="img/product-10.png" class="img-fluid w-100 rounded-top"
                                                    alt="">
                                                <div class="product-new">New</div>
                                                <div class="product-details">
                                                    <a href="single_product.php"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center rounded-bottom p-4">
                                                <a href="single_product.php" class="d-block mb-2">Watch</a>
                                                <a href="single_product.php" class="d-block h4">Luxury Watch <br> LX-2025</a>
                                                <del class="me-2 fs-5">$3,500.00</del>
                                                <span class="text-primary fs-5">$2,999.00</span>
                                            </div>
                                        </div>
                                        <div
                                            class="product-item-add border border-top-0 rounded-bottom  text-center p-4 pt-0">
                                            <a href="cart.php"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-random"></i></i></a>
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="img/product-11.png" class="img-fluid w-100 rounded-top"
                                                    alt="">
                                                <div class="product-new">New</div>
                                                <div class="product-details">
                                                    <a href="single_product.php"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center rounded-bottom p-4">
                                                <a href="single_product.php" class="d-block mb-2">Watch</a>
                                                <a href="single_product.php" class="d-block h4">Luxury Watch <br> LX-2025</a>
                                                <del class="me-2 fs-5">$3,500.00</del>
                                                <span class="text-primary fs-5">$2,999.00</span>
                                            </div>
                                        </div>
                                        <div
                                            class="product-item-add border border-top-0 rounded-bottom  text-center p-4 pt-0">
                                            <a href="cart.php"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-random"></i></i></a>
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="pagination d-flex justify-content-center mt-5">
                                        <a href="shop.php?page=1" class="rounded">&laquo;</a>
                                        <a href="shop.php?page=1" class="active rounded">1</a>
                                        <a href="shop.php?page=2" class="rounded">2</a>
                                        <a href="shop.php?page=3" class="rounded">3</a>
                                        <a href="shop.php?page=4" class="rounded">4</a>
                                        <a href="shop.php?page=5" class="rounded">5</a>
                                        <a href="shop.php?page=6" class="rounded">6</a>
                                        <a href="shop.php?page=2" class="rounded">&raquo;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-6" class="products tab-pane fade show p-0">
                            <div class="row g-4 products-mini">
                                <div class="col-lg-6">
                                    <div class="products-mini-item border">
                                        <div class="row g-0">
                                            <div class="col-5">
                                                <div class="products-mini-img border-end h-100">
                                                    <img src="img/product-3.png" class="img-fluid w-100 h-100"
                                                        alt="Image">
                                                    <div class="products-mini-icon rounded-circle bg-primary">
                                                        <a href="#"><i class="fa fa-eye fa-1x text-white"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="products-mini-content p-3">
                                                    <a href="single_product.php" class="d-block mb-2">Đồng hồ</a>
                                                    <a href="single_product.php" class="d-block h4">Đồng hồ cao cấp <br> LX-2025</a>
                                                    <del class="me-2 fs-5">$3,500.00</del>
                                                    <span class="text-primary fs-5">$2,999.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="products-mini-add border p-3">
                                            <a href="cart.php"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex">
                                                <a href="#"
                                                    class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                        class="rounded-circle btn-sm-square border"><i
                                                            class="fas fa-random"></i></i></a>
                                                <a href="#"
                                                    class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                        class="rounded-circle btn-sm-square border"><i
                                                            class="fas fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="products-mini-item border">
                                        <div class="row g-0">
                                            <div class="col-5">
                                                <div class="products-mini-img border-end h-100">
                                                    <img src="img/product-4.png" class="img-fluid w-100 h-100"
                                                        alt="Image">
                                                    <div class="products-mini-icon rounded-circle bg-primary">
                                                        <a href="#"><i class="fa fa-eye fa-1x text-white"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="products-mini-content p-3">
                                                    <a href="single_product.php" class="d-block mb-2">Đồng hồ</a>
                                                    <a href="single_product.php" class="d-block h4">Đồng hồ cao cấp <br> LX-2025</a>
                                                    <del class="me-2 fs-5">$3,500.00</del>
                                                    <span class="text-primary fs-5">$2,999.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="products-mini-add border p-3">
                                            <a href="cart.php"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex">
                                                <a href="#"
                                                    class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                        class="rounded-circle btn-sm-square border"><i
                                                            class="fas fa-random"></i></i></a>
                                                <a href="#"
                                                    class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                        class="rounded-circle btn-sm-square border"><i
                                                            class="fas fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="products-mini-item border">
                                        <div class="row g-0">
                                            <div class="col-5">
                                                <div class="products-mini-img border-end h-100">
                                                    <img src="img/product-5.png" class="img-fluid w-100 h-100"
                                                        alt="Image">
                                                    <div class="products-mini-icon rounded-circle bg-primary">
                                                        <a href="#"><i class="fa fa-eye fa-1x text-white"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="products-mini-content p-3">
                                                    <a href="single_product.php" class="d-block mb-2">Đồng hồ</a>
                                                    <a href="single_product.php" class="d-block h4">Đồng hồ cao cấp <br> LX-2025</a>
                                                    <del class="me-2 fs-5">$3,500.00</del>
                                                    <span class="text-primary fs-5">$2,999.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="products-mini-add border p-3">
                                            <a href="cart.php"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex">
                                                <a href="#"
                                                    class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                        class="rounded-circle btn-sm-square border"><i
                                                            class="fas fa-random"></i></i></a>
                                                <a href="#"
                                                    class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                        class="rounded-circle btn-sm-square border"><i
                                                            class="fas fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="products-mini-item border">
                                        <div class="row g-0">
                                            <div class="col-5">
                                                <div class="products-mini-img border-end h-100">
                                                    <img src="img/product-6.png" class="img-fluid w-100 h-100"
                                                        alt="Image">
                                                    <div class="products-mini-icon rounded-circle bg-primary">
                                                        <a href="#"><i class="fa fa-eye fa-1x text-white"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="products-mini-content p-3">
                                                    <a href="single_product.php" class="d-block mb-2">Đồng hồ</a>
                                                    <a href="single_product.php" class="d-block h4">Đồng hồ cao cấp <br> LX-2025</a>
                                                    <del class="me-2 fs-5">$3,500.00</del>
                                                    <span class="text-primary fs-5">$2,999.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="products-mini-add border p-3">
                                            <a href="cart.php"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex">
                                                <a href="#"
                                                    class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                        class="rounded-circle btn-sm-square border"><i
                                                            class="fas fa-random"></i></i></a>
                                                <a href="#"
                                                    class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                        class="rounded-circle btn-sm-square border"><i
                                                            class="fas fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="products-mini-item border">
                                        <div class="row g-0">
                                            <div class="col-5">
                                                <div class="products-mini-img border-end h-100">
                                                    <img src="img/product-7.png" class="img-fluid w-100 h-100"
                                                        alt="Image">
                                                    <div class="products-mini-icon rounded-circle bg-primary">
                                                        <a href="#"><i class="fa fa-eye fa-1x text-white"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="products-mini-content p-3">
                                                    <a href="single_product.php" class="d-block mb-2">Đồng hồ</a>
                                                    <a href="single_product.php" class="d-block h4">Đồng hồ cao cấp <br> LX-2025</a>
                                                    <del class="me-2 fs-5">$3,500.00</del>
                                                    <span class="text-primary fs-5">$2,999.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="products-mini-add border p-3">
                                            <a href="cart.php"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex">
                                                <a href="#"
                                                    class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                        class="rounded-circle btn-sm-square border"><i
                                                            class="fas fa-random"></i></i></a>
                                                <a href="#"
                                                    class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                        class="rounded-circle btn-sm-square border"><i
                                                            class="fas fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="products-mini-item border">
                                        <div class="row g-0">
                                            <div class="col-5">
                                                <div class="products-mini-img border-end h-100">
                                                    <img src="img/product-8.png" class="img-fluid w-100 h-100"
                                                        alt="Image">
                                                    <div class="products-mini-icon rounded-circle bg-primary">
                                                        <a href="#"><i class="fa fa-eye fa-1x text-white"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="products-mini-content p-3">
                                                    <a href="single_product.php" class="d-block mb-2">Đồng hồ</a>
                                                    <a href="single_product.php" class="d-block h4">Đồng hồ cao cấp <br> LX-2025</a>
                                                    <del class="me-2 fs-5">$3,500.00</del>
                                                    <span class="text-primary fs-5">$2,999.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="products-mini-add border p-3">
                                            <a href="cart.php"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex">
                                                <a href="#"
                                                    class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                        class="rounded-circle btn-sm-square border"><i
                                                            class="fas fa-random"></i></i></a>
                                                <a href="#"
                                                    class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                        class="rounded-circle btn-sm-square border"><i
                                                            class="fas fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="products-mini-item border">
                                        <div class="row g-0">
                                            <div class="col-5">
                                                <div class="products-mini-img border-end h-100">
                                                    <img src="img/product-9.png" class="img-fluid w-100 h-100"
                                                        alt="Image">
                                                    <div class="products-mini-icon rounded-circle bg-primary">
                                                        <a href="#"><i class="fa fa-eye fa-1x text-white"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="products-mini-content p-3">
                                                    <a href="single_product.php" class="d-block mb-2">Đồng hồ</a>
                                                    <a href="single_product.php" class="d-block h4">Đồng hồ cao cấp <br> LX-2025</a>
                                                    <del class="me-2 fs-5">$3,500.00</del>
                                                    <span class="text-primary fs-5">$2,999.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="products-mini-add border p-3">
                                            <a href="cart.php"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex">
                                                <a href="#"
                                                    class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                        class="rounded-circle btn-sm-square border"><i
                                                            class="fas fa-random"></i></i></a>
                                                <a href="#"
                                                    class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                        class="rounded-circle btn-sm-square border"><i
                                                            class="fas fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="products-mini-item border">
                                        <div class="row g-0">
                                            <div class="col-5">
                                                <div class="products-mini-img border-end h-100">
                                                    <img src="img/product-10.png" class="img-fluid w-100 h-100"
                                                        alt="Image">
                                                    <div class="products-mini-icon rounded-circle bg-primary">
                                                        <a href="#"><i class="fa fa-eye fa-1x text-white"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="products-mini-content p-3">
                                                    <a href="single_product.php" class="d-block mb-2">Đồng hồ</a>
                                                    <a href="single_product.php" class="d-block h4">Đồng hồ cao cấp <br> LX-2025</a>
                                                    <del class="me-2 fs-5">$3,500.00</del>
                                                    <span class="text-primary fs-5">$2,999.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="products-mini-add border p-3">
                                            <a href="cart.php"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex">
                                                <a href="#"
                                                    class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                        class="rounded-circle btn-sm-square border"><i
                                                            class="fas fa-random"></i></i></a>
                                                <a href="#"
                                                    class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                        class="rounded-circle btn-sm-square border"><i
                                                            class="fas fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="products-mini-item border">
                                        <div class="row g-0">
                                            <div class="col-5">
                                                <div class="products-mini-img border-end h-100">
                                                    <img src="img/product-11.png" class="img-fluid w-100 h-100"
                                                        alt="Image">
                                                    <div class="products-mini-icon rounded-circle bg-primary">
                                                        <a href="#"><i class="fa fa-eye fa-1x text-white"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="products-mini-content p-3">
                                                    <a href="single_product.php" class="d-block mb-2">Đồng hồ</a>
                                                    <a href="single_product.php" class="d-block h4">Đồng hồ cao cấp <br> LX-2025</a>
                                                    <del class="me-2 fs-5">$3,500.00</del>
                                                    <span class="text-primary fs-5">$2,999.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="products-mini-add border p-3">
                                            <a href="cart.php"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex">
                                                <a href="#"
                                                    class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                        class="rounded-circle btn-sm-square border"><i
                                                            class="fas fa-random"></i></i></a>
                                                <a href="#"
                                                    class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                        class="rounded-circle btn-sm-square border"><i
                                                            class="fas fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="pagination d-flex justify-content-center mt-5">
                                        <a href="shop.php?page=1" class="rounded">&laquo;</a>
                                        <a href="shop.php?page=1" class="active rounded">1</a>
                                        <a href="shop.php?page=2" class="rounded">2</a>
                                        <a href="shop.php?page=3" class="rounded">3</a>
                                        <a href="shop.php?page=4" class="rounded">4</a>
                                        <a href="shop.php?page=5" class="rounded">5</a>
                                        <a href="shop.php?page=6" class="rounded">6</a>
                                        <a href="shop.php?page=2" class="rounded">&raquo;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Page End -->