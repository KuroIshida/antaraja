<?php $this->load->view("back/meta") ?>
<?php $this->load->view("back/head") ?>
<?php $this->load->view("back/sidebar") ?>

<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Data
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User Data</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <div class="box-body">
                <div class="form-group">

                  <h1><?php echo lang('deactivate_heading');?></h1>
                  <p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>

                  <?php echo form_open("auth/deactivate/".$user->id);?>

                    <p>
                    	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
                      <input type="radio" name="confirm" value="yes" checked="checked" />
                      <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
                      <input type="radio" name="confirm" value="no" />
                    </p>

                    <?php echo form_hidden($csrf); ?>
                    <?php echo form_hidden(['id' => $user->id]); ?>

                    <p><?php echo form_submit('submit', lang('deactivate_submit_btn'));?></p>

                  <?php echo form_close();?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php $this->load->view("back/footer") ?>
</div>
<!-- ./wrapper -->

<?php $this->load->view("back/js_admin") ?>
</body>
</html>
