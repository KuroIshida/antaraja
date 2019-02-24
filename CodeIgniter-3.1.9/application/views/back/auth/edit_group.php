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
          <?php echo form_open(current_url());?>

                <p>
                      <?php echo lang('edit_group_name_label', 'group_name');?> <br />
                      <?php echo form_input($group_name);?>
                </p>

                <p>
                      <?php echo lang('edit_group_desc_label', 'description');?> <br />
                      <?php echo form_input($group_description);?>
                </p>

                <p><?php echo form_submit('submit', lang('edit_group_submit_btn'));?></p>

          <?php echo form_close();?>
                </div>
              </div>
            </div>
          </div>
    </section>
        </div>
        <?php $this->load->view("back/footer") ?>
      </div>
<?php $this->load->view("back/js_admin") ?>
</body>
</html>
