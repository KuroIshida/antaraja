<?php $this->load->view("back/meta") ?>
<?php $this->load->view("back/head") ?>
<?php $this->load->view("back/sidebar") ?>

<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add User</li>
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
              <?php echo form_open("admin/auth/create_user");?>
                    <p>
                          <?php echo lang('create_user_fname_label', 'first_name');?> <br />
                          <?php echo form_input($first_name);?>
                    </p>
                    <p>
                          <?php echo lang('create_user_lname_label', 'last_name');?> <br />
                          <?php echo form_input($last_name);?>
                    </p>
                    <?php
                    if($identity_column!=='email') {
                        echo '<p>';
                        echo lang('create_user_identity_label', 'identity');
                        echo '<br />';
                        echo form_error('identity');
                        echo form_input($identity);
                        echo '</p>';
                    }
                    ?>
                    <p>
                          <?php echo lang('create_user_company_label', 'company');?> <br />
                          <?php echo form_input($company);?>
                    </p>
                    <p>
                          <?php echo lang('create_user_email_label', 'email');?> <br />
                          <?php echo form_input($email);?>
                    </p>
                    <p>
                          <?php echo lang('create_user_phone_label', 'phone');?> <br />
                          <?php echo form_input($phone);?>
                    </p>
                    <p>
                          <?php echo lang('create_user_password_label', 'password');?> <br />
                          <?php echo form_input($password);?>
                    </p>
                    <p>
                          <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
                          <?php echo form_input($password_confirm);?>
                    </p><br/>
                    <p> <button type="submit" name="submit" class="btn btn-lg btn-primary">Submit</button> </p>
              <?php echo form_close();?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Control Sidebar -->

  <?php $this->load->view("back/footer") ?>
</div>
<!-- ./wrapper -->

<?php $this->load->view("back/js_admin") ?>
</body>
</html>
