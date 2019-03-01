<?php $this->load->view("back/meta") ?>
<?php $this->load->view("back/head") ?>
<?php $this->load->view("back/sidebar") ?>

<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit News
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit News</li>
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
                  <?php if ($this->session->flashdata('success')): ?>
                      <?php redirect(base_url('news')) ?>
                    </div>
                  <?php endif; ?>
                  <form action="<?php base_url('back/news/news') ?>" method="post" enctype="multipart/form-data" >
                    <input type="hidden" name="id" value="<?php echo $news->id?>" />
                    <div class="form-group">
                      <label for="headline">Headline</label>
                      <input class="form-control <?php echo form_error('headline') ? 'is-invalid':'' ?>"
                      type="text" name="headline" placeholder="Headline" />
                      <div class="invalid-feedback">
                        <?php echo form_error('headline') ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="isi_berita">Isi Berita</label>
                      <input class="form-control <?php echo form_error('isi_berita') ? 'is-invalid':'' ?>"
                      type="text" name="isi_berita" placeholder="Isi Berita" />
                      <div class="invalid-feedback">
                        <?php echo form_error('isi_berita') ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="name">Gambar</label>
                      <input class="form-control-file <?php echo form_error('name') ? 'is-invalid':'' ?>"
                      type="file" name="image" />
                      <div class="invalid-feedback">
                        <?php echo form_error('image') ?>
                      </div>
                    </div>

                    <input class="btn btn-success btn-lg" type="submit" name="btn" value="Save" />
                    <button href="" type="button" name="button" class="btn btn-danger btn-lg">Cancel</button>
                  </form>
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
