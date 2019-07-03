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
        User mail
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url("news"); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User mail</li>
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
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Konten</th>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
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
<script>
  function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
}
</script>
</body>
<link rel="stylesheet" href="<?php echo base_url('assets/backend/AdminLTE-2.4.5') ?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<script src="<?php echo base_url('assets/backend/AdminLTE-2.4.5') ?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/backend/AdminLTE-2.4.5') ?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<?php $this->load->view("back/js_admin") ?>
</html>
