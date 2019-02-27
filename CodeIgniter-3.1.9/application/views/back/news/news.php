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
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Headline</th>
                      <th>News Conteent</th>
                      <th>Picture</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($news as $value) { ?>
                      <tr>
                        <td><?php echo $value->id; ?></td>
                        <td><?php echo $value->headline; ?></td>
                        <td><?php echo $value->isi_berita; ?></td>
                        <td><?php echo $value->gambar; ?></td>
                        <td>
                          <a href="<?php echo site_url('news/edit/'.$value->id) ?>" class="btn btn-primary btn-fl" role="button">Edit</a>
                          <a onclick="deleteConfirm('<?php echo site_url('news/delete/'.$value->id) ?>')" href="#!" class="btn btn-danger btn-fl" role="button">Delete</a>
                        </td>
                      </tr>
                      <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <a href="#" class="btn btn-success btn-lg" role="button">Add News</a>
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

  function deleteConfirm(url){
  	$('#btn-delete').attr('href', url);
  	$('#deleteModal').modal();
  }
</script>
</html>
