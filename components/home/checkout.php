<!-- Checkout Page Start -->
<div class="container-fluid bg-light overflow-hidden py-5">
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
		<h1 class="mb-4 wow fadeInUp" data-wow-delay="0.1s">Billing details</h1>
		<form action="#">
			<div class="row g-5">
				<div class="col-md-12 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
					<div class="row">
						<div class="col-md-12 col-lg-6">
							<div class="form-item w-100">
								<label class="form-label my-3">First Name<sup>*</sup></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-12 col-lg-6">
							<div class="form-item w-100">
								<label class="form-label my-3">Last Name<sup>*</sup></label>
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-item">
						<label class="form-label my-3">Company Name<sup>*</sup></label>
						<input type="text" class="form-control">
					</div>
					<div class="form-item">
						<label class="form-label my-3">Address <sup>*</sup></label>
						<input type="text" class="form-control" placeholder="House Number Street Name">
					</div>
					<div class="form-item">
						<label class="form-label my-3">Town/City<sup>*</sup></label>
						<input type="text" class="form-control">
					</div>
					<div class="form-item">
						<label class="form-label my-3">Country<sup>*</sup></label>
						<input type="text" class="form-control">
					</div>
					<div class="form-item">
						<label class="form-label my-3">Postcode/Zip<sup>*</sup></label>
						<input type="text" class="form-control">
					</div>
					<div class="form-item">
						<label class="form-label my-3">Mobile<sup>*</sup></label>
						<input type="tel" class="form-control">
					</div>
					<div class="form-item">
						<label class="form-label my-3">Email Address<sup>*</sup></label>
						<input type="email" class="form-control">
					</div>
					<div class="form-check my-3">
						<input type="checkbox" class="form-check-input" id="Account-1" name="Accounts"
							value="Accounts">
						<label class="form-check-label" for="Account-1">Create an account?</label>
					</div>
					<hr>
					<div class="form-check my-3">
						<input class="form-check-input" type="checkbox" id="Address-1" name="Address"
							value="Address">
						<label class="form-check-label" for="Address-1">Ship to a different address?</label>
					</div>
					<div class="form-item">
						<textarea name="text" class="form-control" spellcheck="false" cols="30" rows="11"
							placeholder="Oreder Notes (Optional)"></textarea>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr class="text-center">
									<th scope="col" class="text-start">Name</th>
									<th scope="col">Model</th>
									<th scope="col">Price</th>
									<th scope="col">Quantity</th>
									<th scope="col">Total</th>
								</tr>
							</thead>
							<tbody>
								<!-- Updated product rows -->
								<tr class="text-center">
									<th scope="row" class="text-start py-4">Luxury Watch</th>
									<td class="py-4">LX-2025</td>
									<td class="py-4">$2,999.00</td>
									<td class="py-4 text-center">1</td>
									<td class="py-4">$2,999.00</td>
								</tr>
								<tr class="text-center">
									<th scope="row" class="text-start py-4">Classic Chronograph</th>
									<td class="py-4">CC-01</td>
									<td class="py-4">$1,499.00</td>
									<td class="py-4">1</td>
									<td class="py-4">$1,499.00</td>
								</tr>
								<tr class="text-center">
									<th scope="row" class="text-start py-4">Sport Diver</th>
									<td class="py-4">SD-300</td>
									<td class="py-4">$1,199.00</td>
									<td class="py-4">1</td>
									<td class="py-4">$1,199.00</td>
								</tr>
								<tr class="text-center">
									<th scope="row" class="text-start py-4">Minimalist</th>
									<td class="py-4">M-100</td>
									<td class="py-4">$799.00</td>
									<td class="py-4">1</td>
									<td class="py-4">$799.00</td>
								</tr>
								<tr class="text-center">
									<th scope="row" class="text-start py-4">Automatic Gold</th>
									<td class="py-4">AG-88</td>
									<td class="py-4">$4,250.00</td>
									<td class="py-4">1</td>
									<td class="py-4">$4,250.00</td>
								</tr>
								<tr>
									<th scope="row">
									</th>
									<td class="py-4"></td>
									<td class="py-4"></td>
									<td class="py-4">
										<p class="mb-0 text-dark py-2">Subtotal</p>
									</td>
									<td class="py-4">
										<div class="py-2 text-center border-bottom border-top">
											<!-- Updated subtotal value -->
											<p class="mb-0 text-dark">$10,746.00</p>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
									</th>
									<td class="py-4">
										<p class="mb-0 text-dark py-4">Shipping</p>
									</td>
									<td colspan="3" class="py-4">
										<div class="form-check text-start">
											<input type="checkbox" class="form-check-input bg-primary border-0"
												id="Shipping-1" name="Shipping-1" value="Shipping">
											<label class="form-check-label" for="Shipping-1">Free Shipping</label>
										</div>
										<div class="form-check text-start">
											<input type="checkbox" class="form-check-input bg-primary border-0"
												id="Shipping-2" name="Shipping-1" value="Shipping">
											<label class="form-check-label" for="Shipping-2">Flat rate:
												$15.00</label>
										</div>
										<div class="form-check text-start">
											<input type="checkbox" class="form-check-input bg-primary border-0"
												id="Shipping-3" name="Shipping-1" value="Shipping">
											<label class="form-check-label" for="Shipping-3">Local Pickup:
												$8.00</label>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
									</th>
									<td class="py-4">
										<p class="mb-0 text-dark text-uppercase py-2">TOTAL</p>
									</td>
									<td class="py-4"></td>
									<td class="py-4"></td>
									<td class="py-4">
										<div class="py-2 text-center border-bottom border-top">
											<!-- Updated total value -->
											<p class="mb-0 text-dark">$10,761.00</p>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="row g-0 text-center align-items-center justify-content-center border-bottom py-2">
						<div class="col-12">
							<div class="form-check text-start my-2">
								<input type="checkbox" class="form-check-input bg-primary border-0" id="Transfer-1"
									name="Transfer" value="Transfer">
								<label class="form-check-label" for="Transfer-1">Direct Bank Transfer</label>
							</div>
							<p class="text-start text-dark">Make your payment directly into our bank account. Please
								use your Order ID as the payment reference. Your order will not be shipped until the
								funds have cleared in our account.</p>
						</div>
					</div>
					<div class="row g-4 text-center align-items-center justify-content-center border-bottom py-2">
						<div class="col-12">
							<div class="form-check text-start my-2">
								<input type="checkbox" class="form-check-input bg-primary border-0" id="Payments-1"
									name="Payments" value="Payments">
								<label class="form-check-label" for="Payments-1">Check Payments</label>
							</div>
						</div>
					</div>
					<div class="row g-4 text-center align-items-center justify-content-center border-bottom py-2">
						<div class="col-12">
							<div class="form-check text-start my-2">
								<input type="checkbox" class="form-check-input bg-primary border-0" id="Delivery-1"
									name="Delivery" value="Delivery">
								<label class="form-check-label" for="Delivery-1">Cash On Delivery</label>
							</div>
						</div>
					</div>
					<div class="row g-4 text-center align-items-center justify-content-center border-bottom py-2">
						<div class="col-12">
							<div class="form-check text-start my-2">
								<input type="checkbox" class="form-check-input bg-primary border-0" id="Paypal-1"
									name="Paypal" value="Paypal">
								<label class="form-check-label" for="Paypal-1">Paypal</label>
							</div>
						</div>
					</div>
					<div class="row g-4 text-center align-items-center justify-content-center pt-4">
						<button type="button"
							class="btn btn-primary border-secondary py-3 px-4 text-uppercase w-100 text-primary">Place
							Order</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- Checkout Page End -->