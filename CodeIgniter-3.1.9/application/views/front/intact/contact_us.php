<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="assets\ContactFrom_v12\images\icons\favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="assets\ContactFrom_v12\vendor\bootstrap\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets\ContactFrom_v12\fonts\font-awesome-4.7.0\css\font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets\ContactFrom_v12\vendor\animate\animate.css">
	<link rel="stylesheet" type="text/css" href="assets\ContactFrom_v12\vendor\css-hamburgers\hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="assets\ContactFrom_v12\vendor\select2\select2.min.css">
	<link rel="stylesheet" type="text/css" href="assets\ContactFrom_v12\css\main.css">
	<link rel="stylesheet" type="text/css" href="assets\ContactFrom_v12\css\util.css">
</head>
<body>
		<div class="container">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="assets\ContactFrom_v12\images\img-01.png" alt="IMG">
				</div>
					<?php if ($this->session->flashdata('success')): ?>
						<div class="alert alert-success" role="alert">
							<?php echo $this->session->flashdata('success'); ?>
						</div>
			<?php endif; ?>

				<form action="<?php base_url('intact/add') ?>" method="post" enctype="multipart/form-data" class="contact100-form validate-form">
					<span class="contact100-form-title">
						Kirimkan Pesan Pada Kami
					</span>
					<div class="form-group">
						<label for="name">Nama</label>
						<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>" type="text" name="name"  placeholder="Nama">
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" type="text" name="email"  placeholder="email@email.com">
					</div>

					<div class="form-group">
						<label for="message">Pesan</label>
						<input class="form-control <?php echo form_error('message') ? 'is-invalid':'' ?>" type="text" name="message"  placeholder="Pesan">
					</div>

					<input class="btn btn-success" type="submit" name="btn" value="Save" />
					<!-- <div class="wrap-input100 validate-input form-group" data-validate = "Name is required">
						<label for="name">Name</label>
						<input class="input100" type="text" name="name" placeholder="Nama">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input form-group" data-validate = "Format Incorrect: email@mail.com">
						<label for="email">Email</label>
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input form-group" data-validate = "Message is required">
						<label for="message">Message</label>
						<textarea class="input100" name="message" placeholder="Message"></textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn" >
							<input type="submit" name="btn" value="">Send
						</button>
					</div> -->
				</form>
			</div>
		</div>





	<script src="assets\ContactFrom_v12\vendor\jquery\jquery-3.2.1.min.js"></script>
	<script src="assets\ContactFrom_v12\vendor\bootstrap\js\popper.js"></script>
	<script src="assets\ContactFrom_v12\vendor\bootstrap\js\bootstrap.min.js"></script>
	<script src="assets\ContactFrom_v12\vendor\select2\select2.min.css"></script>
	<script src="assets\ContactFrom_v12\vendor\tilt\tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

	<script src="assets\ContactFrom_v12\js\main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>
</html>
