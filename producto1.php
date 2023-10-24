<!DOCTYPE html><html lang="en">

<?PHP include("shorts/head.html"); ?>

<body>

	<main class="main">
		
		<div class="main-inner">

			<?PHP include("shorts/nav.html"); ?>

			<!-- Begin bread crumbs -->
			<nav class="bread-crumbs">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<ul class="bread-crumbs-list">
								<li>
									<a href="index.php">Inicio</a>
									<i class="material-icons md-18">chevron_right</i>
								</li>
								<li>
									<a href="catalogo.php">Catálogo</a>
									<i class="material-icons md-18">chevron_right</i>
								</li>
								<li>Producto 1</li>
							</ul>
						</div>
					</div>
				</div>
			</nav><!-- End bread crumbs -->

			<article class="section">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="section-heading heading-center section-heading-animate">
								<h1>Producto 1</h1>
							</div>
						</div>
						<div class="col-6">
							<div class="content">
								<div class="item-bordered item-border-radius">
									<img src="assets/img/products/producto1.jpeg" alt="">
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="content">
								<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
								<h5>Características</h5>
								<ul>
									<li>Atributo 1</li>
									<li>Atributo 2</li>
									<li>Atributo 3</li>
									<li>Atributo 4</li>
								</ul>
								<div class="section-footer col-12 section-footer-animate">
									<div class="btn-group">
										<a href="#!" class="btn btn-with-icon btn-w240 ripple">
											<span>Pedir por Whatsapp <i class="material-icons material-icons-outlined">whatsapp</i></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</article>

			<div class="section section-bgc">
				<div class="container">
					<div class="row items">
						<header class="col-12">
							<div class="section-heading heading-center">
								<h1>Productos más vendidos</h1>
							</div>
						</header>
						<div class="col-12 item">
							<div class="row items">
								<div class="col-lg-4 col-md-4 col-sm-4 col-6 item">
                                    <div class="brands-item item-style">
                                        <img data-src="assets/img/products/producto1.jpeg" class="lazy" alt="">
                                    </div>
                                    <p class="text-center">Nombre del Producto - s/.50.00</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6 item">
                                    <div class="brands-item item-style">
                                        <img data-src="assets/img/products/producto2.jpeg" class="lazy" alt="">
                                    </div>
                                    <p class="text-center">Nombre del Producto - s/.50.00</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6 item">
                                    <div class="brands-item item-style">
                                        <img data-src="assets/img/products/producto3.jpeg" class="lazy" alt="">
                                    </div>
                                    <p class="text-center">Nombre del Producto - s/.50.00</p>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<?PHP include("shorts/foot.html"); ?>
	</main><!-- End main -->

	<script src="assets/libs/jquery/jquery.min.js"></script>
	<script src="assets/libs/lozad/lozad.min.js"></script>
	<script src="assets/libs/device/device.js"></script>
	<script src="assets/libs/spincrement/jquery.spincrement.min.js"></script>
	<script src="assets/libs/pristine/pristine.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/forms.js"></script>
	
</body>
</html>
