<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>AntarAja | Hubungi Kami</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/AdminLTE-2.4.5/')?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/AdminLTE-2.4.5/')?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/AdminLTE-2.4.5/')?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/AdminLTE-2.4.5/')?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/AdminLTE-2.4.5/')?>dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/AdminLTE-2.4.5/')?>bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/AdminLTE-2.4.5/')?>bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/AdminLTE-2.4.5/')?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/AdminLTE-2.4.5/')?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/AdminLTE-2.4.5/')?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body>
    <div class="container">

    <div class="box-body">
      <div class="form-group">
        <?php if ($this->session->flashdata('success')): ?>
            <?php redirect(base_url()) ?>
          </div>
        <?php endif; ?>
        <form action="<?php base_url('front/message/add') ?>" method="post" enctype="multipart/form-data" >

          <div class="form-group">
            <label for="name">nama</label>
            <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
            type="text" name="name" placeholder="Nama" />
            <div class="invalid-feedback">
              <?php echo form_error('name') ?>
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
            type="text" name="email" placeholder="Email" />
            <div class="invalid-feedback">
              <?php echo form_error('email') ?>
            </div>
          </div>

          <div class="form-group">
            <label for="message">Message</label>
            <input class="form-control <?php echo form_error('message') ? 'is-invalid':'' ?>"
            type="text" name="message" placeholder="Message" />
            <div class="invalid-feedback">
              <?php echo form_error('message') ?>
            </div>
          </div>
          <input class="btn btn-success btn-lg" type="submit" name="btn" value="Save"/>
        </form>
      </div>
    </div>
  </body>
</html>
