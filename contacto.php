<!DOCTYPE html><html lang="en">

<?PHP include("shorts/head.html"); ?>

<body>

	<main class="main">
		
		<div class="main-inner">

            <?PHP include("shorts/nav.html"); ?>

			<div class="section">
				<div class="container">
					<div class="row content-items">
						<div class="col-12">
							<div class="section-heading">
								<h1>Contáctanos</h1>
							</div>
						</div>
						<div class="col-xl-4 col-md-5 content-item">
							<div class="contact-info section-bgc">
								<h3>Mayor Información</h3>
								<ul class="contact-list">
									<li>
										<i class="material-icons material-icons-outlined md-22">smartphone</i>
										<div class="footer-contact-info">
											<a href="tel:+5199999999" class="formingHrefTel">+51 999 999 999</a>
										</div>
									</li>
									<li>
										<i class="material-icons material-icons-outlined md-22">email</i>
										<div class="footer-contact-info">
											<a href="mailto:mail@example.com">mail@example.com</a>
										</div>
									</li>
									<li>
										<i class="material-icons material-icons-outlined md-22">schedule</i>
										<div class="footer-contact-info"><p>Lun - Vie: 9:00 - 18:00</p></div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-xl-8 col-md-7 content-item">
							<form action="#!" method="post" class="form-submission contact-form contact-form-padding" novalidate>
								<input type="hidden" name="Subject" value="Contact form">
								<div class="row gutters-default">
									<div class="col-12">
										<h3>FORMULARIO</h3>
									</div>
									<div class="col-xl-4 col-sm-6 col-12">
										<div class="form-field">
											<label for="contact-name" class="form-field-label">Nombre Completo</label>
											<input type="text" class="form-field-input" name="Name" value="" autocomplete="off" id="contact-name" required data-pristine-required-message="This field is required.">
										</div>
									</div>
									<div class="col-xl-4 col-sm-6 col-12">
										<div class="form-field">
											<label for="contact-phone" class="form-field-label">Celular</label>
											<input type="tel" class="form-field-input mask-phone" name="Phone" value="" autocomplete="off" id="contact-phone" required data-pristine-required-message="This field is required.">
										</div>
									</div>
									<div class="col-xl-4 col-12">
										<div class="form-field">
											<label for="contact-email" class="form-field-label">Email</label>
											<input type="email" class="form-field-input" name="Email" value="" autocomplete="off" id="contact-email" required data-pristine-required-message="This field is required." data-pristine-email-message="Please enter a valid email address.">
										</div>
									</div>
									<div class="col-12">
										<div class="form-field">
											<label for="contact-message" class="form-field-label">Tu Mensaje</label>
											<textarea name="Message" class="form-field-input" id="contact-message" cols="30" rows="6"></textarea>
										</div>
										<div class="form-btn">
											<button type="submit" class="btn btn-w240 ripple"><span>Enviar</span></button>
										</div>
									</div>
								</div>
							</form>
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
