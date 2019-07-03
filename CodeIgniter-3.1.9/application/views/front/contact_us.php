<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">
      <!--Form with header-->
      <form action="<?php base_url('back/intact/add') ?>" method="post">
        <div class="card border-primary rounded-0">
          <div class="card-header p-0">
            <div class="bg-info text-white text-center py-2">
              <h3><i class="fa fa-envelope"></i>Hubungi Kami</h3>
              <p class="m-0">Silahkan</p>
            </div>
          </div>
            <div class="card-body p-3">
              <!--Body-->
							<div class="form-group">
								<?php if ($this->session->flashdata('success')): ?>
									<?php redirect(base_url('intact')) ?>
								<?php endif; ?>
							</div>
              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                  </div>
                  <input type="text" class="form-control"  name="name" placeholder="Masukkan nama anda" required>
                </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                    </div>
                    <input type="email" class="form-control"  name="email" placeholder="example@gmail.com" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                    </div>
                    <textarea class="form-control"  name="message" placeholder="Masukkan Pesan Anda" required></textarea>
                  </div>
                </div>
                <div class="text-center">
                  <input type="submit" value="Send" class="btn btn-info btn-block rounded-0 py-2">
                </div>
            </div>
        </div>
      </form>
      <!--Form with header-->
    </div>
  </div>
</div>
