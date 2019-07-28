<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>AntarAja | Hubungi Kami</title>
  </head>
  <body>
    <?php $this->load->view("front/navbar") ?>
    <div class="container">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="assets\ContactFrom_v12\images\img-01.png" alt="IMG">
				</div>
				<div class="form-group">
					<?php if ($this->session->flashdata('success')): ?>
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
        </form>
  </body>
  <footer><?php $this->load->view("front/footer") ?></footer>
</html>
    <!--  $this->load->view("front/contact_us"); open php tag -->
