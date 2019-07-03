<?php $this->load->view("back/meta") ?>
<?php $this->load->view("back/head") ?>
<?php $this->load->view("back/sidebar") ?>
<?php $this->load->view("back/news/modal"); ?>
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        FAQ
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url("news"); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">FAQ</li>
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
