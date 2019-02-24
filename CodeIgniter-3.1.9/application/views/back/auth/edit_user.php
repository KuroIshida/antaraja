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
                  <?php echo form_open(uri_string());?>
                        <p>
                              <?php echo lang('edit_user_fname_label', 'first_name');?> <br />
                              <?php echo form_input($first_name);?>
                        </p>
                        <p>
                              <?php echo lang('edit_user_lname_label', 'last_name');?> <br />
                              <?php echo form_input($last_name);?>
                        </p>
                        <p>
                              <?php echo lang('edit_user_company_label', 'company');?> <br />
                              <?php echo form_input($company);?>
                        </p>
                        <p>
                              <?php echo lang('edit_user_phone_label', 'phone');?> <br />
                              <?php echo form_input($phone);?>
                        </p>
                        <p>
                              <?php echo lang('edit_user_password_label', 'password');?> <br />
                              <?php echo form_input($password);?>
                        </p>
                        <p>
                              <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
                              <?php echo form_input($password_confirm);?>
                        </p>
                        <?php if ($this->ion_auth->is_admin()): ?>
                            <h3><?php echo lang('edit_user_groups_heading');?></h3>
                            <?php foreach ($groups as $group):?>
                                <label class="checkbox">
                                <?php
                                    $gID=$group['id'];
                                    $checked = null;
                                    $item = null;
                                    foreach($currentGroups as $grp) {
                                        if ($gID == $grp->id) {
                                            $checked= ' checked="checked"';
                                        break;
                                        }
                                    }
                                ?>
                                <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                                <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                                </label>
                            <?php endforeach?>
                        <?php endif ?>
                        <?php echo form_hidden('id', $user->id);?>
                        <?php echo form_hidden($csrf); ?>
                        <p><?php echo form_submit('submit', lang('edit_user_submit_btn'));?></p>
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
